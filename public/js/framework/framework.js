var codeEditor,
    phpCodeEditor,
    phpNodeCodeEditor;

var framework = {

    globalIndex: 0,

    // Code wallet
    codeWallet: [],

    // Current Node code
    currentNodeCode: '',

    // Generate node tree
    nodeTreeGenerator: function (node) {
        var nodeEl = node[0];
        var output = '';

        if (nodeEl.tagName !== "WRAP") {
            output += '<li data-index="' + this.globalIndex + '">';
            output += '<div class="node-content">' + nodeEl.tagName + this.parseTemplate('controls') + '</div>';
        }

        this.codeWallet.push(node);

        // Increase index
        this.globalIndex++;

        if (node.children().length > 0) {
            if (nodeEl.tagName !== "WRAP") {
                output += '<ul>';
            }

            node.children().each(function () {
                output += framework.nodeTreeGenerator($(this));
            });

            if (nodeEl.tagName !== "WRAP") {
                output += '</ul>';
            }
        }

        if (nodeEl.tagName !== "WRAP") {
            output += '</li>';
        }

        return output;
    },

    // Parse templates
    parseTemplate: function (template, variables) {
        var templateHTML = $('#bbt-' + template).html();
        $.each(variables, function (key, value) {
            key = "{" + key + "}";
            templateHTML = templateHTML.replace(new RegExp(key, "gm"), value);
        });

        return templateHTML;
    },

    // Get node code editor value
    getNodeCodeValue: function ($this) {
        var index = $this.closest("[data-index]").data("index"),
            nodeCode = this.codeWallet[index];

        return nodeCode[0].outerHTML;
    },

    // Generate inserted code list of content and attributes
    generateInsertedList: function () {
        var nodeCode = phpNodeCodeEditor.getValue(),
            nodeCodeEl = $(nodeCode),
            list = '';

        if(nodeCodeEl.text()){
            list += '<div class="content-item"> Content <div class="controls"> <a href="#" bb-click="removeNodeContent"><i class="fas fa-trash"></i></a> </div> </div>';
        }

        $.each(nodeCodeEl[0].attributes, function() {
            list += '<div class="attribute-item"> Attribute: ' + this.name + '<div class="controls"> <a href="#" bb-click="removeNodeAttr" data-attr="' + this.name + '"><i class="fas fa-trash"></i></a> </div> </div>';
        });

        $('.inserted-code').html(list);
    },

    // Click events
    clickEvents: {
        editPHPCode: function ($this) {
            // Get last saved code
            var nodeCode = framework.getNodeCodeValue($this);
            phpNodeCodeEditor.setValue(nodeCode);
            phpNodeCodeEditor.clearSelection();

            $('#current-node-text').text($this.closest('.node-content').text().trim());
            $('[bb-click="nodePHPCodeSave"]').attr("data-to-index", $this.closest('li').data("index"));

            framework.currentNodeCode = nodeCode;

            framework.hideElement($('.tree-list'));
            framework.showElement($('.node-code-editor-area'));

            framework.showElement($('.inserted-code'));

            framework.showElement($('.node-php-code-item'));
            framework.hideElement($('.php-code-item'));

            framework.generateInsertedList();
        },
        nodePHPCodeDiscard: function () {
            framework.showElement($('.tree-list'));
            framework.hideElement($('.node-code-editor-area'));

            framework.hideElement($('.node-php-code-item'));
            framework.showElement($('.php-code-item'));

            framework.hideElement($('.inserted-code'));
        },
        nodePHPCodeSave: function () {
            var nodeCode = framework.currentNodeCode,
                modifiedCode = phpNodeCodeEditor.getValue(),
                mainCode = codeEditor.getValue(),
                newCode;

            newCode = mainCode.replace(nodeCode, modifiedCode);
            codeEditor.setValue(newCode);
            codeEditor.clearSelection();

            framework.showElement($('.tree-list'));
            framework.hideElement($('.node-code-editor-area'));

            framework.hideElement($('.node-php-code-item'));
            framework.showElement($('.php-code-item'));

            framework.hideElement($('.inserted-code'));
        },
        addCode: function () {
            var codeToInsert = '{!! ' + $('.node-code-select').val() + ' !!}',
                whereToInsert = $('.node-code-position').val(),
                nodeCode = phpNodeCodeEditor.getValue(),
                modifiedCode,
                customAttr = $('#custom-attribute').val();

            var nodeCodeEl = $(nodeCode);
            if(whereToInsert === "Attribute"){
                if(!customAttr) return;
                whereToInsert = customAttr;
            }

            if(whereToInsert === "Content"){
                nodeCodeEl.html(codeToInsert);
            }else{
                nodeCodeEl.attr(whereToInsert, codeToInsert);
            }

            modifiedCode = nodeCodeEl[0].outerHTML;

            phpNodeCodeEditor.setValue(he.decode(modifiedCode));
            phpNodeCodeEditor.clearSelection();

            framework.generateInsertedList();
        },
        removeNodeAttr: function ($this) {
            var nodeCode = phpNodeCodeEditor.getValue(),
                nodeCodeEl = $(nodeCode),
                modifiedCode;

            nodeCodeEl.removeAttr($this.data("attr"));

            modifiedCode = nodeCodeEl[0].outerHTML;

            phpNodeCodeEditor.setValue(he.decode(modifiedCode));
            phpNodeCodeEditor.clearSelection();

            framework.generateInsertedList();
        },
        removeNodeContent: function ($this) {
            var nodeCode = phpNodeCodeEditor.getValue(),
                nodeCodeEl = $(nodeCode),
                modifiedCode;

            nodeCodeEl.html('');
            modifiedCode = nodeCodeEl[0].outerHTML;

            phpNodeCodeEditor.setValue(he.decode(modifiedCode));
            phpNodeCodeEditor.clearSelection();

            framework.generateInsertedList();
        },
        mainPHPCodeEdit: function ($this) {
            // Get last saved code
            var lastSavedCode  = framework.localGet("mainPHPCode");
            if(lastSavedCode) phpCodeEditor.setValue(lastSavedCode);
            phpCodeEditor.clearSelection();

            framework.hideElement($this);
            framework.hideElement($('.tree-list'));
            framework.showElement($('.code-editor-area'));
            framework.showElement($('[bb-click=mainPHPCodeDiscard]'));
            framework.showElement($('[bb-click=mainPHPCodeSave]'));
        },
        mainPHPCodeDiscard: function ($this) {
            // Get last saved code
            var lastSavedCode  = framework.localGet("mainPHPCode");

            // Clear value
            if(lastSavedCode) phpCodeEditor.setValue(lastSavedCode);
            phpCodeEditor.clearSelection();

            // Show/Hide Buttons
            framework.showElement($('[bb-click=mainPHPCodeEdit]'));
            framework.hideElement($('[bb-click=mainPHPCodeDiscard]'));
            framework.hideElement($('[bb-click=mainPHPCodeSave]'));

            // Show tree & Hide Editor
            setTimeout(function () {
                framework.showElement($('.tree-list'));
                framework.hideElement($('.code-editor-area'));
            });
        },
        mainPHPCodeSave: function ($this) {
            // Save code
            framework.localSave("mainPHPCode", phpCodeEditor.getValue());

            // Show/Hide Buttons
            framework.showElement($('[bb-click=mainPHPCodeEdit]'));
            framework.hideElement($('[bb-click=mainPHPCodeDiscard]'));
            framework.hideElement($('[bb-click=mainPHPCodeSave]'));

            // Show tree & Hide Editor
            setTimeout(function () {
                framework.showElement($('.tree-list'));
                framework.hideElement($('.code-editor-area'));
            });
        },
        openCSSEditor: function ($this) {
            $('.style-studio-container').animate({
                height: 200
            }, 300, function () {
                $('.bb-css-studio').addClass('no-active');
                framework.showElement($('.closeCSSEditor'));
                framework.hideElement($('.openCSSEditor'));

                var index = $this.closest('li').data('index');
                if(index){
                    $( ".bbs-field-selectors li:eq( " + index + " )" ).trigger('click');
                }
            });
        },
        closeCSSEditor: function ($this) {
            $('.bb-css-studio').removeClass('no-active');
            $('.style-studio-container').animate({
                height: 0
            }, 300, function () {
                framework.showElement($('.openCSSEditor'));
                framework.hideElement($('.closeCSSEditor'));
            });
        }
    },

    // Show
    showElement: function (element) {
        element.removeAttr("hidden");
    },

    // Hide
    hideElement: function (element) {
        element.attr("hidden", true);
    },

    // Save data in localstorage
    localSave: function (key, data) {
        localStorage.setItem(key, data);
    },

    // Get data from localstorage
    localGet: function (key) {
        localStorage.getItem(key)
    }
};

