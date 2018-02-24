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
                },
                onclosed: function () {
                    $this.removeClass("disabled");
                }
            });
        },
        // Open studio window
        openStudioWindow: function ($this) {
            jsPanel.create({
                id: 'studio-panel', container: 'body', theme: 'primary', boxShadow: 0, position: 'right-bottom', contentSize: '300 350',
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

});