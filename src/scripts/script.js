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

  var modal = document.getElementById("gallery-modal");
  var images = document.querySelectorAll(".gallery-item, .gallery-main-item");
  var modalImg = document.getElementById("gallery-modal-image");

  for (var i = 0; i < images.length; i++) {
    var img = images[i];
    img.onclick = function() {
      modal.style.display = "block";
      modalImg.src = this.src;
    };
  }

  var span = document.getElementsByClassName("close")[0];

  span.onclick = function() {
    modal.style.display = "none";
  };

  modal.onclick = function(e) {
    if (e.target != modalImg) modal.style.display = "none";
  };
});
