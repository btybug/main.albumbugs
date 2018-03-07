// Vertical Menu
jQuery(document).ready(function ($) {
    $(".bty-vertical-menu-2>ul li").hover(
        function () {
            $(this).find('ul').slideDown();
        },
        function () {
            $(this).find('ul').slideUp();
        });
});
jQuery(document).ready(function ($) {
    $(".bty-vertical-menu-1 li.dropdown").hover(function () {
        var id = $(this).attr("rel");
        $(this).toggleClass("active");
        $(".bty-vertical-menu-1 ul.dropdown-" + id).toggle("fade", 250);
    });
});
$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        // var links = this.el.find('.link');
        var links = $('.bty-vertical-menu-3 ul li div');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $('.bty-vertical-menu-3 ul li>ul').not($next).slideUp().parent().removeClass('open');
        }
        ;
    }

    var accordion = new Accordion($('#accordion'), false);
});
//Creative menu 1
$(document).ready(function () {
    $('.bty-creative-menu-1>div').click(function () {
        var card = this;
        console.log(card);
        var child = $('.bty-creative-menu-1>div>div:last-child');

        child.toggleClass('unfold')
            .parents($(card).class)
            .siblings();
        child.removeClass('unfold');

        $(this).toggleClass('span')
            .siblings($(card).class)
            .removeClass('span');
    });
});
//Creative menu 3
$(document).ready(function () {

    $(".bty-creative-menu-3>ul li>a").click(function () {
        if ($(".bty-creative-menu-3>div>ul").is(":hidden")) {
            $(".bty-creative-menu-3>ul").hide();
            $(".bty-creative-menu-3>div>ul").show("slow");
            $(".bty-creative-menu-3>div div:first-child").show('inline-block');


        }
        else {

            $(".bty-dropdown").hide("slow");

        }
        return false;
    });
    $(".bty-creative-menu-3>div div:first-child").click(function () {
        if ($(".bty-creative-menu-3>ul").is(":hidden")) {
            $(".bty-creative-menu-3>ul").show("slow");
            $(".bty-creative-menu-3>div>ul").hide("slow");
            $(".bty-creative-menu-3>div div:first-child").hide("slow");


        }
        else {

            $(".bty-creative-menu-3>div>ul").hide("slow");

        }
        return false;
    });
});
//Creative menu 4
$(document).ready(function () {

    $(".bty-creative-menu-4-icon").click(function () {
        if ($(".bty-creative-menu-4").is(":hidden")) {
            $(".bty-creative-menu-4").show("slow");
            $(".bty-creative-menu-4>div:not(:first-child)").hide();
        }
        else {

            $(".bty-creative-menu-4").hide("slow");

        }
        return false;
    });
    $(".bty-creative-menu-4>ul li>a").click(function () {
        $(".bty-creative-menu-4>ul").hide();
        $(".bty-creative-menu-4>div").show("slow");
        $(".bty-creative-menu-4>div div:first-child").show();
    });
    $(".bty-creative-menu-4>div div:first-child").click(function () {
        $(".bty-creative-menu-4>div div:first-child").hide();
        $(".bty-creative-menu-4>div").hide("slow");
        $(".bty-creative-menu-4>ul").show();
    });
});
// Dinamic create css class
$(document).ready(function () {
    $("body").delegate(".show_form","click",function(){
        var is_show = $(".is_show").hasClass("custom_hidden");
        if(is_show){
            $(".is_show").removeClass('custom_hidden');
            $(".is_show_for_setting").addClass('custom_hidden');
        }else{
            $(".is_show").addClass('custom_hidden');
        }
    });
    $("body").delegate(".show_form_for_setting","click",function(){
        var is_show = $(".is_show_for_setting").hasClass("custom_hidden");
        if(is_show){
            $(".is_show_for_setting").removeClass('custom_hidden');
            $(".is_show").addClass('custom_hidden');
        }else{
            $(".is_show_for_setting").addClass('custom_hidden');
        }
    });
    $("body").delegate(".delete_item_and_classes","click",function(){
        var slug = $(this).data("name");
        var _token = $('input[name=_token]').val();
        var url = base_path + "/admin/framework/css/file/reset";
        $.ajax({
            url: url,
            data: {
                slug:slug,
                _token: _token
            },
            success: function (data) {
                if(!data.error){
                   return window.location.reload();
                }
                alert("File does not exists");
            },
            type: 'POST'
        });
    })
});