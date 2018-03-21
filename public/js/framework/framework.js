var nodeCodeEditor;

var framework = {

    globalIndex: 0,

    // Code wallet
    codeWallet: [],

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

    // Click events
    clickEvents: {
        editPHPCode: function ($this) {

            // Get last saved code
            var nodeCode = framework.getNodeCodeValue($this);
            phpCodeEditor.setValue(nodeCode);

            framework.hideElement($this);
            framework.hideElement($('.tree-list'));
            framework.showElement($('.node-code-editor-area'));
            framework.showElement($('[bb-click=mainPHPCodeDiscard]'));
            framework.showElement($('[bb-click=mainPHPCodeSave]'));
        },
        mainPHPCodeEdit: function ($this) {
            // Get last saved code
            var lastSavedCode  = framework.localGet("mainPHPCode");
            if(lastSavedCode) phpCodeEditor.setValue(lastSavedCode);

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
            phpCodeEditor.setValue(lastSavedCode);
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

    // Search code API
    $("#search-code").easyAutocomplete({
        url: 'http://mainbug.local/admin/framework/bb-functions/get-bb-fn-list',
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