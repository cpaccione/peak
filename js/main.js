jQuery(document).ready(function ($) {

    $('img').addClass('fluid');


    $('.testimonial-slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 7000,
        speed: 1000,
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


    $('.mobile-menu').click(
        function() {
            $('.mobile-menu').toggleClass('rotate-mobile');
            $('.mobile-nav').toggleClass('show-mobile-nav');
        }
    );

    $("#contact-modal").on('click', function() {

        $.fancybox.open('<div class="message"><h2>Hello!</h2><p>You are awesome!</p></div>');
      
    });


});
