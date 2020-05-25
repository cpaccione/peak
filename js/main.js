jQuery(document).ready(function ($) {

    $('img').addClass('fluid');


    $('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        // autoplay: true,
        speed: 500,
        adaptiveHeight: true
    });
});