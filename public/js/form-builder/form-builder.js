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

                console.log($(ui).find(".form-element-item-sample"));

                template.attr('data-shortcode', $(ui.draggable).attr('data-shortcode'));
                template.attr('data-id', $(ui.draggable).attr('data-id'));
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
        });

    // Activate droppable areas
    activateDroppable();

    // Trigger open studio TODO: Remove this trigger
    // clickEvents.openStudioWindow($('[bb-click="openStudioWindow"]'));

});