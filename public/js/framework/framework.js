var nodeCodeEditor;

var framework = {

    globalIndex: 0,

    // Code wallet
    codeWallet: [],

    // Generate node tree
    nodeTreeGenerator: function (node) {
        var nodeEl = node[0];
        var output = '<li data-index="' + this.globalIndex + '">';
        output += '<div class="node-content">' + nodeEl.tagName + this.parseTemplate('controls') + '</div>';

        this.codeWallet.push(node);

        // Increase index
        this.globalIndex++;

        if(node.children().length > 0){
            output += '<ul>';

            node.children().each(function () {
                output += framework.nodeTreeGenerator($(this));
            });

            output += '</ul>';
        }

        output += '</li>';

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

    // Set node code editor value
    setNodeCodeValue: function ($this) {
        var index = $this.closest("[data-index]").data("index"),
            nodeCode = this.codeWallet[index];

        nodeCodeEditor.setValue(nodeCode[0].outerHTML);
    },

    // Click events
    clickEvents: {
        editCode: function ($this) {

            if($('#node-code-editor').length !== 0) {
                framework.setNodeCodeValue($this);
                return;
            }

            jsPanel.create({
                id: 'code-editor-panel',
                container: 'body',
                theme: 'primary',
                headerTitle: 'Code Editor',
                position: 'right-bottom',
                contentSize: '500 250',
                content: '<div id="node-code-editor"></div>',
                callback: function () {
                    nodeCodeEditor = ace.edit("node-code-editor");
                    nodeCodeEditor.setTheme("ace/theme/monokai");
                    nodeCodeEditor.session.setMode("ace/mode/html");

                    framework.setNodeCodeValue($this);
                },
                onclosed: function () {

                }
            });
        }
    }
};

$(function () {
    // Listen to code change
    codeEditor.session.on('change', function() {
        // Reset code wallet & global index
        framework.codeWallet = [];
        framework.globalIndex = 0;
        
        var codeContent = codeEditor.getValue();
        var treeList = framework.nodeTreeGenerator($(codeContent));
        $('.tree-list').html(treeList);
        $('.preview-area').html(codeContent);
    });

    // Listen to click events
    $('body').on('click', '[bb-click]', function (e) {
        e.preventDefault();

        var clickEvent = $(this).attr("bb-click");
        framework.clickEvents[clickEvent]($(this));
    });
});