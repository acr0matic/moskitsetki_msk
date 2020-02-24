window.addEventListener("DOMContentLoaded", () => {
  if (document.body.contains(document.querySelector(".swiper-feedback")))
    var feedbackSlider = new Swiper(".swiper-feedback", {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
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
        el: ".swiper-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
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

  const mobileMenu = document.querySelector(".mobile-menu-wrapper");
  const mobileMenuOverlay = document.querySelector(".mobile-menu-overlay");
  const mobileMenuOpenButton = document.getElementById("mobile-menu-open");
  const mobileMenuCloseButton = document.getElementById("mobile-menu-close");

  mobileMenuOpenButton.addEventListener("click", () => {
    mobileMenu.classList.add("mobile-menu-visible");
    mobileMenuOverlay.classList.add("mobile-menu-overlay-visible");
  });

  mobileMenuCloseButton.addEventListener("click", () => {
    if (mobileMenu.classList.contains("mobile-menu-visible"))
      mobileMenu.classList.remove("mobile-menu-visible");

    if (mobileMenuOverlay.classList.contains("mobile-menu-overlay-visible"))
      mobileMenuOverlay.classList.remove("mobile-menu-overlay-visible");
  });

  for (const button of callbackButtons) {
    button.addEventListener("click", () => {
      MicroModal.show("modal-callback"); // [1]
    });
  }

  var modal = document.getElementById("gallery-modal");
  var images = document.getElementsByClassName("gallery-item");
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
