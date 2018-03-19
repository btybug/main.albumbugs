var framework = {

    nodeTreeGenerator: function (node) {
        var nodeEl = node[0];
        var output = '<li>';
        output += '<div class="node-content">' + nodeEl.tagName + '</div>';

        if(node.children().length > 0){
            output += '<ul>';

            node.children().each(function () {
                output += framework.nodeTreeGenerator($(this));
            });

            output += '</ul>';
        }

        output += '</li>';

        return output;
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
});