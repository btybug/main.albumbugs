var framework = {

    // Generate node tree
    nodeTreeGenerator: function (node) {
        var nodeEl = node[0];
        var output = '<li>';
        output += '<div class="node-content">' + nodeEl.tagName + this.parseTemplate('controls') + '</div>';

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

    // Click events
    clickEvents: {
        editCode: function ($this) {
            jsPanel.create({
                id: 'code-editor-panel',
                container: 'body',
                theme: 'primary',
                headerTitle: 'Code Editor',
                position: 'right-bottom',
                contentSize: '500 250',
                content: '<div id="node-code-editor"></div>',
                callback: function () {
                    var nodeCodeEditor = ace.edit("node-code-editor");
                    nodeCodeEditor.setTheme("ace/theme/monokai");
                    nodeCodeEditor.session.setMode("ace/mode/html");
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