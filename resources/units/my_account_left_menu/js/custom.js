jQuery(document).ready(function ($) {
    $('.profile-menu .sublink').click(function(e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.removeClass('active');
            $this.next().removeClass('show');
            $this.next().slideUp(0);
        }
        else {
            $('.profile-menu .sublink').removeClass('active');
            $this.addClass('active');
            $this.parent().parent().find('li .cute').removeClass('show');
            $this.parent().parent().find('li .cute').slideUp(0);
            $this.next().toggleClass('show');
            $this.next().slideToggle(0);

        }
    });
});