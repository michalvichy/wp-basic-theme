window.NS = window.NS || {};

window.NS.single_edition = function($) {
  'use strict';

  var $window = $(window);
  var isDesktop = $window.innerWidth() >= 1024 ? true : false;
  var isTablet = $window.innerWidth() >= 768 ? true : false;

  (function() {
    $('.js-lightgallery').lightGallery();
  })();
};
