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
  const callbackAccept = document.getElementById("modal-callback-accept");
  const politicsAccept = document.getElementById("accept");

  politicsAccept.addEventListener("change", event => {
    if (event.target.checked) callbackAccept.removeAttribute("disabled", "disabled");
    else callbackAccept.setAttribute("disabled", "disabled");
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
