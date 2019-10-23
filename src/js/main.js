$(function() {
  accordionMenu();
  selectCustom();
  aosRun();
  testimonialSlider();
  testimonalTextExpand();
  poductHomeSlider();
  newsHomeSlider();
  mobileMenu();                                                                                                                                                                                                                                                                                                                                                         
  textSplittEffect();
  slideNav();
  toTopButton();
  modalFormValidate();
  phoneMask();
  articleToggle();
  metaIconsToggle();
  productSlider();
  googleMap();
  smoothScroll();
  addToFavoritToggle();
  archiveTabsToggle();
  favoritTabsToggle();
  magnificPopup();
  
});

// Select Custom
const selectCustom = () => {
  $("select").niceSelect();
};

// AOS Aniation
const aosRun = () => {
  AOS.init({
    disable: "mobile",
    offset: 140,
    duration: 800,
    once: true
  });
};

// Testimonial Slider -
const testimonialSlider = () => {
  testimonialsSlider = new Swiper(".testimonial__slider", {
    loop: true,
    speed: 1000,
    slidesPerView: "auto",
    autoHeight: true,
    threshold: 10,
    grabCursor: true,
    spaceBetween: 200,

    pagination: {
      el: ".testimonial__pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".testimonial__button-next",
      prevEl: ".testimonial__button-prev"
    },

  });
};  

// Testimonial Text Readmore
const testimonalTextExpand = () => {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
  let showChar = 330;
  let ellipsestext = "...";
  let moretext = "Читать полностью";
  let lesstext = "Свернуть текст";

  $(".testimonial__massage").each(function() {
    let content = $(this).html();

    if (content.length > showChar) {
      let c = content.substr(0, showChar);
      let h = content.substr(showChar, content.length - showChar);

      let html = `${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontent"><span class="testimonial__expanded-text"> ${h} </span>&nbsp;&nbsp;<div class="testimonial__readmore-link link"> ${moretext} </div></span>`;

      $(this).html(html);
    }
  });

  $(".testimonial__readmore-link").click(function() {
    
    if ($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
      $(this).addClass("less");
      $(this).html(lesstext);
    }
    $(this)
      .parent()
      .prev()
      .toggle();
    $(this)
      .prev()
      .toggle();
      testimonialsSlider.updateAutoHeight(400);
    return false;
  });
  
  if(document.querySelector('.testimonial')){
    testimonialsSlider.updateAutoHeight(400);
  } 
};

// Product Home Page Slider 
const poductHomeSlider = () => {
  let breakpoint = window.matchMedia("(min-width:820px)");
  let prodSlider;

  let breakpointChecker = function() {
    if (breakpoint.matches === true) {
      if (prodSlider !== undefined) prodSlider.destroy(true, true);
      return;
    } else if (breakpoint.matches === false) {
      return enableSlider();
    }
  };

  const enableSlider = function() {
    prodSlider = new Swiper(".product-slider", {
      loop: true,
      speed: 1000,
      slidesPerView: "auto",

      pagination: {
        el: ".product-slider__pagination",
        clickable: true
      }
    });
  };

  breakpoint.addListener(breakpointChecker);
  breakpointChecker();
};

// News Home Page Slider 
const newsHomeSlider = () => {
  let breakpoint = window.matchMedia("(min-width:1199px)");
  let newsSlider;
  
  let breakpointChecker = function() {
    if (breakpoint.matches === true) {
      if (newsSlider !== undefined) newsSlider.destroy(true, true);
      return;
    } else if (breakpoint.matches === false) {
      return enableSlider();
    }
  };

  const enableSlider = function() {
    newsSlider = new Swiper(".news-slider", {
      loop: true,
      speed: 1000,
      slidesPerView: "auto",

      pagination: {
        el: ".news-slider__pagination",
        clickable: true
      },

      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetweenSlides: 40
        },

        700: {
          slidesPerView: 2,
          spaceBetweenSlides: 30
        }
      }
    });
  };

  breakpoint.addListener(breakpointChecker);
  breakpointChecker();
};

// Mobile Menu
const mobileMenu = () => {
  let menuBtn = document.querySelector(".hamburger");
  let sidenav = document.querySelector(".sidenav");

  menuBtn.onclick = function() {
    if (sidenav.classList.contains("sidenav_disabled")) {
      sidenav.classList.remove("sidenav_disabled");
      menuBtn.classList.add("hamburger_closed");
    } else {
      sidenav.classList.add("sidenav_disabled");
      menuBtn.classList.remove("hamburger_closed");
    }
  };
};

