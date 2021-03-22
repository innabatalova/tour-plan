$(document).ready(function(){
  //слайдер 1
  const hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters

  loop: true,

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
        

 
});

 //слайдер 2
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

//переключатель для меню
let menuButton = $(".menu-button")
menuButton.on("click", function(){
  //  console.log ("Клик по кнопке меню")
   $(".navbar-bottom").toggleClass("navbar-bottom_visible")

});

let modalButtton = $('[data-toggle="modal"]');
modalButtton.on ('click', openModal);

let closeModalButton = $(".modal__close");
closeModalButton.on ('click', closeModal);

let closeEscModalButton= $("body");
closeEscModalButton.on ('keydown', closeModal);

function openModal() {

  let modalOverlay = $ (".modal__overlay");
  let modalDialog = $ (".modal__dialog");

  modalOverlay.addClass("modal__overlay--visible");
  modalDialog.addClass("modal__dialog--visible");
};

function closeModal(event) {

  event.preventDefault();

  let modalOverlay = $ (".modal__overlay");
  let modalDialog = $ (".modal__dialog");

  modalOverlay.removeClass("modal__overlay--visible");
  modalDialog.removeClass("modal__dialog--visible");
};



});
