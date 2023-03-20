$(document).ready(function(){
  $('#hero-slider').owlCarousel({
    loop:true,
    autoplay: true,
    items: 1,
    dots: true,
    nav: false,
    navText: ['PREV', 'NEXT'],
    smartSpeed: 1000,
  });

  // Client Reviw
  $('#client-review').owlCarousel({
    loop:true,
    autoplay: true,
    items: 2,
    dots: true,
    nav: false,
    smartSpeed: 1000,
    responsive: {
      0: {
          items: 3
      },
      300: {
          items: 1
      },
      600: {
          items: 1
      },
      1000: {
          items: 2
      }
    }
  });

  // Client Logos
  $('.client-logo').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    autoplay: true,
    navText: ["<i class='icofont icofont-thin-left'></i>", "<i class='icofont icofont-thin-right'></i>"],
    responsive: {
        0: {
            items: 3
        },
        300: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
  });

  // Gallery Lightbox
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'disableScrolling': true,
  });
});