window.addEventListener("DOMContentLoaded", () => {
  if (document.body.contains(document.querySelector(".swiper-feedback")))
    var feedbackSlider = new Swiper(".swiper-feedback", {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-feedback-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-feedback-button-next",
        prevEl: ".swiper-feedback-button-prev"
      },

      // And if we need scrollbar
      scrollbar: {
        el: ".swiper-scrollbar"
      },

      breakpoints: {
        1180: {
          slidesPerView: 2
        }
      }
    });

  if (document.body.contains(document.querySelector(".swiper-kits")))
    var kitsSlider = new Swiper(".swiper-kits", {
      // Optional parameters
      loop: true,
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-kits-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-kits-button-next",
        prevEl: ".swiper-kits-button-prev"
      },

      breakpoints: {
        540: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3,
          allowSlidePrev: false,
          allowSlideNext: false
        }
      }
    });

  if (document.body.contains(document.querySelector(".block-nets")))
    var blockNetsSlider = new Swiper(".block-nets", {
      // Optional parameters
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-block-nets-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-block-nets-button-next",
        prevEl: ".swiper-block-nets-button-prev"
      }
    });

  if (document.body.contains(document.querySelector(".block-curtains")))
    var blockCurtainsSlider = new Swiper(".block-curtains", {
      // Optional parameters
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-block-curtains-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-block-curtains-button-next",
        prevEl: ".swiper-block-curtains-button-prev"
      }
    });

  if (document.body.contains(document.querySelector(".calculator-wrapper")))
    var swiperCalculator = new Swiper(".calculator-wrapper", {
      // Optional parameters
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 25,
      simulateTouch: false,

      // If we need pagination
      pagination: {
        el: ".swiper-calculator-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-calculator-button-next",
        prevEl: ".swiper-calculator-button-prev"
      }
    });

  if (document.body.contains(document.querySelector(".block-other")))
    var blockOtherSlider = new Swiper(".block-other", {
      // Optional parameters
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-block-other-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-block-other-button-next",
        prevEl: ".swiper-block-other-button-prev"
      }
    });

  const callbackButtons = document.querySelectorAll("[data-modal-callback]");
  const callbackAccept = document.getElementById("modal-callback-accept");
  const politicsAccept = document.getElementById("accept");

  politicsAccept.addEventListener("change", event => {
    if (event.target.checked)
      callbackAccept.removeAttribute("disabled", "disabled");
    else callbackAccept.setAttribute("disabled", "disabled");
  });

  for (const button of callbackButtons) {
    button.addEventListener("click", () => {
      MicroModal.show("modal-callback"); // [1]
    });
  }
});
