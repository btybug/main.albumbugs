$(function () {
    $('#page-section-layout-form').on('change', '.bb-select-inheritance', function () {
        if ($(this).val() == 'inherit') {
            $('#page-section-layout-form').find('.bb-layout').addClass('hide');
        } else {
            $('#page-section-layout-form').find('.bb-layout').removeClass('hide');
        }
    });

    $('#page-section-layout-form').on('change', '.bb-layout', function () {
        if ($(this).attr('name') == 'layout') {
            $('#page-section-layout-form').find('select[name=variations]').val(null);
        }
        $('#page-section-layout-form').submit();
    });
});
