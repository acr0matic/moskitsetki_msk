const prices = {
  ironCnob: 200,
  install: 500,
  installProvedal: 1000,
  delivery: 500,

  fastenersPlunger: 500,
  fastenersMetal: 300,
  fastenersPlastic: 0,

  handlePlastic: 0,
  handleMetal: 250,

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
  provedal: 2499,
  mosquitoDoor: 2999,
  inner: 1250,

  new_antiPollen: 3499,
  new_ultraview: 1499,
  new_mosquito: 999,
  new_cat: 2499,
  new_dust: 1999,
  new_provedal: 2299,
  new_mosquitoDoor: 2999,
  new_inner: 2500,

  rollerBlinds: 699,
  rollerBlindsBox: 1199,
  rollerBlindsGrand: 2199,

  zebra: 1599,
  zebraBox: 1799,
  zebraGrand: 3999,

  plisse: 3999,
  jalousieHorizontal: 1399,
  jalousieVertical: 1499,

  tinting: 1000,

  compressorWindow: 2000,
  compressorDoor: 3000,

  adjustmentWindow: 500,
  adjustmentDoor: 1000,

  limiterPlastic: 300,
  limiterMetal: 500,

  lockCable: 1000,
  lockBottom: 800,
  lockHandle: 1000,
};

const curtains_prices = {
  rollerBlinds: 400,
  rollerBlindsBox: 600,
  rollerBlindsGrand: 800,

  zebra: 600,
  zebraBox: 600,
  zebraGrand: 800,

  plisse: 1,
  jalousieHorizontal: 1,
  jalousieVertical: 1,
};

const calculator = document.getElementById('calculation');

