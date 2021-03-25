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

$('body').on('keydown', function(e){
  if(e.which === 27){
    closeModal(e);
  }
});



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


//Обработка форм
$ (".form").each(function(){

$(this).validate({

  errorClass: "invalid",

  messages: {
    name: {
      required: "Please specify your name",
      minlength: "Name must be at least 2 letters",
    },

    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com",
    },

    phone: {
    required:"Phone is required",
    },
  
  },
 });
});

$(".phone").mask('+7 (000) 000 00 00');



});
