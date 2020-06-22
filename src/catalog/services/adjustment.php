<?php
// Мета-теги
$title = 'Регулировка окон и дверей';
$description = "";
$keywords = "";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php' ?>

<!-- Основной контент -->
<main>
  <div class="container">
    <div class="section-title">
      <h1 class="sub-heading product-heading">Регулировка окон и дверей</h1>
    </div>
    <!-- /.section-title -->
    <img class="product-page-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/promo.jpg" alt="">
  </div>
  <!-- /.container -->

  <section id="product-description">
    <div class="container">
      <div class="section-title">
        <h2 class="sub-heading">Описание</h2>
      </div>
      <!-- /.section-title -->
      <p class="product-description">Несмотря на то, что все современные окна, изготовленные из ПВХ, дерева или алюминия, выполняются с большим запасом прочности, а фурнитура на них отличается повышенной надежностью, периодическая настройка и обслуживание конструкций все же необходима.
        Правильная регулировка пластиковых окон и своевременный уход – это основа долгой службы, исключающей внезапные дорогие ремонтные работы.
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
        <a class="gallery-item gallery-item-large" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/1.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/1.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item gallery-item-large" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/2.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/2.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/3.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/3.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/4.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/4.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/5.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment/5.jpg" alt="">
        </a>
        <!-- /.gallery-item -->
      </div>
      <!-- /.gallery -->
    </div>
    <!-- /.container -->
  </section>

  <section id="calculation" data-product="adjustment" data-calculator-type="other">
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
        <h2 class="secondary-heading">Регулировка</h2>
        <div class="calculator-compressor-type">
          <div class="radio-box radio-box-adjustment">
            <input class="radio radio-input-adjustment" type="radio" id="adjustment-window" name="adjustment" value="window" checked>
            <label class="calculator-heading radio-adjustment" for="adjustment-window" class="radio-wrapper">окна</label>
          </div>
          <!-- /.radio-box -->
          <div class="radio-box radio-box-adjustment">
            <input class="radio radio-input-adjustment" type="radio" id="adjustment-door" name="adjustment" value="door">
            <label class="calculator-heading radio-adjustment" for="adjustment-door" class="radio-wrapper">двери</label>
          </div>
          <!-- /.radio-box -->
        </div>
        <!-- /.calculator-fasteners -->

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
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/tinting.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting.jpg" alt=""></a>
                <p class="product-price">от <strong>999р</strong></p>
                <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/tinting.php">Тонировка окон</a></h4>
              </div>
              <!-- /.product-item -->

              <div class="product-item">
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/limiter.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/limiter.jpg" alt=""></a>
                <p class="product-price">от <strong>299р</strong></p>
                <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/limiter.php">Ограничители (гребенки)</a></h4>
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