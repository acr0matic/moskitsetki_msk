/* global MicroModal */
/* global Swiper */

window.addEventListener('DOMContentLoaded', () => {
  MicroModal.init({
    awaitCloseAnimation: true,
  });

  const feedbackSlider = document.querySelector('.slider-feedback');
  const portfolioSlider = document.querySelector('.slider-portfolio');
  const framesSlider = document.querySelector('.slider-frames');

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

  if (portfolioSlider) {
    const slider = new Swiper(portfolioSlider, {
      // Optional parameters
      autoplay: {
        delay: 5000,
      },

      spaceBetween: 50,
      slidesPerView: 1,

      // If we need pagination
      pagination: {
        el: '.slider-portfolio-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.slider-portfolio-next',
        prevEl: '.slider-portfolio-prev',
      },

      breakpoints: {
        1180: {
          slidesPerView: 2,
        },
      },
    });

    slider.init();
  }

  if (framesSlider) {
    const slider = new Swiper(framesSlider, {
      spaceBetween: 50,
      slidesPerView: 1,

      breakpoints: {
        1180: {
          slidesPerView: 2,
        },
      },

      navigation: {
        nextEl: '.slider-frames-next',
        prevEl: '.slider-frames-prev',
      },

      scrollbar: {
        el: '.slider-frames-scrollbar',
      },
    });

    slider.init();
  }
});
