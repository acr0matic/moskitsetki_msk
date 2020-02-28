var prices = {
  ironCnob: 200,
  install: 500,
  fastenersMetal: 300,
  fastenersPlastic: 0,

  antiPollen: 3499,
  ultraview: 1499,
  mosquito: 999,
  cat: 2499,
  dust: 1999,
  plunger: 1199,

  plisse: 3999,
  rollerBlinds: 1599,
  blackout: 2199,
  zebra: 3499,
  jalousie: 999,
  romanCurtains: 699
};

var calculator = document.getElementById("calculation");
var product = calculator.getAttribute("data-product");

var widthField = document.getElementById("calculator-width");
var heightField = document.getElementById("calculator-height");
var colors = document.querySelectorAll(".radio-color");
var fasteners = document.querySelectorAll(".radio-input-fasteners");

var priceElement = document.getElementById("calculator-price");
var ironCnob = document.getElementById("calculator-iron-knob");
var install = document.getElementById("calculator-install");

var accept = document.getElementById("calculator-order-button");

var price = prices[product];
var tempPrice = price;
var color,
  width = 0,
  height = 0;

ChangePrice();

if (ironCnob)
  ironCnob.addEventListener("change", event => {
    if (event.target.checked) IncreasePrice(prices.ironCnob);
    else DecreasePrice(prices.ironCnob);

    tempPrice = price;
  });

if (install)
  install.addEventListener("change", event => {
    if (event.target.checked) IncreasePrice(prices.install);
    else DecreasePrice(prices.install);

    tempPrice = price;
  });

widthField.addEventListener("change", () => {
  width = widthField.value;
  IncreasePrice(calculateSize());
  CheckState();
});

heightField.addEventListener("change", () => {
  height = heightField.value;
  IncreasePrice(calculateSize());
  CheckState();
});

for (const colorValue of colors) {
  colorValue.addEventListener("change", () => {
    color = colorValue.getAttribute("value");
    CheckState();
  });
}

var fastenerState = false;
for (const fastenersValue of fasteners) {
  fastenersValue.addEventListener("change", () => {
    if (fasteners[1].checked) {
      IncreasePrice(prices.fastenersMetal);
      fastenerState = true;
    } else if (fastenerState) DecreasePrice(prices.fastenersMetal);

    tempPrice = price;
  });
}

function calculateSize() {
  price = tempPrice;
  if (parseInt(width) + parseInt(height) >= 200 && width && height) {
    return parseInt(width) + parseInt(height) - 200;
  } else {
    return 0;
  }
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
