jQuery(document).ready(function () {
    "use strict";


    lasyLoad();
    yMap();
    menuToggle();
    backToTop();
    mobileMenu();
    hideLeftMenuOnScroll();
    formHandler();
    // end redy function
});


window.onload = function () {
    menuLoadFirstBlock();
};


//----------------------------------
//   Lasyload
//---------------------------------------

function lasyLoad() {
    "use strict";

    var lasyClass = jQuery('.lazy');

    if (lasyClass.length) {
        lasyClass.lazy({
            effect: "fadeIn",
            effectTime: 700,
        });
    }

}

//----------------------------------
//   Map
//---------------------------------------
function yMap() {
    "use strict";
    var mapClass = jQuery('#map');
    if (mapClass.length) {
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [55.017798, 73.340481],
                zoom: 13,
                controls: []
            }, {
                // searchControlProvider: 'yandex#search'
            });


            myMap.geoObjects
                .add(new ymaps.Placemark([55.017798, 73.340481], {
                    balloonContent: 'ул. Березовая, д. 1',
                    iconCaption: 'Наш офис'
                }, {
                    preset: 'islands#greenDotIconWithCaption'
                }));
            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('multiTouch');
            myMap.behaviors.disable('drag');


        });
    }
}


//------------------------
//  Menu toggle  and click menu
//----------------------------------
function menuToggle() {
    "use strict";

    jQuery('#header-service-menu-list a.sub-section').click(function (e) {
        e.preventDefault();
        jQuery(this).next().stop().slideToggle();
        jQuery(this).toggleClass('is-active');

    }).next().stop().hide();

}

//------------------------
//  Open menu first drop down after load all
//----------------------------------
function menuLoadFirstBlock() {
    "use strict";

    jQuery('#header-service-menu-list .item:first-child  a.sub-section').trigger('click');

}


// ---------------------------------------------------------
// Back To Top
// ---------------------------------------------------------
function backToTop() {
    "use strict";

    jQuery(document).on('click', '.link-scroll-up', function (e) {
        e.preventDefault();

        jQuery('body,html').animate({scrollTop: 0}, jQuery(window).scrollTop() / 3, 'linear');
    });

}


//----------------------------------
//   Mobile Menu
//------------------------------------
function mobileMenu() {
    "use strict";
    let menuClass = '#mobile-toggle';
    let mobileClass = jQuery('header');
    let bodyClass = 'body';

    jQuery(bodyClass).on('click', menuClass, function () {

        mobileClass.toggleClass('is-active');
        jQuery(menuClass).toggleClass('is-active');

        return false;
    });


}


//----------------------------------
//   Mobile Menu
//------------------------------------
function hideLeftMenuOnScroll() {
    "use strict";
    var menuClass = '#mobile-toggle';
    var headerClass = 'header';

    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 120) {
            jQuery(menuClass + ', ' + headerClass).removeClass('is-active');
        }

    });

}

//----------------------------------
//   Form handler
//------------------------------------
function formHandler() {
    "use strict";
    var thisForm = jQuery('form');
    var overlayLayer = jQuery('.overlay-layer');
    var modallayLayer = jQuery('.success-send-mail-modal');
    var activeClass = 'active-mode';


    thisForm.submit(function () {
        var formData = thisForm.serialize();

        jQuery.post('ajax/send.php', formData, function (data) {

            if (data) {
                // reset form
                thisForm[0].reset();

                overlayLayer.addClass(activeClass);
                modallayLayer.addClass(activeClass);
                setTimeout(function() {
                    overlayLayer.removeClass(activeClass);
                    modallayLayer.removeClass(activeClass);
                }, 2000);

            }


        });


        return false;

    });

}

