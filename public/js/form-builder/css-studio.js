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
        var fieldTemplate = this.loadTemplate(field.type);

        if (field.type === "dropdown") {
            var buildOptions = '';
            if (field.options && field.options.length > 0) {
                $.each(field.options, function (i, option) {
                    buildOptions += '<option value="' + option.value + '">' + option.title + '</option>';
                });

                fieldTemplate = fieldTemplate.replace(/{options}/g, buildOptions);
            }
        }


        return fieldTemplate;
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

                // Field HTML
                if (field.type && $this.loadTemplate(field.type)) {
                    var fieldTypeTemplate = $this.renderField(field);
                    fieldTypeTemplate = fieldTypeTemplate.replace(/{id}/g, 'aaa');

                    fieldTemplate = fieldTemplate.replace(/{field}/g, fieldTypeTemplate);
                    fieldsHTML += fieldTemplate;
                }
            });

            groupTemplate = groupTemplate.replace(/{properties}/g, fieldsHTML);

            groupsHTML += groupTemplate;
        });

        listTemplate = listTemplate.replace(/{groups}/g, groupsHTML);

        $('#bb-css-studio').html(listTemplate);
    },

    // Init CSS Studio
    init: function () {
        this.buildEditorList();
    }
};