$(function () {
    // Init code editors
    codeEditor = ace.edit("code-editor");
    codeEditor.setTheme("ace/theme/monokai");
    codeEditor.session.setMode("ace/mode/php");
    codeEditor.getSession().setUseWrapMode(true);
    codeEditor.$blockScrolling = Infinity;

    phpCodeEditor = ace.edit("php-code-editor");
    phpCodeEditor.setTheme("ace/theme/monokai");
    phpCodeEditor.session.setMode("ace/mode/php");
    phpCodeEditor.getSession().setUseWrapMode(true);
    phpCodeEditor.$blockScrolling = Infinity;
    phpCodeEditor.setValue('<?php \n\t// Write your code here\n\t\n ?>');
    phpCodeEditor.selection.moveTo(2, 1);
    phpCodeEditor.clearSelection();

    phpNodeCodeEditor = ace.edit("php-node-code-editor");
    phpNodeCodeEditor.setTheme("ace/theme/monokai");
    phpNodeCodeEditor.session.setMode("ace/mode/php");
    phpNodeCodeEditor.setReadOnly(true);
    phpNodeCodeEditor.getSession().setUseWrapMode(true);
    phpNodeCodeEditor.$blockScrolling = Infinity;

    // Listen to code change
    codeEditor.session.on('change', function () {
        // Reset code wallet & global index
        framework.codeWallet = [];
        framework.globalIndex = 0;

        var codeContent = codeEditor.getValue();
        var treeList = framework.nodeTreeGenerator($('<wrap>' + codeContent + '</wrap>'));

        $('.tree-list').html(treeList);

        // Live render
        var data = {'html': phpCodeEditor.getValue().toString() + codeContent.toString()};
        $.ajax({
            url: $('#renderUrl').val(),
            type: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            },
            success: function (data) {
                if (!data.error) {
                    $('.preview-area').html(data.html);

                    // Init CSS Studio
                    $('#bb-css-studio').html('');

                    cssStudio.init(data.html, {
                        cssOutputSelector: '#bbcc-custom-style',
                        parentSelector: '.preview-area'
                    });

                    $('.closeCSSEditor').trigger('click');
                    setTimeout(function () {
                        framework.showElement($('.openCSSEditor'));
                    }, 300);

                }
            }
        });
    });

    // Listen to click events
    $('body').on('click', '[bb-click]', function (e) {
        e.preventDefault();

        var clickEvent = $(this).attr("bb-click");
        framework.clickEvents[clickEvent]($(this));
    });

    // Node code position change event
    $('.node-code-position').change(function () {
        if($(this).val() === "Attribute"){
            framework.showElement($('.custom-attribute'));
        }else{
            framework.hideElement($('.custom-attribute'));
        }
    });

    // Search code API
    $("#search-code").easyAutocomplete({
        url: ajaxUrl.frameworkUrl + 'bb-functions/get-bb-fn-list',
        ajaxSettings: {
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            }
        },

        getValue: function(element) {
            return element.value;
        },

        list: {
            onChooseEvent: function () {
                var selectedData = $("#search-code").getSelectedItemData();
                phpCodeEditor.session.insert(phpCodeEditor.getCursorPosition(), selectedData.value);
            }
        },

        theme: "square"
    });
});