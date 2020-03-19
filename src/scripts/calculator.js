var prices = {
  ironCnob: 200,
  install: 500,

  fastenersPlunger: 500,
  fastenersMetal: 300,
  fastenersPlastic: 0,

  handlePlastic: 0,
  handleMetal: 200,

  cornerPlastic: 0,
  cornerMetal: 500,

  plunger: 200,

  colorWhite: 0,
  colorBrown: 200,

  antiPollen: 1999,
  ultraview: 999,
  mosquito: 499,
  cat: 1299,
  dust: 1199,
  provedal: 2299,
  mosquitoDoor: 2999,

  new_antiPollen: 3499,
  new_ultraview: 1499,
  new_mosquito: 999,
  new_cat: 2499,
  new_dust: 1999,
  new_provedal: 2299,
  new_mosquitoDoor: 2999,

  rollerBlinds: 699,
  rollerBlindsBox: 1199,
  rollerBlindsGrand: 2199,

  zebra: 1599,
  zebraBox: 1799,
  zebraGrand: 3999,

  plisse: 3999,
  jalousieHorizontal: 1399,
  jalousieVertical: 1499,

  tinting: 1000
};

var curtains_prices = {
  rollerBlinds: 400,
  rollerBlindsBox: 600,
  rollerBlindsGrand: 800,

  zebra: 600,
  zebraBox: 600,
  zebraGrand: 800,

  plisse: 1,
  jalousieHorizontal: 1,
  jalousieVertical: 1
};

var calculator = document.getElementById("calculation");

var product = calculator.getAttribute("data-product");
var calculatorType = calculator.getAttribute("data-calculator-type");
var calculatorMethod = calculator.getAttribute("data-calculator-method");

var sizeCost = document.getElementById("table-size-cost");
var colorCost = document.getElementById("table-color-cost");
var fastenersCost = document.getElementById("table-fasteners-cost");
var handleCost = document.getElementById("table-handle-cost");
var installCost = document.getElementById("table-install-cost");
var cornerCost = document.getElementById("table-corner-cost");

var sizeCell = document.getElementById("table-size-item");
var colorCell = document.getElementById("table-color-item");
var fastenersCell = document.getElementById("table-fasteners-item");
var handleCell = document.getElementById("table-handle-item");
var installCell = document.getElementById("table-install-item");
var cornerCell = document.getElementById("table-corner-item");

var itemName = document.getElementById("item-name");
var itemType = document.getElementById("item-type");
var itemCost = document.getElementById("item-cost");

var widthField = document.getElementById("calculator-width");
var heightField = document.getElementById("calculator-height");
var colors = document.querySelectorAll(".radio-color");
var fasteners = document.querySelectorAll(".radio-input-fasteners");
var handles = document.querySelectorAll(".radio-input-handle");
var corners = document.querySelectorAll(".radio-input-corner");

var priceElement = document.getElementById("calculator-price");
var install = document.getElementById("calculator-install");

var accept = document.getElementById("calculator-order-button");

var color, width, height;

var fastenerPrice = 0,
  colorPrice = 0,
  handlePrice = 0,
  cornerPrice = 0,
  installPrice = 0,
  typePrice = 0,
  sizePrice = 0;

var addPriceValue = (prices["new_" + product] / 100) * 10;

init();

function init() {
  sizePrice = prices[product];
  ChangePrice();

  if (calculatorType == "mosquito-nets") {
    itemName.innerHTML = "Тип сетки";
    itemType.innerHTML = "Классическая";
    sizeCell.innerHTML = "50x50";
  } else if (calculatorType == "curtains") {
    itemName.innerHTML = "Тип шторы";
    sizeCell.innerHTML = "20x30";
  }

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
  CheckState();
  ChangePrice();

  if (!height) height = 0;
  if (!width) width = 0;

  sizeCell.innerHTML = height + "x" + width;
  sizeCost.innerHTML = FormatPrice(sizePrice);
});

heightField.addEventListener("change", () => {
  height = heightField.value;
  calculateSize();
  CheckState();
  ChangePrice();

  if (!height) height = 0;
  if (!width) width = 0;

  sizeCell.innerHTML = height + "x" + width;
  sizeCost.innerHTML = FormatPrice(sizePrice);
});

for (const fastenersValue of fasteners) {
  fastenersValue.addEventListener("change", () => {
    var fastener = fastenersValue.getAttribute("value");

    if (fastener == "plastic") {
      fastenerPrice = prices.fastenersPlastic;
      typePrice = 0;
      ChangePrice();
      fastenersCell.innerHTML = "Пластик";
      fastenersCost.innerHTML = FormatPrice(prices.fastenersPlastic);
      itemType.innerHTML = "Классическая";
      itemCost.innerHTML = FormatPrice(0);
    }

    if (fastener == "metal") {
      fastenerPrice = prices.fastenersMetal;
      typePrice = 0;
      ChangePrice();
      fastenersCell.innerHTML = "Металл";
      fastenersCost.innerHTML = FormatPrice(prices.fastenersMetal);
      itemType.innerHTML = "Классическая";
      itemCost.innerHTML = FormatPrice(0);
    }

    if (fastener == "plunger") {
      fastenerPrice = prices.fastenersPlunger;
      typePrice = prices.plunger;
      ChangePrice();
      fastenersCell.innerHTML = "Плунжер";
      fastenersCost.innerHTML = FormatPrice(prices.fastenersPlunger);
      itemType.innerHTML = "Плунжерная";
      itemCost.innerHTML = FormatPrice(200);
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

for (const cornersValue of corners) {
  cornersValue.addEventListener("change", () => {
    var handle = cornersValue.getAttribute("value");

    if (handle == "plastic") {
      cornerPrice = prices.cornerPlastic;
      ChangePrice();
      cornerCell.innerHTML = "Пластик";
      cornerCost.innerHTML = FormatPrice(prices.cornerPlastic);
    }

    if (handle == "metal") {
      cornerPrice = prices.cornerMetal;
      ChangePrice();
      cornerCell.innerHTML = "Металл";
      cornerCost.innerHTML = FormatPrice(prices.cornerMetal);
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

  if (calculatorType == "curtains") {
    if (heightValue > 20 || widthValue > 30) {
      var heightMultiplier = Math.ceil((heightValue - 20) / 10);
      var widthMultiplier = Math.ceil((widthValue - 30) / 10);

      if (calculatorMethod == "width")
        sizePrice = prices[product] + widthMultiplier * curtains_prices[product];

      else if (calculatorMethod == "height")
        sizePrice = prices[product] + heightMultiplier * curtains_prices[product];

    } else {
      sizePrice = prices[product];
    }
  } else if (calculatorType == "mosquito-nets") {
    if (heightValue * widthValue > 10000) {
      var multiplier = (heightValue * widthValue) / 1000 - 10;

      if (multiplier != 0)
        sizePrice = Math.floor(
          prices["new_" + product] + multiplier * addPriceValue
        );
      else sizePrice = prices["new_" + product];
    } else if (heightValue * widthValue > 2500)
      sizePrice = prices["new_" + product];
    else sizePrice = prices[product];
  }
}

function ChangePrice() {
  priceElement.innerHTML = FormatPrice(
    fastenerPrice +
      colorPrice +
      handlePrice +
      installPrice +
      sizePrice +
      typePrice +
      cornerPrice
  );
}

function CheckState() {
  if (widthField.value != "" && heightField.value != "") {
    accept.disabled = false;
  } else {
    accept.disabled = true;
  }
}

function FormatPrice(price) {
  return price + "р";
}
