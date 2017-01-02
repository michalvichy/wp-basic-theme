window.NS = window.NS || {};

window.NS.home = function($) {
  var $window = $(window);
  var isDesktop = $window.innerWidth() > 1024 ? true : false;

  function initCarousel() {
    var $owl = $('.owl-carousel');
    var $btnPrev = $('.js-edition-prev');
    var $btnNext = $('.js-edition-next');

    $owl.owlCarousel({
      items: 3,
      dots: false,
    });

    $btnPrev.on('click', function() {
      $owl.trigger('prev.owl.carousel');
    });

    $btnNext.on('click', function() {
      $owl.trigger('next.owl.carousel');
    });
  }

  (function() {
    if (isDesktop) {
      initCarousel();
    }
  })();
};
