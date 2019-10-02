$(function() {
  themeSelect();
  swiperTestimonial();
  mobileMenuToggle();
  accordionMenu();
  popUpWindow();
  aosRun();
  textSplittEffect();
  // newFF();
  slideNav();

});

const aosRun = () => {

  AOS.init({
    disable: 'mobile',
    offset: 140,
    duration: 800,
    once: true,
  });

}

// const newFF = () => {
//   var showChar = 196;  // How many characters are shown by default
//     var ellipsestext = "...";
//     var moretext = "Read more";
//     var lesstext = "Read less";
    
//     //Cut content based on showChar length
//     if ($(".toggle-text").length) {
//         $(".toggle-text").each(function() {

//             var content = $(this).html();
     
//             if(content.length > showChar) {
     
//                 var contentExcert = content.substr(0, showChar);
//                 var contentRest = content.substr(showChar, content.length - showChar);
//                 var html = contentExcert + '<span class="toggle-text-ellipses">' + ellipsestext + ' </span> <span class="toggle-text-content"><span>' + contentRest + '</span><a href="javascript:;" class="btn btn--primary btn--dark toggle-text-link">' + moretext + '</a></span>';
     
//                 $(this).html(html);
//             }
//         });
//     }
    
// }

// Custom Select's
const themeSelect = () => {
  $("select").niceSelect();
};


// Swiper Slider 
const swiperTestimonial = () => {

  //Testimonials Slider
  let testimonialsSlider = new Swiper(".testimonial__slider", {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    speed: 1000,
    slidesPerView: 'auto',

    // If we need pagination
    pagination: {
      el: ".testimonial__pagination",
      clickable: true
    },

    // Navigation arrows
    navigation: {
      nextEl: ".testimonial__button-next",
      prevEl: ".testimonial__button-prev"
    }

    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });

  // News Slider + BreackPoin Checher
  //BreckPoint One Fore News
  const breakpoint = window.matchMedia( '(min-width:1199px)' );
  const breakpointProd = window.matchMedia( '(min-width:820px)' );

  //BreackPoint Two For Products 
  let newsSlider;
  let prodSlider;

  const breakpointChecker = function() {

    if ( breakpoint.matches === true ) {

	  if ( newsSlider !== undefined ) newsSlider.destroy( true, true );
    
    return;

      } else if ( breakpoint.matches === false ) {

        return enableSwiper();
      }
  };

  const breakpointProductChecker = function() {

    if ( breakpointProd.matches === true ) {

	  if ( prodSlider !== undefined ) prodSlider.destroy( true, true );
    
    return;

      } else if ( breakpointProd.matches === false ) {

        return enableSwiperProd();
      }
  };

  const enableSwiper = function() { 
    newsSlider = new Swiper(".news-slider", {

      loop: true,
      speed: 1000,
      slidesPerView: 'auto',

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
        },
      }

    });
  };

  const enableSwiperProd = function(){
    prodSlider = new Swiper(".product-slider", {

      loop: true,
      speed: 1000,
      slidesPerView: 'auto',

      pagination: {
        el: ".product-slider__pagination",
        clickable: true
      },
      // breakpoints: {
      //   // when window width is <= 499px
      //   499: {
      //       slidesPerView: 1,
      //       spaceBetweenSlides: 30
      //   },
      //   // when window width is <= 999px
      //   999: {
      //       slidesPerView: 1,
      //       spaceBetweenSlides: 60
      //   }
      // }

    });
  };

  breakpoint.addListener(breakpointChecker);
  breakpointChecker();

  breakpointProd.addListener(breakpointProductChecker);
  breakpointProductChecker();
};

// Mobile Menu
const mobileMenuToggle = () => {
  const menuBtn = document.querySelector(".hamburger");
  const sidenav = document.querySelector(".sidenav");

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
  let Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// letiables privadas
		let links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		let $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.toggleClass('mobile-menu__link_active');

		if (!e.data.multiple) {
			$el.find('.dropdown-menu').not($next).slideUp().prev().removeClass('mobile-menu__link_active');
		};
	}	

	let accordion = new Accordion($('.mobile-menu'), false);
}

// PopUp Window 
const popUpWindow = () => {
  const popup = document.querySelector('.popup');
  const openPopup = document.querySelectorAll('.button__popup');
  const overlay = document.querySelector('.popup-overlay');
  const closeBtn = document.querySelector('.popup__close-btn');

  const openPopupVideo = document.querySelector('.button__popup-video');
  const videoPopup = document.querySelector('.video-popup');
  const closeVideoPopup = document.querySelector('.video-popup__close-btn');

  for(let i = 0; i < openPopup.length; i++){
    openPopup[i].onclick = function() {
      overlay.classList.add('popup-overlay_opened');
      popup.classList.add('popup_show');
      document.body.style = "overflow:hidden";    
    };
  }

  openPopupVideo.onclick = function() {
    overlay.classList.add('popup-overlay_opened');
    videoPopup.classList.add('video-popup_opened');
    document.body.style = "overflow:hidden";   
  };

  closeVideoPopup.onclick = function() {
    overlay.classList.remove('popup-overlay_opened');
    videoPopup.classList.remove('video-popup_opened');
    document.body.style = "overflow:auto";  
  };

  closeBtn.onclick = function() {
    overlay.classList.remove('popup-overlay_opened');
    popup.classList.remove('popup_show');
    document.body.style = "overflow:auto";     
  };

  window.onclick = function(e) {
    if (e.target == overlay) {
      overlay.classList.remove('popup-overlay_opened');
      popup.classList.remove('popup_show');
      document.body.style = "overflow:auto"; 
    }
  }
}

// Text Splitt Effect
const textSplittEffect = () => {

  const breakpoint = window.matchMedia( '(min-width:575px)' );

  const breakpointChecker = function() {

    if ( breakpoint.matches === true ) {

      Splitting();
      ScrollOut({
        threshold: .8,
        once: true,
      });
      

    } else if ( breakpoint.matches === false ) {

      ScrollOut.teardown();
      
    }
  };


  breakpoint.addListener(breakpointChecker);
  breakpointChecker();
}

// $('.parallax-window').parallax({
  
// });

const slideNav = () => {

  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('.header').outerHeight();

  $(window).scroll(function(event){
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
      
      if(Math.abs(lastScrollTop - st) <= delta)
          return;
      
      if (st > lastScrollTop && st > navbarHeight){

          $('.header').removeClass('header_down').addClass('header_up');
      } else {

          if(st + $(window).height() < $(document).height()) {
              $('.header').removeClass('header_up').addClass('header_down');
          }
      }
      
      lastScrollTop = st;
  }
}