if (calculator) {

  const product = calculator.getAttribute('data-product');
  const productName = document.querySelector('.product-heading').innerHTML;
  const calculatorType = calculator.getAttribute('data-calculator-type');
  const calculatorMethod = calculator.getAttribute('data-calculator-method');

  const sizeCost = document.getElementById('table-size-cost');
  const colorCost = document.getElementById('table-color-cost');
  const fastenersCost = document.getElementById('table-fasteners-cost');
  const handleCost = document.getElementById('table-handle-cost');
  const installCost = document.getElementById('table-install-cost');
  const cornerCost = document.getElementById('table-corner-cost');
  const deliveryCost = document.getElementById('table-delivery-cost');

  const sizeCell = document.getElementById('table-size-item');
  const colorCell = document.getElementById('table-color-item');
  const fastenersCell = document.getElementById('table-fasteners-item');
  const handleCell = document.getElementById('table-handle-item');
  const installCell = document.getElementById('table-install-item');
  const cornerCell = document.getElementById('table-corner-item');
  const deliveryCell = document.getElementById('table-delivery-item');

  const itemName = document.getElementById('item-name');
  const itemType = document.getElementById('item-type');
  const itemCost = document.getElementById('item-cost');

  const widthField = document.getElementById('calculator-width');
  const heightField = document.getElementById('calculator-height');
  const colors = document.querySelectorAll('.radio-color');
  const fasteners = document.querySelectorAll('.radio-input-fasteners');
  const handles = document.querySelectorAll('.radio-input-handle');
  const corners = document.querySelectorAll('.radio-input-corner');
  const compressors = document.querySelectorAll('.radio-input-compressor');
  const adjustments = document.querySelectorAll('.radio-input-adjustment');
  const limiters = document.querySelectorAll('.radio-input-limiter');
  const locks = document.querySelectorAll('.radio-input-lock');

  const priceElement = document.getElementById('calculator-price');
  const install = document.getElementById('calculator-install');
  const delivery = document.getElementById('calculator-delivery');

  const accept = document.getElementById('calculator-order-button');

  let color = 'white';
  let width;
  let height;

  let fastenerPrice = 0;
  let colorPrice = 0;
  let handlePrice = 0;
  let cornerPrice = 0;
  let installPrice = 0;
  let deliveryPrice = 0;
  let typePrice = 0;
  let sizePrice = 0;
  let compressorPrice = 0;
  let adjustmentPrice = 0;
  let limiterPrice = 0;
  let lockPrice = 0;

  const addPriceValue = (prices[`new_${product}`] / 100) * 10;

  init();

  function init() {
    if (calculatorType != 'other') {
      sizePrice = prices[product];
    } else {
      if (product == 'tinting') {
        typePrice = prices.tinting;
      }

      if (product == 'compressor') {
        compressorPrice = prices.compressorWindow;
      }

      if (product == 'adjustment') {
        adjustmentPrice = prices.adjustmentWindow;
      }

      if (product == 'limiter') {
        limiterPrice = prices.limiterPlastic;
      }

      if (product == 'lock') {
        lockPrice = prices.lockCable;
      }
    }

    ChangePrice();

    if (calculatorType == 'mosquito-nets') {
      itemName.innerHTML = 'Тип сетки';
      itemType.innerHTML = 'Классическая';
      sizeCell.innerHTML = '50x50';
      sizeCost.innerHTML = FormatPrice(prices[product]);
    } else if (calculatorType == 'curtains') {
      itemName.innerHTML = 'Тип шторы';
      sizeCell.innerHTML = '20x30';
      sizeCost.innerHTML = FormatPrice(prices[product]);
    }
  }

  if (install) {
    install.addEventListener('change', (event) => {
      if (event.target.checked) {
        if (product != 'provedal') {
          installPrice = prices.install;
          ChangePrice();
          installCell.innerHTML = 'Да';
          installCost.innerHTML = FormatPrice(prices.install);
        } else {
          installPrice = prices.installProvedal;
          ChangePrice();
          installCell.innerHTML = 'Да';
          installCost.innerHTML = FormatPrice(prices.installProvedal);
        }
      } else {
        installPrice = 0;
        ChangePrice();
        installCell.innerHTML = 'Нет';
        installCost.innerHTML = FormatPrice(0);
      }
    });
  }

  if (delivery) {
    delivery.addEventListener('change', (event) => {
      if (event.target.checked) {
        deliveryPrice = prices.delivery;
        ChangePrice();
        deliveryCell.innerHTML = 'Да';
        deliveryCost.innerHTML = FormatPrice(prices.delivery);
      } else {
        deliveryPrice = 0;
        ChangePrice();
        deliveryCell.innerHTML = 'Нет';
        deliveryCost.innerHTML = FormatPrice(0);
      }
    });
  }

  if (widthField) {
    widthField.addEventListener('change', () => {
      width = widthField.value;
      calculateSize();
      CheckState();
      ChangePrice();

      if (!height) height = 0;
      if (!width) width = 0;

      sizeCell.innerHTML = `${height}x${width}`;
      sizeCost.innerHTML = FormatPrice(sizePrice);
    });
  }

  if (heightField) {
    heightField.addEventListener('change', () => {
      height = heightField.value;
      calculateSize();
      CheckState();
      ChangePrice();

      if (!height) height = 0;
      if (!width) width = 0;

      sizeCell.innerHTML = `${height}x${width}`;
      sizeCost.innerHTML = FormatPrice(sizePrice);
    });
  }

  for (const fastenersValue of fasteners) {
    fastenersValue.addEventListener('change', () => {
      const fastener = fastenersValue.getAttribute('value');

      if (fastener == 'plastic') {
        fastenerPrice = prices.fastenersPlastic;
        typePrice = 0;
        ChangePrice();
        fastenersCell.innerHTML = 'Пластик';
        fastenersCost.innerHTML = FormatPrice(prices.fastenersPlastic);
        itemType.innerHTML = 'Классическая';
        itemCost.innerHTML = FormatPrice(0);
      }

      if (fastener == 'metal') {
        fastenerPrice = prices.fastenersMetal;
        typePrice = 0;
        ChangePrice();
        fastenersCell.innerHTML = 'Металл';
        fastenersCost.innerHTML = FormatPrice(prices.fastenersMetal);
        itemType.innerHTML = 'Классическая';
        itemCost.innerHTML = FormatPrice(0);
      }

      if (fastener == 'plunger') {
        fastenerPrice = prices.fastenersPlunger;
        typePrice = prices.plunger;
        ChangePrice();
        fastenersCell.innerHTML = 'Плунжер';
        fastenersCost.innerHTML = FormatPrice(prices.fastenersPlunger);
        itemType.innerHTML = 'Плунжерная';
        itemCost.innerHTML = FormatPrice(200);
      }
    });
  }

  for (const handlesValue of handles) {
    handlesValue.addEventListener('change', () => {
      const handle = handlesValue.getAttribute('value');

      if (handle == 'plastic') {
        handlePrice = prices.handlePlastic;
        ChangePrice();
        handleCell.innerHTML = 'Пластик';
        handleCost.innerHTML = FormatPrice(prices.handlePlastic);
      }

      if (handle == 'metal') {
        handlePrice = prices.handleMetal;
        ChangePrice();
        handleCell.innerHTML = 'Металл';
        handleCost.innerHTML = FormatPrice(prices.handleMetal);
      }
    });
  }

  for (const cornersValue of corners) {
    cornersValue.addEventListener('change', () => {
      const handle = cornersValue.getAttribute('value');

      if (handle == 'plastic') {
        cornerPrice = prices.cornerPlastic;
        ChangePrice();
        cornerCell.innerHTML = 'Пластик';
        cornerCost.innerHTML = FormatPrice(prices.cornerPlastic);
      }

      if (handle == 'metal') {
        cornerPrice = prices.cornerMetal;
        ChangePrice();
        cornerCell.innerHTML = 'Металл';
        cornerCost.innerHTML = FormatPrice(prices.cornerMetal);
      }
    });
  }

  for (const colorValue of colors) {
    colorValue.addEventListener('change', () => {
      color = colorValue.getAttribute('value');

      if (calculatorType == 'mosquito-nets') {
        if (color == 'brown') {
          colorPrice = prices.colorBrown;
          ChangePrice();
          colorCell.innerHTML = 'Коричневый';
          colorCost.innerHTML = FormatPrice(prices.colorBrown);
        }

        if (color == 'white') {
          colorPrice = prices.colorWhite;
          ChangePrice();
          colorCell.innerHTML = 'Белый';
          colorCost.innerHTML = FormatPrice(0);
        }
      } else if (calculatorType == 'other') {
        if (color == 'brown') {
          colorPrice = prices.colorBrown;
          ChangePrice();
        }

        if (color == 'white') {
          colorPrice = prices.colorWhite;
          ChangePrice();
        }
      }
    });
  }

  for (const compressorValue of compressors) {
    compressorValue.addEventListener('change', () => {
      const compressor = compressorValue.getAttribute('value');

      if (compressor == 'window') {
        compressorPrice = prices.compressorWindow;
        ChangePrice();
      }

      if (compressor == 'door') {
        compressorPrice = prices.compressorDoor;
        ChangePrice();
      }
    });
  }

  for (const adjustmentValue of adjustments) {
    adjustmentValue.addEventListener('change', () => {
      const adjustment = adjustmentValue.getAttribute('value');

      if (adjustment == 'window') {
        adjustmentPrice = prices.adjustmentWindow;
        ChangePrice();
      }

      if (adjustment == 'door') {
        adjustmentPrice = prices.adjustmentDoor;
        ChangePrice();
      }
    });
  }

  for (const limiterValue of limiters) {
    limiterValue.addEventListener('change', () => {
      const limiter = limiterValue.getAttribute('value');

      if (limiter == 'plastic') {
        limiterPrice = prices.limiterPlastic;
        ChangePrice();
      }

      if (limiter == 'metal') {
        limiterPrice = prices.limiterMetal;
        ChangePrice();
      }
    });
  }

  for (const lockValue of locks) {
    lockValue.addEventListener('change', () => {
      const lock = lockValue.getAttribute('value');

      if (lock == 'cable') {
        lockPrice = prices.lockCable;
        ChangePrice();
      }

      if (lock == 'bottom') {
        lockPrice = prices.lockBottom;
        ChangePrice();
      }

      if (lock == 'handle') {
        lockPrice = prices.lockHandle;
        ChangePrice();
      }
    });
  }

  function calculateSize() {
    const heightValue = parseInt(height);
    const widthValue = parseInt(width);

    if (calculatorType == 'curtains') {
      if (heightValue > 20 || widthValue > 30) {
        const heightMultiplier = Math.ceil((heightValue - 20) / 10);
        const widthMultiplier = Math.ceil((widthValue - 30) / 10);

        if (calculatorMethod == 'width') { sizePrice = prices[product] + widthMultiplier * curtains_prices[product]; } else if (calculatorMethod == 'height') { sizePrice = prices[product] + heightMultiplier * curtains_prices[product]; }
      } else {
        sizePrice = prices[product];
      }
    } else if (calculatorType == 'mosquito-nets') {
      if (heightValue * widthValue > 10000) {
        const multiplier = Math.ceil((heightValue * widthValue) / 1000 - 10);

        if (multiplier != 0) {
          sizePrice = Math.floor(
            prices[`new_${product}`] + multiplier * addPriceValue,
          );
        } else sizePrice = prices[`new_${product}`];
      } else if (heightValue * widthValue > 2500) { sizePrice = prices[`new_${product}`]; } else sizePrice = prices[product];
    }
  }

  function ChangePrice() {
    priceElement.innerHTML = FormatPrice(
      fastenerPrice
      + colorPrice
      + handlePrice
      + installPrice
      + deliveryPrice
      + sizePrice
      + typePrice
      + cornerPrice
      + compressorPrice
      + adjustmentPrice
      + limiterPrice
      + lockPrice,
    );
  }

  function CheckState() {
    if (widthField.value != '' && heightField.value != '') {
      accept.disabled = false;
    } else {
      accept.disabled = true;
    }
  }

  function FormatPrice(price) {
    return `${price}р`;
  }

  /* Данная функция создаёт кроссбраузерный объект XMLHTTP */
  function getXmlHttp() {
    let xmlhttp;
    try {
      xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
      try {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
      } catch (E) {
        xmlhttp = false;
      }
    }
    if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }

  const orderAcceptButton = document.getElementById('calculator-order-button');

  if (orderAcceptButton) {
    orderAcceptButton.addEventListener('click', () => {
      MicroModal.show('modal-callback');
    });
  }

  function SendValues() {
    const xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', 'mail-calculator.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку

    if (calculatorType == 'mosquito-nets') {
      xmlhttp.send(
        `&name=${
        encodeURIComponent(userName)
        }&phone=${
        encodeURIComponent(userPhone)
        }&productionType=${
        encodeURIComponent(calculatorType)
        }&type=${
        encodeURIComponent(productName)
        }&size=${
        encodeURIComponent(sizeCell.innerHTML)
        }&sizePrice=${
        encodeURIComponent(`${sizePrice}р`)
        }&color=${
        encodeURIComponent(colorCell.innerHTML)
        }&colorPrice=${
        encodeURIComponent(`${colorPrice}р`)
        }&fastener=${
        encodeURIComponent(fastenersCell.innerHTML)
        }&fastenerPrice=${
        encodeURIComponent(`${fastenerPrice}р`)
        }&handle=${
        encodeURIComponent(handleCell.innerHTML)
        }&handlePrice=${
        encodeURIComponent(`${handlePrice}р`)
        }&corner=${
        encodeURIComponent(cornerCell.innerHTML)
        }&cornerPrice=${
        encodeURIComponent(`${cornerPrice}р`)
        }&install=${
        encodeURIComponent(installCell.innerHTML)
        }&installPrice=${
        encodeURIComponent(`${installPrice}р`)
        }&delivery=${
        encodeURIComponent(deliveryCell.innerHTML)
        }&deliveryPrice=${
        encodeURIComponent(`${deliveryPrice}р`)
        }&cost=${
        encodeURIComponent(priceElement.innerHTML)}`,
      );
    }

    if (calculatorType == 'curtains') {
      xmlhttp.send(
        `&name=${
        encodeURIComponent(userName)
        }&phone=${
        encodeURIComponent(userPhone)
        }&productionType=${
        encodeURIComponent(calculatorType)
        }&type=${
        encodeURIComponent(productName)
        }&size=${
        encodeURIComponent(sizeCell.innerHTML)
        }&sizePrice=${
        encodeURIComponent(`${sizePrice}р`)
        }&install=${
        encodeURIComponent(installCell.innerHTML)
        }&installPrice=${
        encodeURIComponent(`${installPrice}р`)
        }&delivery=${
        encodeURIComponent(deliveryCell.innerHTML)
        }&deliveryPrice=${
        encodeURIComponent(`${deliveryPrice}р`)
        }&cost=${
        encodeURIComponent(priceElement.innerHTML)}`,
      );
    }
    xmlhttp.onreadystatechange = function () {
      // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) {
        // Ответ пришёл
        if (xmlhttp.status == 200) {
          // Сервер вернул код 200 (что хорошо)
          console.log(xmlhttp.responseText);
        }
      }
    };
  }
}