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
                id: 'fields-panel',
                container: 'body',
                theme: 'primary',
                boxShadow: 0,
                position: 'right-bottom',
                contentSize: '300 350',
                dragit: {
                    snap: true
                },
                headerTitle: 'Available Fields',
                content: loadTemplate('fields-html'),
                callback: function () {
                    $this.addClass("disabled");

                    // Draggable fields
                    $('.draggable-element').draggable({
                        helper: 'clone'
                    });
                },
                onclosed: function () {
                    $this.removeClass("disabled");
                }
            });
        },
        // Open studio window
        openStudioWindow: function ($this) {
            $('.bbs-field-selectors>li').removeClass("active");
            $this.parent("li").addClass("active");

            if ($('#studio-panel').length !== 0) {
                // Init CSS studio
                cssStudio.init();
                return;
            }

            jsPanel.create({
                id: 'studio-panel',
                container: 'body',
                theme: 'primary',
                boxShadow: 0,
                position: 'right-bottom',
                contentSize: '300 ' + ($(window).height() - 250),
                dragit: {
                    snap: true
                },
                headerTitle: 'Styling',
                content: '<div id="bb-css-studio" class="bb-css-studio"></div>',
                callback: function () {
                    // Init CSS studio
                    cssStudio.init();
                },
                onclosed: function () {}
            });
        },
        // Open add class window
        openAddClassWindow: function ($this) {
            $('.bbs-field-selectors>li').removeClass("active");
            $this.parent("li").addClass("active");

            var activeElement = $('.bbs-field-selectors>li.active');
            var activeSelector = $('.bbs-field-selectors>li').first().data("selector") + " " + activeElement.data("selector");

            if ($('.bbs-field-selectors>li').first().data("selector") === activeElement.data("selector")) {
                activeSelector = activeElement.data("selector");
            }

            if ($('#add-class-panel').length !== 0) {

                return;
            }

            jsPanel.create({
                id: 'add-class-panel',
                container: 'body',
                theme: 'primary',
                boxShadow: 0,
                position: 'right-center',
                contentSize: '300 350',
                dragit: {
                    snap: true
                },
                headerTitle: 'Add Class',
                content: '<div id="bb-css-add-class" class="bb-css-studio"></div>',
                callback: function () {
                    var template = parseTemplate('bbt-edit-panel', {
                        element: activeElement.text().trim(),
                        selector: activeSelector
                    });

                    $('#bb-css-add-class').html(template);

                    // Tags input
                    $('.element-classes').tagsinput({
                        tagClass: 'badge badge-dark'
                    });
                },
                onclosed: function () {}
            });
        },
        // Open selectors window
        openSelectorsWindow: function ($this) {

            if ($('#selectors-panel').length !== 0) {
                clickEvents.loadSelectorsTemplate($this);
                return;
            }

            jsPanel.create({
                id: 'selectors-panel',
                container: 'body',
                theme: 'primary',
                boxShadow: 0,
                position: 'right-top',
                contentSize: '300 170',
                dragit: {
                    snap: true
                },
                headerTitle: 'Select Element',
                content: '<div class="bb-css-studio"></div>',
                callback: function () {
                    $this.addClass("disabled");

                    // Load selectors template
                    clickEvents.loadSelectorsTemplate($this);
                },
                onclosed: function () {
                    $this.removeClass("disabled");
                }
            });

        },
        // Load selectors template
        loadSelectorsTemplate: function ($this) {
            var mainSelector = $this.data("main");
            var selectors = {
                containerSelector: '.bbcc-form .form-group',
                labelSelector: 'h4',
                iconSelector: '.field-icon',
                helpIconSelector: '.help-icon',
                helpPopupSelector: '.help-popup'
            };

            if(mainSelector !== "global"){
                selectors.containerSelector = '.bbcc-field-' + $this.data("field-id");
            }

            var template = parseTemplate("bbt-field-selector", selectors);
            $('.bb-css-studio').html(template);
        },
        // Toggle resizing mode
        toggleResize: function ($this) {
            if ($this.hasClass("disabled")) {
                $this.removeClass("disabled");
                $('.bb-column-resize-handler').css("visibility", "visible");
                $('.bb-node-action-size').css("pointer-events", "all");
            }
            else {
                $this.addClass("disabled");
                $('.bb-column-resize-handler').css("visibility", "hidden");
                $('.bb-node-action-size').css("pointer-events", "none");
            }
        },
        // Delete active field
        deleteActiveField: function ($this) {
            $('[data-active-field]').fadeOut(function () {
                var fieldID = $(this).attr("data-id");
                $('.form-element-item[data-id=' + fieldID + ']').show();
                $(this).remove();
                hideActiveNode();
            });
        },
        // Save html
        saveHTML: function ($this) {
            var fields = $('.form-builder-area').children(),
                fieldsHTML = '',
                originalHTML = '',
                fieldsIDs = [];

            if (fields.length === 0) {
                alert("Please add fields first");
                return;
            }

            fieldsHTML += '<div class="row bbcc-form">';

            $.each(fields, function (index, field) {
                var cleanField = $(field).clone(),
                    shortCode = cleanField.data("shortcode");

                originalHTML += cleanField.get(0).outerHTML;

                fieldsIDs.push(cleanField.data("id"));

                cleanField.removeAttr("data-field data-id data-shortcode");
                cleanField.html(shortCode);

                fieldsHTML += cleanField.get(0).outerHTML;
            });

            fieldsHTML += '</div>';

            $('.generated_html').val(fieldsHTML);
            $('.original_html').val(originalHTML);
            $('.generated_json').val(JSON.stringify(fieldsIDs));

            // Submit form
            $('#fields-list')[0].submit();
        }
    };

    // Fields controls
    var fieldsControl = {
        activateField: function ($this) {
            // Reset resizable
            $('.bb-node-move').addClass("disabled");
            $('.bb-node-action-size').css("pointer-events", "none");

            // Mark as active
            $('[data-active-field]').removeAttr("data-active-field");
            $this.attr("data-active-field", true);

            // Draw active helpers
            drawActiveHelpers($this);
        }
    };

    function drawActiveHelpers($this) {
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
            columnWidth = rowWidth / 12;

        nodeActionSize.resizable({
            handles: 'e',
            grid: columnWidth,
            minWidth: 0.5,
            classes: {
                "ui-resizable-e": "bb-column-resize-handler"
            },
            start: function () {
                $this.parent('.row').addClass("grid-overlay");
            },
            stop: function () {
                $this.parent('.row').removeClass("grid-overlay");
            },
            resize: function (event, ui) {
                var columns,
                    width = ui.size.width;

                columns = Math.round(width / columnWidth);

                // Remove column classes
                $this.removeClass(function (index, className) {
                    return (className.match(/(^|\s)col-md-\S+/g) || []).join(' ');
                });

                // Add new column class
                $this.addClass("col-md-" + columns);

                // Redraw active helpers
                drawActiveHelpers($this);
            }
        });
    }

    function hideActiveNode() {
        $('.bb-node-action-menu, .bb-node-active-title').css({
            left: -2000
        });

        $('.bb-node-action-size').css({
            width: 0,
            height: 0,
            left: -2000
        });
    }

    // Droppable fields area
    function activateDroppable() {
        $('body').find('.form-builder-area').droppable({
            accept: ".draggable-element",
            classes: {
                "ui-droppable-active": "form-area-active",
                "ui-droppable-hover": "form-area-hover"
            },
            drop: function (event, ui) {
                // Insert template
                var elementHTML = $(ui.draggable).find(".form-element-item-sample").html(),
                    template = $(elementHTML),
                    target = $('.form-builder-area');

                template.attr('data-field', true);
                template.attr('data-id', $(ui.draggable).attr("data-id"));
                template.attr('data-shortcode', $(ui.draggable).attr("data-shortcode"));

                $(ui.draggable).hide();
                target.append(template);
            }
        }).sortable({
            helper: "clone",
            start: function (event, ui) {
                var $this = $(ui.item);
                $('.ui-sortable-placeholder').css("height", $this.height());
                hideActiveNode();
            },
            stop: function (event, ui) {
                var $this = $(ui.item);
                fieldsControl.activateField($this);
            }
        });
    }

    // Load inline template
    function loadTemplate(template) {
        return $('#' + template).html();
    }

    // Parse inline template
    function parseTemplate(template, variables) {
        var templateHTML = $('#' + template).html();
        $.each(variables, function (key, value) {
            key = "{" + key + "}";
            templateHTML = templateHTML.replace(new RegExp(key, "gm"), value);
        });

        return templateHTML;
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
        })
        .on("click", ".class-item", function () {
            $('.element-classes').tagsinput('add', $(this).attr("data-class"));
        });

    // Activate droppable areas
    activateDroppable();

    // Trigger open studio TODO: Remove this trigger
    // clickEvents.openStudioWindow($('[bb-click="openStudioWindow"]'));
    // clickEvents.openFieldsWindow($('[bb-click="openFieldsWindow"]'));

});