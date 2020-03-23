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

  if (document.body.contains(document.querySelector(".calculator-wrapper"))) {
    var swiperCalculator = new Swiper(".calculator-wrapper", {
      // Optional parameters
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 15,
      simulateTouch: false,

      // If we need pagination
      pagination: {
        el: ".swiper-calculator-pagination"
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-calculator-button-next",
        prevEl: ".swiper-calculator-button-prev"
      },

      breakpoints: {
        1024: {
          spaceBetween: 25,
          slidesPerView: 2,
          slidesPerGroup: 2
        }
      }
    });

    var nextSlideButtons = document.querySelectorAll(".calculator-button-next");
    for (const button of nextSlideButtons) {
      button.addEventListener("click", () => {
        swiperCalculator.slideNext();
      });
    }

    var prevSlideButtons = document.querySelectorAll(".calculator-button-prev");
    for (const button of prevSlideButtons) {
      button.addEventListener("click", () => {
        swiperCalculator.slidePrev();
      });
    }
  }

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

  function setCursorPosition(pos, elem) {
    elem.focus();
    if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
    else if (elem.createTextRange) {
      var range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select();
    }
  }

  var len = 0;
  function mask(event) {
    var matrix = "+7 (___) ___ ____",
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, "");
    if (def.length >= val.length) val = def;
    this.value = matrix.replace(/[_\d]/g, function(a) {
      return i < val.length ? val.charAt(i++) : a;
    });
    i = this.value.indexOf("_");
    if (val.length < len) i = this.value.lastIndexOf(val.substr(-1)) + 1;
    if (i != -1) {
      i < 5 && (i = 3);
      this.value = this.value.slice(0, i);
    }
    if (event.type == "blur") {
      if (this.value.length < 5) this.value = "";
    } else setCursorPosition(this.value.length, this);
    len = val.length;
  }

  var callbackForm = document.getElementById("callbackForm");
  var errorLabel = document.getElementById("form-error-label");
  var nameInput = document.querySelector("input[name=user_name]");
  var phoneInput = document.querySelector("input[name=user_phone]");

  phoneInput.addEventListener("input", mask, false);
  phoneInput.addEventListener("focus", mask, false);
  phoneInput.addEventListener("blur", mask, false);

  callbackAccept.addEventListener("click", () => {
    if (CheckForm()) callbackForm.submit();
  });

  function CheckForm() {
    if (ValidName(nameInput) && ValidPhone(phoneInput)) return true;
    return false;
  }

  function ValidName(input) {
    var regex = /^[a-zA-Zа-яА-Я]+(([',. -][a-zA-Zа-яА-Я])?[a-zA-Zа-яА-Я]*)*$/;
    var valid = regex.test(input.value);
    if (!valid) {
      errorLabel.style.display = "block";
      errorLabel.innerText = "Вы неправильно ввели имя"
    }
    return valid;
  }

  function ValidPhone(input) {
    var regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
    var valid = regex.test(input.value);
    if (!valid) {
      errorLabel.style.display = "block";
      errorLabel.innerText = "Вы неправильно номер телефона"
    }
    return valid;
  }
});
