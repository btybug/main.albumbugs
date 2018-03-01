var cssStudio = {
    properties: [
        {
            title: 'Text',
            fields: [
                {
                    title: 'Font Family',
                    css: 'font-family',
                    type: 'dropdown',
                    options: [
                        {
                            value: 'tahoma',
                            title: 'Tahoma'
                        },
                        {
                            value: 'arial',
                            title: 'Arial'
                        }
                    ]
                },
                {
                    title: 'Font Weight',
                    css: 'font-weight',
                    type: 'dropdown',
                    options: [
                        {
                            value: 'normal',
                            title: 'Normal'
                        },
                        {
                            value: 'bold',
                            title: 'Bold'
                        }
                    ]
                },
                {
                    title: 'Font Size',
                    css: 'font-size',
                    type: 'number'
                },
                {
                    title: '',
                    css: 'font-size-unit',
                    type: 'toggle',
                    options: [
                        {
                            value: 'px',
                            title: 'px'
                        },
                        {
                            value: 'em',
                            title: 'em'
                        },
                        {
                            value: '%',
                            title: '%'
                        }
                    ]
                },
                {
                    title: 'Text Color',
                    css: 'color',
                    type: 'color'
                },
                {
                    title: 'Text Align',
                    css: 'text-align',
                    type: 'toggle',
                    options: [
                        {
                            value: 'right',
                            title: 'Right'
                        },
                        {
                            value: 'center',
                            title: 'Center'
                        },
                        {
                            value: 'left',
                            title: 'Left'
                        }
                    ]
                }
            ]
        },
        {
            title: 'Background',
            fields: [
                {
                    title: 'Background Color',
                    css: 'background-color',
                    type: 'color'
                }
            ]
        }
    ],

    // Load template
    loadTemplate: function loadTemplate(template) {
        return $('#bbt-' + template).html();
    },

    // Get properties array
    getProperties: function () {
        return this.properties;
    },

    // Render field type
    renderField: function (field) {
        var fieldTemplate = this.loadTemplate(field.type),
            buildOptions = '';

        if (field.type === "dropdown") {
            buildOptions = '';
            if (field.options && field.options.length > 0) {
                $.each(field.options, function (i, option) {
                    buildOptions += '<option value="' + option.value + '">' + option.title + '</option>';
                });

                fieldTemplate = fieldTemplate.replace(/{options}/g, buildOptions);
            }
        }

        if (field.type === "toggle") {
            buildOptions = '';
            if (field.options && field.options.length > 0) {
                $.each(field.options, function (i, option) {
                    buildOptions += '<label class="form-check-label">' + '<input class="form-check-input" type="radio" name="' + field.css + '" value="' + option.value + '">' + option.title + '</label>';
                });

                fieldTemplate = fieldTemplate.replace(/{options}/g, buildOptions);
            }
        }

        return fieldTemplate;
    },

    // Click events
    clickEvents: {
        // Toggle open and close groups
        toggleOpen: function ($this) {
            var isOpened = $this.attr("data-opened");

            if (isOpened) {
                // Mark as closed
                $this.removeAttr("data-opened");

                // Show all groups
                $('.bbs-property-group').show();

                // Hide lists
                $('.bbs-properties-list').hide();

                // Flip chevron
                $this.find("i").removeClass("fa-chevron-down");
                $this.find("i").addClass("fa-chevron-right");
            }
            else {
                // Mark as opened
                $this.attr("data-opened", true);

                // Hide all lists
                $('.bbs-property-group').hide();
                $('.bbs-properties-list').hide();

                // Show clicked list
                $this.parent('.bbs-property-group').show();
                $this.parent('.bbs-property-group').find('.bbs-properties-list').show();

                // Flip chevron
                $this.find("i").removeClass("fa-chevron-right");
                $this.find("i").addClass("fa-chevron-down");
            }
        }
    },

    // Build editor list
    buildEditorList: function () {
        var $this = this,
            properties = this.getProperties(),
            listTemplate = this.loadTemplate('editor-list'),
            groupsHTML = '';

        // Group
        $.each(properties, function (i, propertyGroup) {
            var groupTemplate = $this.loadTemplate('properties-container'),
                fieldsHTML = '';

            groupTemplate = groupTemplate.replace(/{title}/g, propertyGroup.title);

            // Field container
            $.each(propertyGroup.fields, function (i, field) {
                var fieldTemplate = $this.loadTemplate('property-container');
                fieldTemplate = fieldTemplate.replace(/{label}/g, field.title);
                fieldTemplate = fieldTemplate.replace(/{id}/g, field.css);

                // Field HTML
                if (field.type && $this.loadTemplate(field.type)) {
                    var fieldTypeTemplate = $this.renderField(field);
                    fieldTypeTemplate = fieldTypeTemplate.replace(/{id}/g, field.css);
                    fieldTypeTemplate = fieldTypeTemplate.replace(/{name}/g, field.css);

                    fieldTemplate = fieldTemplate.replace(/{field}/g, fieldTypeTemplate);
                    fieldsHTML += fieldTemplate;
                }
            });

            groupTemplate = groupTemplate.replace(/{properties}/g, fieldsHTML);

            groupsHTML += groupTemplate;
        });

        listTemplate = listTemplate.replace(/{groups}/g, groupsHTML);

        $('#bb-css-studio').html(listTemplate);

        // Init fields JS actions
        this.fieldsJSActions();
    },

    // CSS JSON Object
    CSSJSON: {},

    // Update CSS
    updateCSS: function (property, value) {
        cssStudio.CSSJSON[property] = value;

        var cssString = "",
            cssJSON = cssStudio.CSSJSON;

        cssString += ".bbcc-form {";

        for (var cssPropertyName in cssJSON) {
            cssString += cssPropertyName + ": " + cssJSON[cssPropertyName] + ";";
        }

        cssString += "}";

        $('#bbcc-form-style').text(cssString);
    },

    // Fields JS Actions
    fieldsJSActions: function () {
        var updateCSS = this.updateCSS;

        // Combo box field
        easyloader.load(['combobox', 'menu'], function () {
            $('.bbs-combobox').combobox({
                onChange: function (value) {
                    var property = $(this).attr("textboxname");
                    updateCSS(property, value);
                }
            });
        });

        // Number
        easyloader.load('numberspinner', function () {
            $('.bbs-number').numberspinner({
                min: 10,
                max: 100,
                editable: false,
                suffix: 'px',
                onChange: function (value) {
                    var property = $(this).attr("textboxname");
                    updateCSS(property, value);
                }
            });
        });

        // Color
        $('.bbs-color').minicolors({
            format: 'rgb',
            opacity: true,
            change: function (value) {
                var property = $(this).attr("name");
                updateCSS(property, value);
            }
        });

        // Toggle
        $('.bbs-toggle').toggleInput(function ($this) {
            var property = $this.attr("name");
            updateCSS(property, $('[name=' + property + ']:checked').val());
        });
    },

    // Init CSS Studio
    init: function () {
        var $this = this;
        this.buildEditorList();

        // Events
        $('#bb-css-studio').on('click', '[bbs-click]', function (e) {
            e.preventDefault();
            var event = $(this).attr('bbs-click');
            $this.clickEvents[event]($(this), e);
        });
    }
};