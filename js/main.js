const hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters

  loop: true,

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button__next',
    prevEl: '.slider-button__prev',
  },
        

 
});
 
const reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters

  loop: true,

  // keyboard: {
  //   enabled: true,
  //   onlyInViewport: false,
  // },

  //Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
        

 
});
