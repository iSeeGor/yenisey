$(function() {
  themeSelect();
  phoneListToggle();
  swiperTestimonial();
  mobileMenuToggle();
  accordionMenu();
  popUpWindow();

});

// Phone List Show
const phoneListToggle = () => {
  // let button = window.getComputedStyle(document.querySelector('.phones__select-list'), ':after').;
};

// Custom Select's
const themeSelect = () => {
  $("select").niceSelect();
};

// Swiper Slider
const swiperTestimonial = () => {
  let mySwiper = new Swiper(".testimonial__slider", {
    // Optional parameters
    // direction: 'vertical',
    loop: true,

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
};

// Mobile Menu
const mobileMenuToggle = () => {
  const menuBtn = document.querySelector(".hamberger");
  const sidenav = document.querySelector(".sidenav");

  menuBtn.onclick = function() {
    if (sidenav.classList.contains("sidenav_disabled")) {
      sidenav.classList.remove("sidenav_disabled");
    } else {
      sidenav.classList.add("sidenav_disabled");
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
  const openPopup = document.querySelectorAll('.button');
  const overlay = document.querySelector('.popup-overlay');
  const closeBtn = document.querySelector('.popup__close-btn');

  for(let i = 0; i < openPopup.length; i++){
    openPopup[i].onclick = function() {
      overlay.classList.add('popup-overlay_opened');
      popup.classList.add('popup_show');
      document.body.style = "overflow:hidden";    
    };
  }
  
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