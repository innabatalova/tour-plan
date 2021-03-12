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
    nextEl: '.reviews-button__next',
    prevEl: '.reviews-button__prev',
  },
        

 
});
