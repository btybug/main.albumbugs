
$(function () {
$('#page-section-layout-form').on('change','select',function () {
    if($(this).attr('name')=='layout'){
    $('#page-section-layout-form').find('select[name=variations]').val(null);
    }
    $('#page-section-layout-form').submit();
});
});