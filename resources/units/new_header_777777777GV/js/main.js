$(document).ready(function () {
    var btnlinksign = $('.bty-btn-sign-up');
    var btylogreg = $('.bty-log-reg');
    btnlinksign.on('click', function () {
        btylogreg.show();
    })
    $(document).mouseup(function (e) {
        var containerreg = $(".bty-log-reg");
        if (containerreg.has(e.target).length === 0) {
            containerreg.hide();
        }
    });
});