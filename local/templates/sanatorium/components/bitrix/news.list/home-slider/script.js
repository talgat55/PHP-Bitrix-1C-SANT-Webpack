
jQuery(document).ready(function () {
    "use strict";

    var sliderClass = $('.home-slider-wrap');

    if (sliderClass.length) {
        sliderClass.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            //   autoplay: true,
        });
    }


    jQuery('.home-slider  .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.home-slider-wrap').slick('slickPrev');
    });


    jQuery('.home-slider  .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.home-slider-wrap').slick('slickNext');
    });

    // end redy function
});
