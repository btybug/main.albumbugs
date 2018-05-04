
$(function () {
    var SoppingCart = {
        slug: $('#shopping-cart-widget').attr('data-slug'),
        urls: {
            add: "/shopping-cart-api/add-to-cart",
            count: "/shopping-cart-api/get-cart-count",
            content: "/shopping-cart-api/get-cart-content"
        },

        request: function sendAjax(url, data, callback) {
            data.slug = this.slug;
            $.ajax({
                type: "POST",
                datatype: "json",
                url: url,
                data: data,
                async: false,
                headers: {
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                },
                success: function (data) {
                    if (callback && typeof callback === "function") {
                        return callback(data);
                    }

                }
            });
        },
        filter: {
            count: function (data) {
                return $('body').find('.shopping-cart-count').text(data.count);
            }
        },
        count: function () {
            return this.request(this.urls.count, {}, this.filter.count);
        },
        add: function (id) {
            return this.request(this.urls.add, {id: id}, null);
        },
        data : {}
    };
    SoppingCart.count();
    $('body').on('click', '.add-to-cart', function () {
        SoppingCart.add($(this).attr('data-id'));
        SoppingCart.count();
    })
});
$(document).ready(function () {
    var btnlinksign = $('.bty-btn-sign-up');
    var btylogreg = $('.bty-log-reg');
    btnlinksign.on('click', function () {
        btylogreg.show();
    });
    $(document).mouseup(function (e) {
        var containerreg = $(".bty-log-reg");
        if (containerreg.has(e.target).length === 0) {
            containerreg.hide();
        }
    });

    var linkmob = $('.burger-mob');
    var menumobhead =  $('.bottom-mob');
    linkmob.on( "click", function() {
        menumobhead.toggle(300);
        // $('i', this).toggleClass('fa fa-bars fa fa-times');
        if($('.user-menu-mob').is(":visible"))
        {
            $('.user-menu-mob').hide(300);
        }
    });

    var linkusermob = $('.user-link-mob');
    var menuusermob =  $('.user-menu-mob');
    linkusermob.on( "click", function() {
        menuusermob.toggle(300);
        if($('.bottom-mob').is(":visible"))
        {
            $('.bottom-mob').hide(300);
        }
    });

});
jQuery(document).ready(function ($) {
    $('.sublink').click(function(e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.removeClass('active');
            $this.next().removeClass('show');
            $this.next().slideUp(0);
        }
        else {
            $('.sublink').removeClass('active');
            $this.addClass('active');
            $this.parent().parent().find('li .cute').removeClass('show');
            $this.parent().parent().find('li .cute').slideUp(0);
            $this.next().toggleClass('show');
            $this.next().slideToggle(0);

        }
    });
});
qaq