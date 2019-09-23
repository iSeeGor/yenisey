$(function() {

    themeSelect();
    phoneListToggle();
    swiperTestimonial();
});

// Phone List Show 
const phoneListToggle = () => {

    // let button = window.getComputedStyle(document.querySelector('.phones__select-list'), ':after').;
}

// Custom Select's
const themeSelect = () => {
  
    $('select').niceSelect();
  
}

// Swiper Slider 
const swiperTestimonial = () => {
    let mySwiper = new Swiper ('.testimonial__slider', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
    
        // If we need pagination
        pagination: {
          el: '.testimonial__pagination',
          clickable: true,
        },
    
        // Navigation arrows
        navigation: {
          nextEl: '.testimonial__button-next',
          prevEl: '.testimonial__button-prev',
        },
    
        // And if we need scrollbar
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
      })
    
}