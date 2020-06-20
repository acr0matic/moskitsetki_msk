<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title><?php echo $title ?></title>

  <!-- Метатаги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="keywords" content="<?php echo $keywords ?>" />

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow,noodp" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Для Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#4285f4" />

  <!-- Верификация яндекс-вебмастер -->
  <meta name="yandex-verification" content="0a346b0658a6c095" />

  <!-- Для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <!-- Стили -->
  <!-- build:css -->
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header">
    <div class="container">
      <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/logo.svg" alt="" class="logo" />

      <nav class="nav">
        <ul class="nav__navbar">
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/" class="nav__link">Главная</a></li>
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog" class="nav__link">Каталог</a></li>
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/#popular" class="nav__link">Популярное</a></li>
          <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/#feedback" class="nav__link">Отзывы</a></li>
        </ul>
      </nav>

      <div class="callback">
        <a href="tel:89266304556" class="callback__phone">+7 926 630 45 56</a>
        <span class="callback__time">с 9 до 22</span>
        <button data-modal-callback class="button button-primary">Заказать звонок</button>
      </div>
      <!-- /.callback -->

      <div id="mobile-menu-button" class="hamburger hamburger--spin">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
        <!-- /.hamburger-box -->
      </div>
      <!-- /.hamburger -->
    </div>
    <!-- /.container -->
  </header>

  <div class="mobile-menu mobile-menu--slide" id="mobile-menu">
    <ul class="mobile-menu__navbar">
      <li class="mobile-menu__item"><a class="mobile-menu__link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/">Главная</a></li>
      <li class="mobile-menu__item"><a class="mobile-menu__link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog">Каталог</a></li>
      <li class="mobile-menu__item"><a class="mobile-menu__link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/#popular">Популярное</a></li>
      <li class="mobile-menu__item"><a class="mobile-menu__link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/#feedback">Отзывы</a></li>
    </ul>
    <div class="callback callback-mobile">
      <a href="tel:89266304556" class="callback__phone">+7 926 630 45 56</a>
      <span class="callback-mobile__time callback__time">с 9 до 22</span>
      <button data-modal-callback class="callback-mobile__button button button-primary">Заказать звонок</button>
    </div>
    <!-- /.callback -->
  </div>