// Accordion Menu
const accordionMenu = () => {
    // mobile menu 
  $('.mobile-menu__link').click(function(){
    $(this).next().slideToggle();
    $(this).toggleClass("mobile-menu__link_active");
  }); 

  //sub mobile menu
  $('.is-sub-mobile').click(function(){
    // $('.is-sub-mobile').next().hide();
    $(this).next().slideToggle();
    $(this).toggleClass("mobile-menu__link_active");

  }); 
};

// Title Text Fade + Splitt Effect
const textSplittEffect = () => {
  const breakpoint = window.matchMedia("(min-width:1025px)");

  const breakpointChecker = function() {
    if (breakpoint.matches === true) {
      Splitting();
      ScrollOut({
        // threshold: 0.3,
        once: true
      });
    } else if (breakpoint.matches === false) {
      ScrollOut({
        // threshold: 0.3,
        once: true
      }).teardown();
    }
  };

  breakpoint.addListener(breakpointChecker);
  breakpointChecker();
};

// Nav Menu Fixed + Slide Down
const slideNav = () => {
  let didScroll;
  let lastScrollTop = 0;
  let delta = 5;
  let navbarHeight = $(".header").outerHeight();

  $(window).scroll(function(event) {
    didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();

    if (Math.abs(lastScrollTop - st) <= delta) return;

    if (st > lastScrollTop && st > navbarHeight) {
      $(".header")
        .removeClass("header_down")
        .addClass("header_up");
    } else {
      if (st + $(window).height() < $(document).height()) {
        $(".header")
          .removeClass("header_up")
          .addClass("header_down");
      }
    }

    lastScrollTop = st;
  }
};

// To Top Button
const toTopButton = () => {
  let scrollToTopButton = document.querySelector(".to-top");

  const scrollFunc = () => {
    let y = window.scrollY;

    if (y > 400) {
      scrollToTopButton.className = "to-top to-top_show";
    } else {
      scrollToTopButton.className = "to-top to-top_hide";
    }
  };

  window.addEventListener("scroll", scrollFunc);

  const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;

    if (c > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, c - c / 10);
    }
  };

  scrollToTopButton.onclick = function(e) {
    e.preventDefault();
    scrollToTop();
  };
};

// Form Validation
const modalFormValidate = () => {
  $(".send-form_validate").validate({
    errorClass: "send-form__error",

    rules: {
      name: {
        required: true
      },
      phone: {
        required: true,
        minlength: 10
      }
    },

    messages: {
      name: {
        required: "Введите ваше Имя"
      },
      phone: {
        required: "Введите ваш номер телефона",
        minlength: "Минимальное количество символов - 10"
      }
    }
  });

  $(".request__form").validate({
    errorClass: "send-form__error",

    rules: {
      name: {
        required: true
      },
      phone: {
        required: true,
        minlength: 10
      }
    },

    messages: {
      name: {
        required: "Введите ваше Имя"
      },
      phone: {
        required: "Введите ваш номер телефона",
        minlength: "Минимальное количество символов - 10"
      }
    }
  });
};

// Form Phone Mask
const phoneMask = () => {
  let element = document.querySelector(".send-form__input_phone");

  let maskOptions = {
    mask: "+{00} 000 000 0000"
  };
  let mask = IMask(element, maskOptions);
};

// Article Toggle
const articleToggle = () => {
  let btn = document.querySelector(".article__toggle-btn");
  let content = document.querySelector(".article__content");

  if (btn) {
    btn.addEventListener("click", function() {
      if (content.classList.contains("article-content_toggle")) {
        content.classList.remove("article-content_toggle");
        btn.innerHTML = "Скрыть текст";
      } else {
        content.classList.add("article-content_toggle");
        btn.innerHTML = "Читать все";
      }
    });
  }
};


// Toggle Meta Icons 
const metaIconsToggle = () => {
  // Meta Favorits
  let metaFavorit = document.querySelector('.meta-favorits');
  let metaFavoritIcon = document.querySelector('.to-favorits__icon');
  let tooltipFavorit = document.querySelector('.meta-favorits__tooltip');

  if(metaFavorit){
    metaFavorit.addEventListener('click', function(){
      if(metaFavoritIcon.classList.contains('to-favorits__icon_active')){
        metaFavoritIcon.classList.remove('to-favorits__icon_active');
        tooltipFavorit.innerHTML = tooltipFavorit.dataset.tooltipDelMassege;
      }else{
        metaFavoritIcon.classList.add('to-favorits__icon_active');
        tooltipFavorit.innerHTML = tooltipFavorit.dataset.tooltipAddMassege;
      }
    });
  };
};


