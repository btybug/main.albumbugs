window.onload  = function (){
    $('.slider-carousel').owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:0, //Отступ от картино если выводите больше 1
        nav:false, //Отключил навигацию
        autoplay:false, //Автозапуск слайдера
        smartSpeed:1500, //Время движения слайда
        autoplayTimeout:3000, //Время смены слайда
        responsive:{ //Адаптация в зависимости от разрешения экрана
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
};