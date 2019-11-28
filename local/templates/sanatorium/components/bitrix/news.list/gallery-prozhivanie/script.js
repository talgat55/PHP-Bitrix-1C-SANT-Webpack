jQuery(document).ready(function () {
    "use strict";

    var sliderClass = $('.slider-show');

    if (sliderClass.length) {
        sliderClass.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: false,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }


    jQuery('.img-item  .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.slider-show').slick('slickPrev');
    });


    jQuery('.img-item  .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.slider-show').slick('slickNext');
    });

    // end redy function
});
