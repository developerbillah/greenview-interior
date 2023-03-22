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
    margin: 20,
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

  // Project Counter
  $('.total-project').counterUp({
    delay: 10,
    time: 1000
  });

  // Video Carousel with Popup
  $('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    loop: true,
    margin: 0,
    responsiveClass: true,
    nav: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      568: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
  $(document).ready(function() {
    $('.popup-youtube, .popup-text').magnificPopup({
      disableOn: 320,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true
    });
  });
  $(document).ready(function() {
    $('.popup-text').magnificPopup({
      type: 'inline',
      preloader: false,
      focus: '#name',
      callbacks: {
        beforeOpen: function() {
          if ($(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });
  });


  // Side Navigation
  var nav = document.getElementById("sideNav");
  var openNav = document.getElementById("openNav");
  var closeNav = document.getElementById("closeNav");

  openNav.addEventListener('click', function(){
    nav.style.left = '0px'
  })

  closeNav.addEventListener('click', function(){
    nav.style.left = '-100%'
  })

});