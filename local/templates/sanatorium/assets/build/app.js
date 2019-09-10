/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./local/templates/sanatorium/assets/src/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./local/templates/sanatorium/assets/src/app.js":
/*!******************************************************!*\
  !*** ./local/templates/sanatorium/assets/src/app.js ***!
  \******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_style_sass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sass/style.sass */ "./local/templates/sanatorium/assets/src/sass/style.sass");
/* harmony import */ var _sass_style_sass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_sass_style_sass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_default_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/default.js */ "./local/templates/sanatorium/assets/src/js/default.js");
/* harmony import */ var _js_default_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_default_js__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./local/templates/sanatorium/assets/src/js/default.js":
/*!*************************************************************!*\
  !*** ./local/templates/sanatorium/assets/src/js/default.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
  formModal(); // end redy function
});

window.onload = function () {
  menuLoadFirstBlock();
}; //----------------------------------
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
} //----------------------------------
//   Lasyload
//---------------------------------------


function lasyLoad() {
  "use strict";

  var lasyClass = jQuery('.lazy');

  if (lasyClass.length) {
    lasyClass.lazy({
      effect: "fadeIn",
      effectTime: 700
    });
  }
} //----------------------------------
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
      }, {// searchControlProvider: 'yandex#search'
      });
      myMap.geoObjects.add(new ymaps.Placemark([55.017798, 73.340481], {
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
} //------------------------
//  Menu toggle  and click menu
//----------------------------------


function menuToggle() {
  "use strict";

  jQuery('#header-service-menu-list a.sub-section').click(function (e) {
    e.preventDefault();
    jQuery(this).next().stop().slideToggle();
    jQuery(this).toggleClass('is-active');
  }).next().stop().hide();
} //------------------------
//  Open menu first drop down after load all
//----------------------------------


function menuLoadFirstBlock() {
  "use strict";

  jQuery('#header-service-menu-list .item:first-child  a.sub-section').trigger('click');
} // ---------------------------------------------------------
// Back To Top
// ---------------------------------------------------------


function backToTop() {
  "use strict";

  jQuery(document).on('click', '.link-scroll-up', function (e) {
    e.preventDefault();
    jQuery('body,html').animate({
      scrollTop: 0
    }, jQuery(window).scrollTop() / 3, 'linear');
  });
} //----------------------------------
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
} //----------------------------------
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
} //----------------------------------
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
      jQuery.post('ajax/send.php', formData, function (data) {
        if (data) {
          // reset form
          thisForm[0].reset();
          modalLayer.removeClass('is-active');
          overlayLayer.addClass(activeClass);
          modallayLayer.addClass(activeClass);
          setTimeout(function () {
            overlayLayer.removeClass(activeClass + ' is-active');
            modallayLayer.removeClass(activeClass);
          }, 2000);
        }
      });
      return false;
    }
  });
} //----------------------------------
//   Form modal
//------------------------------------


function formModal() {
  "use strict";

  var clickClass = ' .link-feedback';
  var overlayLayer = jQuery('.overlay-layer');
  var modalLayer = jQuery('.modal-custom');
  var bodyClass = jQuery('body');
  bodyClass.on('click', clickClass, function () {
    modalLayer.toggleClass('is-active');
    overlayLayer.toggleClass('is-active');
    return false;
  });
  bodyClass.on('click', ' .modal-custom .close-modal', function () {
    modalLayer.toggleClass('is-active');
    overlayLayer.toggleClass('is-active');
    return false;
  });
}

/***/ }),

/***/ "./local/templates/sanatorium/assets/src/sass/style.sass":
/*!***************************************************************!*\
  !*** ./local/templates/sanatorium/assets/src/sass/style.sass ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

/******/ });