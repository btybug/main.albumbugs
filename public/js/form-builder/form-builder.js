function uniqueID() {
    return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
}

$(document).ready(function () {

    // Click events
    var clickEvents = {
        // Open field window
        openFieldsWindow: function ($this) {
            jsPanel.create({
                id: 'fields-panel', container: 'body', theme: 'primary', boxShadow: 0, position: 'right-bottom', contentSize: '300 350',
                dragit: {
                    snap: true
                },
                headerTitle: 'Available Fields',
                content: loadTemplate('fields-html'),
                callback: function () {
                    $this.addClass("disabled");

                    // Draggable fields
                    $('.draggable-element').draggable({
                        revert:true,
                        proxy:'clone'
                    });;
                },
                onclosed: function () {
                    $this.removeClass("disabled");
                }
            });
        },
        // Open studio window
        openStudioWindow: function ($this) {
            jsPanel.create({
                id: 'studio-panel', container: 'body', theme: 'primary', boxShadow: 0, position: 'right-bottom', contentSize: '300 ' + ($(window).height() - 250),
                dragit: {
                    snap: true
                },
                headerTitle: 'Styling',
                content: '<div id="bb-css-studio"></div>',
                callback: function () {
                    $this.addClass("disabled");
                    // Init CSS studio
                    cssStudio.init();
                },
                onclosed: function () {
                    $this.removeClass("disabled");
                }
            });
        }
    };

    // Fields controls
    var fieldsControl = {
        activateField: function ($this) {
            drawActiveHelpers($this);
        }
    };

    function drawActiveHelpers($this){
        var width = $this.outerWidth(),
            height = $this.outerHeight(),
            left = $this.offset().left,
            top = $this.offset().top;

        // Activate node
        var nodeActionMenu = $('.bb-node-action-menu'),
            nodeActionSize = $('.bb-node-action-size');

        nodeActionSize.css({
            width: width,
            height: height,
            left: left,
            top: top
        });

        nodeActionMenu
            .css({
                left: left - 2,
                top: top - nodeActionMenu.outerHeight() - 2
            })
            .attr("data-selected-node", $this.attr("data-bb-id"));

        // Column resize
        var rowWidth = $this.parent('.row').outerWidth(),
            columnWidth = rowWidth/12;

        nodeActionSize.resizable({
            handles: 'e',
            grid: columnWidth,
            minWidth: 0.5,
            classes: {
                "ui-resizable-e": "bb-column-resize-handler"
            },
            start: function (){
                $this.parent('.row').addClass("grid-overlay");
            },
            stop: function (){
                $this.parent('.row').removeClass("grid-overlay");
            },
            resize: function (event,ui){
                var columns,
                    width = ui.size.width;

                columns = Math.round(width/columnWidth);

                // Remove column classes
                $this.removeClass (function (index, className) {
                    return (className.match (/(^|\s)col-md-\S+/g) || []).join(' ');
                });

                // Add new column class
                $this.addClass("col-md-" + columns);

                // Redraw active helpers
                drawActiveHelpers($this);
            }
        });
    }

    // Droppable fields area
    function activateDroppable() {
        $('body').find('.form-builder-area').droppable({
            accept: ".draggable-element",
            onDragEnter: function (e,source) {

            },
            onDragLeave:function(e,source){

            },
            onDrop: function (event, ui) {
                // Insert template
                var elementHTML = $(ui).find(".form-element-item-sample").html(),
                    template = $(elementHTML),
                    target = $('.form-builder-area');

                template.attr('data-field', true);

                $(ui).hide();
                target.append(template);
            }
        }).sortable({
            update: function (event, ui) {

            }
        });
    }

    // Load inline template
    function loadTemplate(template){
        return $('#' + template).html();
    }

    // Body events
    $('body')
        .on('click', '[bb-click]', function (e) {
            e.preventDefault();
            var event = $(this).attr('bb-click');
            clickEvents[event]($(this), e);
        })
        .on('click', '[data-field]', function (e) {
            e.preventDefault();
            fieldsControl.activateField($(this));
        });

    // Activate droppable areas
    activateDroppable();

    // Trigger open studio TODO: Remove this trigger
    // clickEvents.openStudioWindow($('[bb-click="openStudioWindow"]'));
    clickEvents.openFieldsWindow($('[bb-click="openFieldsWindow"]'));

});