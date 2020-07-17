/* global MicroModal */
/* global Swiper */

window.addEventListener('DOMContentLoaded', () => {
  MicroModal.init({
    awaitCloseAnimation: true,
  });

  const feedbackSlider = document.querySelector('.slider-feedback');

  if (feedbackSlider) {
    const slider = new Swiper(feedbackSlider, {
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

    slider.init();
  }
});
