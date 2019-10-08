$(function() {
  selectCustom();
  aosRun();
  testimonalTextExpand();
  testimonialSlider();
  poductHomeSlider();
  newsHomeSlider();
  mobileMenu();

  accordionMenu();

  modalTheme();
  textSplittEffect();
  slideNav();
  toTopButton();
  modalFormValidate();
  phoneMask();
  articleToggle();
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

// Testimonial Text Readmore
const testimonalTextExpand = () => {
  let showChar = 330;
  let ellipsestext = "...";
  let moretext = "Читать полностью";
  let lesstext = "Сверныть отзыв";

  $(".testimonial__massage").each(function() {
    let content = $(this).html();

    if (content.length > showChar) {
      let c = content.substr(0, showChar);
      let h = content.substr(showChar, content.length - showChar);

      let html = `${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontent"><span class="testimonial__expanded-text"> ${h} </span>&nbsp;&nbsp;<a href="" class="testimonial__readmore-link link"> ${moretext} </a></span>`;

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
    return false;
  });
};

// Testimonial Slider -
const testimonialSlider = () => {
  let testimonialsSlider = new Swiper(".testimonial__slider", {
    loop: true,
    speed: 1000,
    slidesPerView: "auto",

    pagination: {
      el: ".testimonial__pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".testimonial__button-next",
      prevEl: ".testimonial__button-prev"
    }
  });

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
  let Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // letiables privadas
    let links = this.el.find(".link");
    // Evento
    links.on("click", { el: this.el, multiple: this.multiple }, this.dropdown);
  };

  Accordion.prototype.dropdown = function(e) {
    let $el = e.data.el;
    ($this = $(this)), ($next = $this.next());

    $next.slideToggle();
    $this.toggleClass("mobile-menu__link_active");

    if (!e.data.multiple) {
      $el
        .find(".dropdown-menu")
        .not($next)
        .slideUp()
        .prev()
        .removeClass("mobile-menu__link_active");
    }
  };

  let accordion = new Accordion($(".mobile-menu"), false);
};

// Modal's 
const modalTheme = () => {
  let overlay = document.querySelector(".popup-overlay");
  let closeBtn = document.querySelector(".popup__close-btn");

  // Modal Form
  let popup = document.querySelector(".popup");
  let openPopup = document.querySelectorAll(".button__popup");
  let popupTitle = document.querySelector(".popup__title");
  let popupText = document.querySelector(".popup__text");

  // Modal Video  
  let openPopupVideo = document.querySelector(".button__popup-video");
  let videoPopup = document.querySelector(".video-popup");
  let closeVideoPopup = document.querySelector(".video-popup__close-btn");

  for (let i = 0; i < openPopup.length; i++) {
    openPopup[i].onclick = function() {
      if (
        this.hasAttribute("data-popup-title") &&
        this.hasAttribute("data-popup-text")
      ) {
        popupTitle.innerHTML = this.dataset.popupTitle;
        popupText.innerHTML = this.dataset.popupText;
      } else if (this.hasAttribute("data-popup-text") === false) {
        popupTitle.innerHTML = this.dataset.popupTitle;
      } else {
        popupTitle.innerHTML = "Перезвоните мне";
        popupText.innerHTML =
          "Для получения подробной информации заполните форму и наш менеджер свяжется с Вами в ближайшее время";
      }

      overlay.classList.add("popup-overlay_opened");
      popup.classList.add("popup_show");
      // document.body.style = "overflow-y:scroll; width:100%; position:fixed;";
    };
  }

  closeBtn.onclick = function() {
    overlay.classList.remove("popup-overlay_opened");
    popup.classList.remove("popup_show");
    // document.body.style = "overflow:auto; position:relative; width:auto;";
  };

  if (openPopupVideo) {
    openPopupVideo.addEventListener("click", function() {
      overlay.classList.add("popup-overlay_opened");
      videoPopup.classList.add("video-popup_opened");
      // document.body.style = "overflow-y:scroll; width:100%; position:fixed;";
    });

    closeVideoPopup.addEventListener("click", function() {
      overlay.classList.remove("popup-overlay_opened");
      videoPopup.classList.remove("video-popup_opened");
      // document.body.style = "overflow:auto; position:relative; width:auto;";
    });
  }

  window.onclick = function(e) {
    if (e.target == overlay) {
      overlay.classList.remove("popup-overlay_opened");
      popup.classList.remove("popup_show");
      // document.body.style = "overflow:auto; position:relative; width:auto;";
    }
  };
};

// Title Text Fade + Splitt Effect
const textSplittEffect = () => {
  const breakpoint = window.matchMedia("(min-width:575px)");

  const breakpointChecker = function() {
    if (breakpoint.matches === true) {
      Splitting();
      ScrollOut({
        threshold: 0.8,
        once: true
      });
    } else if (breakpoint.matches === false) {
      ScrollOut({
        threshold: 0.8,
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
  $(".popup__form").validate({
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
