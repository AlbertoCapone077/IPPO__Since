$(document).ready(function() {
    $('.slider').slick({
        arrows: true, //для отображения стрелок - true
        dots: false,
        adaptiveHeight: true,
        slidesToShow: 4, //если фотки всего 4 и отображается 4 - работать не будет
        slidesToScroll: 1,
        speed: 500,
        infinite: true, //бесконечность слайдера 
		//если стрелочки не заработают - то есть автоперелистывание
		autoplay: true,
		autoplaySpeed: 1500,
		//конец автоперелистывания
        pauseOnFocus: true,
        pauseOnHover: true,
		
    });
});

