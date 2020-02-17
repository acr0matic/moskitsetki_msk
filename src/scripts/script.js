window.addEventListener("DOMContentLoaded", () => {
  if (document.body.contains(document.querySelector(".swiper-container")))
    var mySwiper = new Swiper(".swiper-container", {
      // Optional parameters
      loop: true,
      slidesPerView: 2,
      spaceBetween: 30,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },

      // And if we need scrollbar
      scrollbar: {
        el: ".swiper-scrollbar"
      }
    });


  const callbackButtons = document.querySelectorAll("[data-modal-callback]");
  for (const button of callbackButtons) {
    button.addEventListener("click", () => {
      MicroModal.show("modal-callback"); // [1]
    });
  }
});
