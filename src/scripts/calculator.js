var prices = {
  ironCnob: 200,
  install: 500,
  fastenersMetal: 300,
  fastenersPlastic: 0
};

var widthField = document.getElementById("calculator-width");
var heightField = document.getElementById("calculator-height");
var colors = document.querySelectorAll(".radio-color");

var priceElement = document.getElementById("calculator-price");
var ironCnob = document.getElementById("calculator-iron-knob");
var install = document.getElementById("calculator-install");

var accept = document.getElementById("calculator-order-button");

var price = 0;
var color, width, height;

ironCnob.addEventListener("change", event => {
  if (event.target.checked) IncreasePrice(prices.ironCnob);
  else DecreasePrice(prices.ironCnob);
});

install.addEventListener("change", event => {
  if (event.target.checked) IncreasePrice(prices.install);
  else DecreasePrice(prices.install);
});

widthField.addEventListener("change", () => {
  width = widthField.value;
  CheckState();
});

heightField.addEventListener("change", () => {
  height = heightField.value;
  CheckState();
});

for (const colorValue of colors) {
  colorValue.addEventListener("change", () => {
    color = colorValue.getAttribute("value");
    CheckState();
  })
}

function IncreasePrice(cost) {
  price += cost;
  ChangePrice();
}

function DecreasePrice(cost) {
  price -= cost;
  ChangePrice();
}

function ChangePrice() {
  priceElement.innerHTML = price + "р";
}

function CheckState() {
  if (width && height && color) accept.removeAttribute("disabled", "disabled");
  else accept.setAttribute("disabled", "disabled");
}
