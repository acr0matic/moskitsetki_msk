/* global IMask */
/* global MicroModal */

function Validation(inputElement, errorElement, validationType) {
  const pattern = {
    name: {
      regex: /[a-zA-Zа-яА-Я]/g,
      error: 'Вы неправильно ввели имя',
    },

    phone: {
      regex: /^(\+7|7|8)?[\s\\-]?\(?[489][0-9]{2}\)?[\s\\-]?[0-9]{3}[\s\\-]?[0-9]{2}[\s\\-]?[0-9]{2}$/g,
      error: 'Вы неправильно ввели номер телефона',
    },
  };

  const input = inputElement;
  const error = errorElement;
  const type = validationType;
  const match = pattern[type].regex.test(input.value);

  if (!match) {
    input.classList.add('input--error');
    error.style.display = 'block';
    error.innerHTML = pattern[type].error;
  }

  return match;
}

function CheckForm(formElement) {
  const name = formElement.querySelector('[data-form=name]');
  const phone = formElement.querySelector('[data-form=phone]');
  const errorLabel = formElement.querySelector('[data-form=error]');

  function CheckError(field) {
    if (field.classList.contains('input--error')) {
      field.classList.remove('input--error');
      errorLabel.style.display = 'none';
    }
  }

  name.addEventListener('click', () => {
    CheckError(name);
  });

  phone.addEventListener('click', () => {
    CheckError(phone);
  });

  return Validation(name, errorLabel, 'name') && Validation(phone, errorLabel, 'phone');
}

function AJAXform(formElement, formMethod = 'post') {
  const form = formElement;
  const acceptButton = formElement.querySelector('[type="button"]');
  const formAction = form.getAttribute('action');
  const formInputs = form.querySelectorAll('input');
  const formPolicy = form.querySelector('#policy__modal');

  function XMLhttp() {
    const httpRequest = new XMLHttpRequest();
    const formData = new FormData();

    formInputs.forEach((inputElement) => {
      const input = inputElement;

      formData.append(input.name, input.value);
    });

    httpRequest.onreadystatechange = function Response() {
      if (this.readyState === 4 && this.status === 200) {
        if (document.getElementById('modal-callback').classList.contains('is-open')) MicroModal.close('modal-callback');

        MicroModal.show('modal-accept');

        formInputs.forEach((inputElement) => {
          const input = inputElement;

          if (input.type === 'checkbox') input.checked = false;
          input.value = '';
        });
      }
    };

    httpRequest.open(formMethod, formAction);
    httpRequest.send(formData);
  }

  formPolicy.addEventListener('change', (event) => {
    if (event.target.checked) acceptButton.removeAttribute('disabled', 'disabled');
    else acceptButton.setAttribute('disabled', 'disabled');
  });
  acceptButton.onclick = () => (CheckForm(form) ? XMLhttp() : false);
}

window.addEventListener('DOMContentLoaded', () => {
  // Маска для номера телефона
  const phoneInputs = document.querySelectorAll('input[name=user_phone]');
  const maskOptions = {
    mask: '+{7} (000) 000-00-00',
  };

  phoneInputs.forEach((input) => IMask(input, maskOptions));

  const callbackForm = document.getElementById('callbackForm');
  AJAXform(callbackForm);
});
