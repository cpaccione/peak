jQuery(document).ready(function ($) {

    $('img').addClass('fluid');


    $('.testimonial-slider').slick({
        infinite: true,
        // autoplay: true,
        speed: 500,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 0,
                settings: {
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    dots: false,
                    arrows: true,
                }
            }
        ]
    });
});