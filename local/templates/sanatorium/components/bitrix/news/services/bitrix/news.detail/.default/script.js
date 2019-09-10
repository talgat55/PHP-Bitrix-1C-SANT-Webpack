jQuery(document).ready(function () {
    "use strict";


    var arrowClass = '.service-slider-arrow';
    var sliderMainClassClear = '.main-slider';
    var sliderMainClass = jQuery('.main-slider');
    var sliderHalfClass = jQuery('.half-slider');

    if (sliderMainClass.length) {
        sliderMainClass.slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            asNavFor: '.half-slider'
            //   autoplay: true,
        });
    }

    if (sliderHalfClass.length) {
        sliderHalfClass.slick({
            infinite: false,
            slidesToShow: 4,
            vertical: true,
            slidesToScroll: 1,
            focusOnSelect: true,
            asNavFor: '.main-slider',
            dots: false,
            //   autoplay: true,
        });
    }


    jQuery(arrowClass +' .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(sliderMainClassClear).slick('slickPrev');
    });


    jQuery(arrowClass +'  .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(sliderMainClassClear).slick('slickNext');
    });


    // end redy function
});
