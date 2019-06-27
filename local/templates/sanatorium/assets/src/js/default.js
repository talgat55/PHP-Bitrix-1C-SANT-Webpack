
jQuery(document).ready(function () {
    "use strict";


    lasyLoad();
    yMap();


    // end redy function
});


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
function  yMap(){
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