// Product Slider 
const productSlider = () => {
  // Params
  let mainSliderSelector = '.image-slider__main',
  navSliderSelector = '.image-slider__thumb',
  interleaveOffset = 0.5;

  // Main Slider
  let mainSliderOptions = {
    loop: true,
    speed:1000,
    // autoplay:{
    //   delay:3000
    // },
    loopAdditionalSlides: 10,
    grabCursor: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: '.image-slider__button-next',
      prevEl: '.image-slider__button-prev',
    },
    on: {
      init: function(){
        this.autoplay.stop();
      },
      imagesReady: function(){
        this.el.classList.remove('loading');
        // this.autoplay.start();
      },
      progress: function(){
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          let slideProgress = swiper.slides[i].progress,
              innerOffset = swiper.width * interleaveOffset,
              innerTranslate = slideProgress * innerOffset;
        
          swiper.slides[i].querySelector(".image-slider__bgimg").style.transform =
            "translateX(" + innerTranslate + "px)";
        }
      },
      touchStart: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function(speed) {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".image-slider__bgimg").style.transition =
            speed + "ms";
        }
      }
    }
  };
  let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

  // Navigation Slider
  let navSliderOptions = {
    loop: true,
    loopAdditionalSlides: 10,
    speed:1000,
    spaceBetween: 16,
    slidesPerView: 3,
    centeredSlides : true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    direction: 'horizontal',
    on: {
      imagesReady: function(){
        this.el.classList.remove('loading');
      },
      click: function(){
        mainSlider.autoplay.stop();
      }
    },
    breakpoints: {
      420: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
      767: {
        slidesPerView: 5,
        spaceBetween: 16,
      },
      991: {
        spaceBetween: 30,
        slidesPerView: 5,
      },
    }
  };
  let navSlider = new Swiper(navSliderSelector, navSliderOptions);

  // Matching sliders
  if(document.querySelector('.image-slider__main')){
    mainSlider.controller.control = navSlider;
    navSlider.controller.control = mainSlider;
  }
    
};


// SmoothScroll
const smoothScroll = () => {
  SmoothScroll({ stepSize: 60 })
}

// Google Map Api
const googleMap = () => {
  function initMap() {
    let popupContent =
        '<p class="marker_content">Address</p>',
      image = {
        url: "../assets/images/icons/map_marker.svg",
        // size: new google.maps.Size(126, 40),
        // origin: new google.maps.Point(0, 0),
        // anchor: new google.maps.Point(-40, 140)
      },
      coordinates = { lat: 36.5438362, lng: 31.9951424 },
      map = new google.maps.Map(document.querySelector(".map-holder"), {
        center: coordinates,
        zoom: 13,
        // disableDefaultUI: true,
        styles: [
          {
              "featureType": "road",
              "elementType": "labels",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "poi",
              "elementType": "labels",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "transit",
              "elementType": "labels.text",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          }
      ] 
      }),
      marker = new google.maps.Marker({
        position: coordinates,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP
      }),
      infowindow = new google.maps.InfoWindow({
        content: popupContent
      });
  
    marker.addListener("click", function() {
      infowindow.open(map, marker);
    });
  }
  if(document.querySelector('.map-holder')){
    initMap();
  }
  
};

// Toggle Catalog Add to Favorits
const addToFavoritToggle = () => {
  $('.card__to-favorits').click(function(){
    $(this).children().toggleClass('to-favorits__icon_active');
  });
}

// Archive tabs Toggle
const archiveTabsToggle = () => {
	
    $('.archive-tab').click(function(){
      let tabNum = $(this).attr('data-tab');
  
      $('.archive-tab').removeClass('archive-tab_active');
      $('.tab-content').removeClass('tab-content_current');
  
      $(this).addClass('archive-tab_active');
      $("."+tabNum).addClass('tab-content_current');
    })
};

// Favorit Page Tabs
const favoritTabsToggle = () => {
	
  $('.favorit-tabs__list-item').click(function(){
    let tabNum = $(this).attr('data-tab');

    $('.favorit-tabs__list-item').removeClass('favorit-tabs__list-item_current');
    $('.tab-content').removeClass('tab-content_current');

    $(this).addClass('favorit-tabs__list-item_current');
    $("."+tabNum).addClass('tab-content_current');
  })
  
};

// Image Popup
const magnificPopup = () => {

  $('.image-popup').magnificPopup({
    type: 'image'
  });

};
