/* global MicroModal */

window.addEventListener('DOMContentLoaded', () => {
  MicroModal.init({
    awaitCloseAnimation: true,
  });

  if (document.body.contains(document.querySelector('.slider-feedback'))) {
    const feedbackSlider = new Swiper('.slider-feedback', {
      // Optional parameters
      loop: true,
      autoplay: {
        delay: 5000,
      },

      spaceBetween: 50,
      slidesPerView: 1,

      // If we need pagination
      pagination: {
        el: '.slider-feedback-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.slider-feedback-next',
        prevEl: '.slider-feedback-prev',
      },

      breakpoints: {
        1180: {
          slidesPerView: 2,
        },
      },
    });
  }

  const callbackAccept = document.getElementById('modal-callback-accept');
  const politicsAccept = document.getElementById('policy__modal');


});
