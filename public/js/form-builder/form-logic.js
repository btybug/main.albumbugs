$(document).ready(function () {
    $('body').on('click', '.remove-action', function (e) {
        e.preventDefault();
        $(this).parent().remove();
    });

    $('body').on('click', '.logic-remove', function (e) {
        e.preventDefault();
        $(this).parent().remove();
    });

    $('body').on('click', '.add-cond-row', function (e) {
        e.preventDefault();
        var elementHTML = $("#condition-row").html(),
            template = $(elementHTML),
            target = $(this).parent();

            template.insertBefore( $( this ).parent().find(".add-cond-row") );
    });

    $('body').on('click', '.add-action-row', function (e) {
        e.preventDefault();
        var elementHTML = $("#then-row").html(),
            template = $(elementHTML),
            target = $(this).parent();
            template.insertBefore( $( this ).parent().find(".add-action-row") );
    });

    var actions = {
        show_fields: function ($_this,target) {
            var elementHTML = $("#fields-selectBox").html(),
                template = $(elementHTML);
                target.html(template);
        },
        hide_fields: function ($_this,target) {
            var elementHTML = $("#fields-selectBox").html(),
                template = $(elementHTML);
                target.html(template);
        },
        email_to: function ($_this,target) {
            var elementHTML = $("#input-box").html(),
                template = $(elementHTML);
                target.html(template);
        },redirect_to: function ($_this,target) {
            var elementHTML = $("#input-box").html(),
                template = $(elementHTML);
                target.html(template);
        },set_value: function ($_this,target) {
            var elementHTML = $("#input-box").html(),
                fieldsHTML = $("#fields-selectBox").html(),
                template = $(elementHTML);
                target.html(template);
                target.append(fieldsHTML);
        },
    };

    $('body').on('change', '.than-action', function (e) {
        var elementVal = $(this).val(),
        target = $(this).closest('.group-row').find('.result');
        target.html('');
        if(actions[elementVal] != undefined){
            actions[elementVal]($(this),target);
        }
    });

    $('body').on('click', '.add-logic-button', function (e) {
            e.preventDefault();
        var elementHTML = $('body').find("#logic-html").html(),
            template = $(elementHTML),
            target = $('.logic-list');

        // template.attr('data-shortcode', $(ui.draggable).attr('data-shortcode'));
        // template.attr('data-id', $(ui.draggable).attr('data-id'));
        // $(ui).hide();
        target.append(template);
    });

    $('body').on('change','.allow_permission',function() {
        if (this.value == 1) {
            $('.allow-logged').removeClass('hide');
            $('.allow-logged').addClass('show');
        }else{
            $('.allow-logged').removeClass('show');
            $('.allow-logged').addClass('hide');
            $('.roles-box').removeClass('show');
            $('.roles-box').addClass('hide');
        }
    });

    $('body').on('change','.allow_logged_radio',function() {
        if (this.value == 0) {
            $('.roles-box').removeClass('hide');
            $('.roles-box').addClass('show');
        }else{
            $('.roles-box').removeClass('show');
            $('.roles-box').addClass('hide');
        }
    });
});