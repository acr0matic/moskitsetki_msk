<?php

require_once 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


// Переменные
$name = $_POST['name'];
$phone = $_POST['phone'];
$productionType = $_POST["productionType"];
$type = $_POST["type"];
$size = $_POST["size"];
$sizePrice = $_POST["sizePrice"];
$color = $_POST["color"];
$colorPrice = $_POST["colorPrice"];
$fastener = $_POST["fastener"];
$fastenerPrice = $_POST["fastenerPrice"];
$handle = $_POST["handle"];
$handlePrice = $_POST["handlePrice"];
$corner = $_POST["corner"];
$cornerPrice = $_POST["cornerPrice"];
$install = $_POST["install"];
$installPrice = $_POST["installPrice"];
$delivery = $_POST["delivery"];
$deliveryPrice = $_POST["deliveryPrice"];
$cost = $_POST["cost"];;

$result;


function init()
{
    TranslateProductionType();
}

function TranslateProductionType()
{
    global $productionType;

    if ($productionType == "mosquito-nets") {
        $productionType = "Москитная сетка";
    }

    if ($productionType == "curtains") {
        $productionType = "Рулонная штора";
    }

    if ($productionType == "other") {
        $productionType = "Другая услуга";
    }

    echo "\nПеревод на русский: ", $productionType;
}

function MakeResult()
{
    global $result;

    global $name;
    global $phone;
    global $productionType;
    global $type;
	  global $size;
	  global $sizePrice;
    global $color;
    global $colorPrice;
    global $fastener;
    global $fastenerPrice;
    global $handle;
    global $handlePrice;
    global $corner;
    global $cornerPrice;
    global $install;
    global $installPrice;
    global $delivery;
    global $deliveryPrice;
    global $cost;

    $result = "Имя: " . $name .
        "<br> Номер телефона: " . $phone .
        "<br> Тип продукции: " . $productionType .
        "<br> Заказ на: <b>" . $type . "</b><hr>";

    if ($productionType == "Москитная сетка") {
        $result = $result .
            "<br> Размеры: <b>"  . $size . "</b> - цена: <b>" . $sizePrice .
            "</b> <br> Цвет сетки: <b>" . $color . "</b> - цена: <b>" . $colorPrice .
            "</b> <br> Крепление: <b>" . $fastener . "</b> - цена: <b>" . $fastenerPrice .
            "</b> <br> Ручки: <b>" . $handle . "</b> - цена: <b>" . $handlePrice .
            "</b> <br> Углы: <b>" . $corner . "</b> - цена: <b>" . $cornerPrice .
            "</b> <br> Установка: <b>" . $install . "</b> - цена: <b>" . $installPrice .
            "</b> <br> Доставка: <b>" . $delivery . "</b> - цена: <b>" . $deliveryPrice . "</b>";
    }

    else if ($productionType == "Рулонная штора") {
        $result = $result .
            "<br> Размеры: <b>" . $size . "</b> - цена: <b>" . $sizePrice .
            "</b> <br> Установка: <b>" . $install . "</b> - цена: <b>" . $installPrice .
            "</b> <br> Доставка: <b>" . $delivery . "</b> - цена: <b>" . $deliveryPrice . "</b>";
    }

    $result = $result . "<br> <br> Итого: <b>" . $cost . "</b>";
}

init();
MakeResult();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'best-for-home-24@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'appleJack@22'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('best-for-home-24@yandex.ru'); // от кого будет уходить письмо?
$mail->addAddress('derkacnikolaj12@gmail.com'); // Кому будет уходить письмо
$mail->addAttachment($_FILES['user_file']['tmp_name'], $_FILES['user_file']['name']); // Optional name
$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'На сайте был совершен заказ';
$mail->Body = $result;
$mail->AltBody = '';

if (!$mail->send()) {
    echo 'Error';
}
