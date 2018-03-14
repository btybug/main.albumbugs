var unitArray = [
    { value: 'px', title: 'px' },
    { value: 'em', title: 'em' },
    { value: '%', title: '%' }
];

var cssStudio = {

    // Load template
    loadTemplate: function loadTemplate(template) {
        return $('#bbt-' + template).html();
    },

    // Parse inline template
    parseTemplate: function (template, variables) {
        var templateHTML = $('#bbt-' + template).html();
        $.each(variables, function (key, value) {
            key = "{" + key + "}";
            templateHTML = templateHTML.replace(new RegExp(key, "gm"), value);
        });

        return templateHTML;
    },

    // Get properties array
    getProperties: function () {
        var $this = this;
        $.getJSON(ajaxLinks.baseUrl + '/public/js/form-builder/studio.json', function (jsonProperties) {
            $this.buildEditorList(jsonProperties);
        });
    },

    // Render field type
    renderField: function (field) {
        var fieldTemplate = this.loadTemplate(field.type),
            buildOptions = '';

        if(field.options === "unitArray") field.options = unitArray;

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

        if(field.hasUnit){
            field.hasUnit.css = field.css + "-unit";
            fieldTemplate += cssStudio.renderField(field.hasUnit);
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
    buildEditorList: function (properties) {
        var $this = this,
            groupsHTML = '',
            activeElement = $('.bbs-field-selectors>li.active');

        var activeSelector = $('.bbs-field-selectors>li').first().data("selector") + " " + activeElement.data("selector");

        if ($('.bbs-field-selectors>li').first().data("selector") === activeElement.data("selector")) {
            activeSelector = activeElement.data("selector");
        }

        var listTemplate = this.parseTemplate('editor-list', {
            element: activeElement.text().trim(),
            selector: activeSelector
        });

        // Group
        $.each(properties, function (i, propertyGroup) {
            var groupTemplate = $this.parseTemplate('properties-container', {
                    title: propertyGroup.title
                }),

                fieldsHTML = '';

            // Field container
            $.each(propertyGroup.fields, function (i, field) {
                var fieldTemplate = $this.parseTemplate('property-container', {
                    label: field.title,
                    id: field.css
                });

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

        // Assign default values
        this.assignDefaultValues();
    },

    // CSS JSON Object
    CSSJSON: {},

    // Update CSS
    updateCSS: function (property, value) {
        var activeSelector = $('.active-selector').text();

        if(! cssStudio.CSSJSON[activeSelector]) cssStudio.CSSJSON[activeSelector] = {};

        cssStudio.CSSJSON[activeSelector][property] = value;

        var cssString = "",
            rulesWithUnit = ["font-size", "padding", "padding-top", "margin", "border-width", "outline-width", "width"];

        $.each(cssStudio.CSSJSON, function (selector, cssJSON){
            cssString += selector + " {\n";

            for (var cssPropertyName in cssJSON) {
                var ruleValue = cssJSON[cssPropertyName];

                if($.inArray(cssPropertyName, rulesWithUnit) !== -1){
                    var unit = "px";
                    if(cssJSON[cssPropertyName + "-unit"]){
                        unit = cssJSON[cssPropertyName + "-unit"];
                    }

                    ruleValue = ruleValue + unit;
                }

                if(cssPropertyName.indexOf("-unit") === -1){
                    cssString += "\t" + cssPropertyName + ": " + ruleValue + ";\n";
                }
            }

            cssString += "}\n";
        });


        $('#bbcc-form-style').text(cssString);
    },

    // Assign default values
    assignDefaultValues: function () {
        var activeSelector = $('.active-selector').text(),
            cssJSON = this.properties;

        $.each(cssJSON, function (index, group) {
            $.each(group.fields, function (index, field) {
                var cssValue = $(activeSelector).css(field.css);
                $('.bbs-editor-list').find('[name='+field.css+']').val(cssValue);

                // console.log(field.css, cssValue);
            });
        });


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

    // Extract selectors
    selectors: [],
    extractSelectors: function (selector, exclude) {
        var $this = this;
        selector.children().each(function () {
            $this.selectors.push($(this));
            console.log($(this).context);

            if($(this).children().length > 0){
                $this.extractSelectors($(this));
            }
        });

        return this.selectors;
    },

    // Init CSS Studio
    init: function (selector, exclude) {
        var $this = this;
        this.getProperties();

        // Extract selectors
        var selectors = this.extractSelectors($(selector), exclude);
        console.log(selectors);

        // Events
        $('#bb-css-studio')
            .off("click")
            .on('click', '[bbs-click]', function (e) {
                e.preventDefault();
                var event = $(this).attr('bbs-click');
                $this.clickEvents[event]($(this), e);
            });
    }
};