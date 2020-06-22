<?php
// Мета-теги
$title = "Тонировка окон";
$description = "";
$keywords = "";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php' ?>

<!-- Основной контент -->
<main>
  <div class="container">
    <div class="section-title">
      <h1 class="sub-heading product-heading">Тонировка окон</h1>
    </div>
    <!-- /.section-title -->
    <img class="product-page-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/promo.jpg" alt="">
  </div>
  <!-- /.container -->

  <section id="product-description">
    <div class="container">
      <div class="section-title">
        <h2 class="sub-heading">Описание</h2>
      </div>
      <!-- /.section-title -->
      <p class="product-description">Владельцы зданий разного типа часто сталкиваются со слишком интенсивным проникновением солнечных лучей сквозь витрины, прозрачные элементы фасада строения или оконные полотна. Избыток света делает обстановку некомфортной для пребывания, ведь помещения
        перегреваются, на мониторах появляются блики, нарушается план освещения. Тонирование стекол дома либо прочих объектов позволяет решить эту проблему, защитив внутреннее пространство от УФ-лучей.
      </p>
    </div>
    <!-- /.container -->
  </section>

  <section id="product-gallery">
    <div class="container">
      <div class="section-title">
        <h2 class="sub-heading">Галерея</h2>
      </div>
      <!-- /.section-title -->
      <div id="lightgallery" class="gallery">
        <a class="gallery-item gallery-item-large" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/1.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/1.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item gallery-item-large" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/2.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/2.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/3.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/3.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/4.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/4.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/5.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting/5.jpg" alt="">
        </a>
        <!-- /.gallery-item -->
      </div>
      <!-- /.gallery -->
    </div>
    <!-- /.container -->
  </section>

  <section id="calculation" data-product="tinting" data-calculator-type="other" data-calculator-method="height">
    <div class="container">
      <!-- /.section-title -->
      <form action="" class="form form-order">
        <div class="section-title">
          <h2 class="primary-heading">Закажите услугу</h2>
        </div>
        <h2 class="secondary-heading">Контактные данные</h2>

        <div class="input-wrapper">
          <input required class="input input-text input-shadow" type="text" name="" placeholder="Ваше имя">
          <input required class="input input-text input-shadow" type="text" name="" placeholder="Номер телефона">
        </div>
        <!-- /.input-wrapper -->

        <div class="additional-info">
          <h2 class="secondary-heading">Дополнительная информация</h2>
          <p class="product-description">Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Страну несколько путь заголовок использовало!</p>
        </div>
        <!-- /.additional-info -->

        <div class="order-wrapper">
          <div class="calculator-order-text">
            <h3 class="calculator-title">Итого:</h3>
            <span class="calculator-price">от </span>
            <span id="calculator-price" class="calculator-price">0р</span>
          </div>
          <!-- /.calculator-order-text -->
          <button class="button button-primary">Заказать</button>
        </div>
        <!-- /.wrapper -->
      </form>
    </div>
    <!-- /.container -->
  </section>

  <section id="other-products">
    <div class="container">
      <div class="section-title">
        <h2 class="sub-heading">Другие услуги</h2>
      </div>
      <!-- /.section-title -->

      <div class="swiper-container block-other">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-list-other">
              <div class="product-item">
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/limiter.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/limiter.jpg" alt=""></a>
                <p class="product-price">от <strong>299р</strong></p>
                <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/limiter.php">Ограничители (гребенки)</a></h4>
              </div>
              <!-- /.product-item -->

              <div class="product-item">
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/adjustment.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment.jpg" alt=""></a>
                <p class="product-price">от <strong>499р</strong></p>
                <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/adjustment.php">Регулировка окон</a></h4>
              </div>
              <!-- /.product-item -->

              <div class="product-item">
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/lock.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/lock.jpg" alt=""></a>
                <p class="product-price">от <strong>799р</strong></p>
                <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/lock.php">Замки от детей</a></h4>
              </div>
              <!-- /.product-item -->

              <div class="product-item">
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/compressor.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/compressor.png" alt=""></a>
                <p class="product-price">от <strong>1999р</strong></p>
                <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/compressor.php">Замена уплотнителя</a></h4>
              </div>
              <!-- /.product-item -->
            </div>
            <!-- /.product-list-other -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- /.swiper-wrapper -->
      </div>
      <!-- /.product-list -->
    </div>
    <!-- /.container -->
  </section>
</main>

<!-- Подвал -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php' ?>