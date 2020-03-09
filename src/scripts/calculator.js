var prices = {
  ironCnob: 200,
  install: 500,

  fastenersPlunger: 500,
  fastenersMetal: 300,
  fastenersPlastic: 0,

  handlePlastic: 0,
  handleMetal: 200,

  colorWhite: 0,
  colorBrown: 200,

  antiPollen: 1999,
  ultraview: 999,
  mosquito: 499,
  cat: 1299,
  dust: 1119,
  provedal: 2299,
  mosquitoDoor: 2999,

  new_antiPollen: 3499,
  new_ultraview: 1499,
  new_mosquito: 999,
  new_cat: 2499,
  new_dust: 1999,
  new_provedal: 2299,
  new_mosquitoDoor: 2999,

  plisse: 3999,
  rollerBlinds: 1599,
  blackout: 2199,
  zebra: 3499,
  jalousie: 999,
  romanCurtains: 699
};

var calculator = document.getElementById("calculation");

var product = calculator.getAttribute("data-product");
var calculatorType = calculator.getAttribute("data-calculator-type");

var sizeCost = document.getElementById("table-size-cost");
var colorCost = document.getElementById("table-color-cost");
var fastenersCost = document.getElementById("table-fasteners-cost");
var handleCost = document.getElementById("table-handle-cost");
var installCost = document.getElementById("table-install-cost");

var sizeCell = document.getElementById("table-size-item");
var colorCell = document.getElementById("table-color-item");
var fastenersCell = document.getElementById("table-fasteners-item");
var handleCell = document.getElementById("table-handle-item");
var installCell = document.getElementById("table-install-item");

var widthField = document.getElementById("calculator-width");
var heightField = document.getElementById("calculator-height");
var colors = document.querySelectorAll(".radio-color");
var fasteners = document.querySelectorAll(".radio-input-fasteners");
var handles = document.querySelectorAll(".radio-input-handle");

var priceElement = document.getElementById("calculator-price");
var install = document.getElementById("calculator-install");

var accept = document.getElementById("calculator-order-button");

var color, width, height;

var fastenerPrice = 0,
  colorPrice = 0,
  handlePrice = 0,
  installPrice = 0,
  sizePrice = 0;

var addPriceValue = (prices[product] / 100) * 10;

init();

function init() {
  sizePrice = prices[product];
  ChangePrice();
  sizeCell.innerHTML = "50x50";
  sizeCost.innerHTML = FormatPrice(prices[product]);
}

if (install)
  install.addEventListener("change", event => {
    if (event.target.checked) {
      installPrice = prices.install;
      ChangePrice();
      installCell.innerHTML = "Да";
      installCost.innerHTML = FormatPrice(prices.install);
    } else {
      installPrice = 0;
      ChangePrice();
      installCell.innerHTML = "Нет";
      installCost.innerHTML = FormatPrice(0);
    }
  });

widthField.addEventListener("change", () => {
  width = widthField.value;
  calculateSize();
  ChangePrice();
  sizeCell.innerHTML = height + "x" + width;
  sizeCost.innerHTML = FormatPrice(sizePrice);
});

heightField.addEventListener("change", () => {
  height = heightField.value;
  calculateSize();
  ChangePrice();
  sizeCell.innerHTML = height + "x" + width;
  sizeCost.innerHTML = FormatPrice(sizePrice);
});

for (const fastenersValue of fasteners) {
  fastenersValue.addEventListener("change", () => {
    var fastener = fastenersValue.getAttribute("value");

    if (fastener == "plastic") {
      fastenerPrice = prices.fastenersPlastic;
      ChangePrice();
      fastenersCell.innerHTML = "Пластик";
      fastenersCost.innerHTML = FormatPrice(prices.fastenersPlastic);
    }

    if (fastener == "metal") {
      fastenerPrice = prices.fastenersMetal;
      ChangePrice();
      fastenersCell.innerHTML = "Металл";
      fastenersCost.innerHTML = FormatPrice(prices.fastenersMetal);
    }

    if (fastener == "plunger") {
      fastenerPrice = prices.fastenersPlunger;
      ChangePrice();
      fastenersCell.innerHTML = "Плунжер";
      fastenersCost.innerHTML = FormatPrice(prices.fastenersPlunger);
    }
  });
}

for (const handlesValue of handles) {
  handlesValue.addEventListener("change", () => {
    var handle = handlesValue.getAttribute("value");

    if (handle == "plastic") {
      handlePrice = prices.handlePlastic;
      ChangePrice();
      handleCell.innerHTML = "Пластик";
      handleCost.innerHTML = FormatPrice(prices.handlePlastic);
    }

    if (handle == "metal") {
      handlePrice = prices.handleMetal;
      ChangePrice();
      handleCell.innerHTML = "Металл";
      handleCost.innerHTML = FormatPrice(prices.handleMetal);
    }
  });
}

for (const colorValue of colors) {
  colorValue.addEventListener("change", () => {
    color = colorValue.getAttribute("value");

    if (calculatorType == "mosquito-nets") {
      if (color == "brown") {
        colorPrice = prices.colorBrown;
        ChangePrice();
        colorCell.innerHTML = "Коричневый";
        colorCost.innerHTML = FormatPrice(prices.colorBrown);
      }

      if (color == "white") {
        colorPrice = prices.colorWhite;
        ChangePrice();
        colorCell.innerHTML = "Белый";
        colorCost.innerHTML = FormatPrice(0);
      }
    }
  });
}

function calculateSize() {
  var heightValue = parseInt(height);
  var widthValue = parseInt(width);

  if (heightValue * widthValue > 10000) {
    var multiplier = (heightValue * widthValue) / 1000 - 10;

    if (multiplier != 0) sizePrice = Math.floor(prices["new_" + product] + (multiplier * addPriceValue));
    else sizePrice = prices["new_" + product];
  }

  else if (heightValue * widthValue > 2500)
    sizePrice = prices["new_" + product];

  else
    sizePrice = prices[product];

}

function ChangePrice() {
  priceElement.innerHTML = FormatPrice(
    fastenerPrice + colorPrice + handlePrice + installPrice + sizePrice
  );
}

function CheckState() {
  if (width && height && color) accept.removeAttribute("disabled", "disabled");
  else accept.setAttribute("disabled", "disabled");
}

function FormatPrice(price) {
  return price + "р";
}
