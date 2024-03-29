jQuery(document).ready(function () {
    "use strict";


    lasyLoad();
    yMap();
    menuToggle();
    backToTop();
    mobileMenu();
    hideLeftMenuOnScroll();
    formHandler();
    inputsMask();
    formModal();
    // end redy function
});


window.onload = function () {
    menuLoadFirstBlock();
};


//----------------------------------
//   Masks for inputs
//---------------------------------------

function inputsMask() {
    "use strict";

    var phoneClass = jQuery('.phone-input');
    var dateClass = jQuery('.date-input');

    if (phoneClass.length) {
        phoneClass.mask('+0(000) 000-0000');
    }

    if (dateClass.length) {
        dateClass.datepicker({
            autoClose: true
        });
    }


}

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
    var detailPageId = jQuery('.service-detail');
    console.log(detailPageId);
    if(detailPageId.length){
        var IdValueServicePage = detailPageId.attr('data-id');
        console.log(IdValueServicePage);
        jQuery('#header-service-menu-list .item.item-'+IdValueServicePage+'  a.sub-section').trigger('click');
    }else{
        jQuery('#header-service-menu-list .item:last-child  a.sub-section').trigger('click');
    }

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
    jQuery('body').on('click', '#mobile-toggle', function () {

        jQuery('header').toggleClass('is-active');
        jQuery('#mobile-toggle').toggleClass('is-active');

        return false;
    });


}


//----------------------------------
//   Mobile Menu
//------------------------------------
function hideLeftMenuOnScroll() {
    "use strict";
    var menuClassMobile = '#mobile-toggle';
    var headerClass = 'header';

    jQuery(window).scroll(function () {
        let scroll = jQuery(window).scrollTop();
        if (scroll >= 120) {
            jQuery(menuClassMobile + ', ' + headerClass).removeClass('is-active');
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
    var modalLayer = jQuery('.modal-custom');

    thisForm.submit(function () {

        if (!thisForm.parent().hasClass('search-page')) {
            var formData = thisForm.serialize();

            jQuery.post('/ajax/send.php', formData, function (data) {

                if (data) {
                    // reset form
                    thisForm[0].reset();
                    modalLayer.removeClass('is-active');
                    overlayLayer.addClass(activeClass);
                    modallayLayer.addClass(activeClass);
                    setTimeout(function () {
                        overlayLayer.removeClass(activeClass  + ' is-active');
                        modallayLayer.removeClass(activeClass);
                    }, 2000);
                }
            });
            return false;
        }
    });
}

//----------------------------------
//   Form modal
//------------------------------------
function formModal() {
    "use strict";
    var clickClass = ' .link-feedback' ;
    var overlayLayer = jQuery('.overlay-layer');
    var modalLayer = jQuery('.modal-custom');
    var bodyClass = jQuery('body');

    bodyClass.on('click', clickClass, function () {

        modalLayer.toggleClass('is-active');
        overlayLayer.toggleClass('is-active');

        return false;
    });

    bodyClass.on('click',  ' .modal-custom .close-modal', function () {

        modalLayer.toggleClass('is-active');
        overlayLayer.toggleClass('is-active');

        return false;
    });
    bodyClass.on('click',  ' .success-send-mail-modal .close-modal', function () {

        jQuery('.success-send-mail-modal').toggleClass('is-active');
        overlayLayer.toggleClass('is-active');

        return false;
    });

}
