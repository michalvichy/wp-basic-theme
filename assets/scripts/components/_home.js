window.NS = window.NS || {};

window.NS.home = function($) {
  var $window = $(window);
  var isDesktop = $window.innerWidth() >= 1024 ? true : false;
  var isTablet = $window.innerWidth() >= 768 ? true : false;

  function initCarousel() {
    var $owl = $('.owl-carousel');
    var $btnPrev = $('.js-edition-prev');
    var $btnNext = $('.js-edition-next');
    var slidesNumber = 3;

    $owl.owlCarousel({
      responsive: {
        768: {
          items: 2,
        },
        1024: {
          items: slidesNumber,
        }
      },
      dots: false,
      onChanged: function(event) {
        var count = event.item.count;
        var index = event.item.index;

        if (index === 0) {
          $btnPrev.removeClass('is-visible');
        }

        if (index === count - slidesNumber) {
          $btnNext.removeClass('is-visible');
        }
      }
    });

    $btnPrev.on('click', function() {
      $owl.trigger('prev.owl.carousel');
      $btnNext.addClass('is-visible');
    });

    $btnNext.on('click', function() {
      $owl.trigger('next.owl.carousel');
      $btnPrev.addClass('is-visible');
    });


  }

  (function() {
    if (isTablet) {
      initCarousel();
    }
  })();
};
