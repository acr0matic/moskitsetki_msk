<?php

$title = "Изготовление москитных сеток и рулонных штор на заказ";
$description = "";
$keywords = "";

include 'partials/header.php' ?>

<!-- Основной контент -->
<main>
  <section id="hero">
    <div class="container">
      <div class="hero">
        <div class="hero__text hero-text">
          <h1 class="hero-text__title">Москитные сетки <br> и рулонные шторы <br> на заказ</h1>
          <h2 class="hero-text__subtitle">При заключении договора - замер бесплатный!</h2>
        </div>
        <!-- /.hero-text -->

        <div class="hero__action hero-action">
          <button class="hero-action__button button button-primary">Сделать заказ</button>
          <button data-anchor-button="#catalog" class="hero-action__button button button-secondary">Подробнее</button>
        </div>
        <!-- /.hero-action -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="catalog">
    <div class="container">
      <div class="section-title">
        <h2 class="primary-heading">Наши товары и услуги</h2>
        <p class="secondary-heading">Что мы можем вам предложить?</p>
      </div>
      <!-- /.section-title -->
      <div class="catalog-cards">
        <div class="catalog-card">
          <a class="item-wrapper" href="production.html">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/moskit-setka.jpg" alt="" class="catalog-image">
            <div class="catalog-description">
              <h3 class="catalog-heading">Москитные сетки и москитные двери</h3>
              <p class="catalog-text">Множество вариаций и любой размер</p>
            </div>
            <!-- /.catalog-description -->
          </a>
        </div>

        <div class="catalog-card">
          <a id="anchor-change" class="item-wrapper" href="production.html">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/curtains.jpg" alt="" class="catalog-image">
            <div class="catalog-description">
              <h3 class="catalog-heading">Рулонные шторы и жалюзи</h3>
              <p class="catalog-text">Тысячи тканей и цветов на выбор</p>
            </div>
            <!-- /.catalog-description -->
          </a>
        </div>
        <!-- /.catalog-card -->
        <div class="catalog-card">
          <a class="item-wrapper" href="tinting.html">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting.jpg" alt="" class="catalog-image">
            <div class="catalog-description">
              <h3 class="catalog-heading">Тонировка окон</h3>
              <p class="catalog-text">Затемнение ваших окон</p>
            </div>
            <!-- /.catalog-description -->
          </a>
        </div>
        <!-- /.catalog-card -->
        <div class="catalog-card">
          <a class="item-wrapper" href="adjustment.html">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment.jpg" alt="" class="catalog-image">
            <div class="catalog-description">
              <h3 class="catalog-heading">Регулировка окон</h3>
              <p class="catalog-text">Отрегулируем любые окна</p>
            </div>
            <!-- /.catalog-description -->
          </a>
        </div>
        <!-- /.catalog-card -->
        <div class="catalog-card">
          <a class="item-wrapper" href="lock.html">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/lock.jpg" alt="" class="catalog-image">
            <div class="catalog-description">
              <h3 class="catalog-heading">Замки от детей</h3>
              <p class="catalog-text">Защитим ваших детей</p>
            </div>
            <!-- /.catalog-description -->
          </a>
        </div>
        <!-- /.catalog-card -->
        <div class="catalog-card">
          <a class="item-wrapper" href="compressor.html">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/compressor.png" alt="" class="catalog-image">
            <div class="catalog-description">
              <h3 class="catalog-heading">Замена уплотнителя</h3>
              <p class="catalog-text">Качественно заменим</p>
            </div>
            <!-- /.catalog-description -->
          </a>
        </div>
        <!-- /.catalog-card -->

      </div>
      <!-- /.catalog-cards -->
    </div>
    <!-- /.container -->
  </section>

  <section id="popular-kits">
    <div class="container">
      <div class="section-title">
        <h2 class="primary-heading">Самые покупаемые</h2>
        <p class="secondary-heading">Популярные виды сеток и штор</p>
      </div>
      <!-- /.section-title -->
      <div class="slider">
        <div class="container">
          <div class="swiper-container swiper-kits">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide kit">
                <img class="kit-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust.jpg" alt="">
                <div class="kit-wrapper">
                  <div class="kit-content">
                    <h3 class="kit-title">Москитная сетка "Антипыль"</h3>
                    <span class="kit-subtitle">Стоимость от 1199р</span>
                    <ul class="kit-items">
                      <li class="kit-item">Задерживают больше пылевых частиц</li>
                      <li class="kit-item">Почти прозрачна</li>
                      <li class="kit-item">Защищает от случайного мусора</li>
                      <li class="kit-item">Два цвета на выбор</li>
                      <li class="kit-item">Оптимальное цена\качество</li>
                    </ul>
                  </div>
                  <!-- /.kit-content -->
                  <button onclick="window.open('dust.html', '_self')" class="button button-kit button-center">Подробнее</button>
                </div>
                <!-- /.kit-wrapper -->
              </div>
              <!-- /.kit -->

              <div class="swiper-slide kit">
                <img class="kit-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/zebra.jpg" alt="">
                <div class="kit-wrapper">
                  <div class="kit-content">
                    <h3 class="kit-title">Рулонная штора "Зебра" <br> (в коробе)</h3>
                    <span class="kit-subtitle">Стоимость от 1799р</span>
                    <ul class="kit-items">
                      <li class="kit-item">Для регулировки степени проникновения света</li>
                      <li class="kit-item">Гарантия 1 год</li>
                      <li class="kit-item">Множество цветов на выбор</li>
                      <li class="kit-item">Оптимальное цена\качество</li>
                    </ul>
                  </div>
                  <!-- /.kit-content -->
                  <button onclick="window.open('zebra-box.html', '_self')" class="button button-kit button-center">Подробнее</button>
                </div>
                <!-- /.kit-wrapper -->
              </div>
              <!-- /.kit -->

              <div class="swiper-slide kit">
                <img class="kit-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/mosquito.jpg" alt="">
                <div class="kit-wrapper">
                  <div class="kit-content">
                    <h3 class="kit-title">Москитная сетка "Обычная"</h3>
                    <span class="kit-subtitle">Стоимость от 499р</span>
                    <ul class="kit-items">
                      <li class="kit-item">Защищает от насекомых</li>
                      <li class="kit-item">Унифицирована для всех рамных систем</li>
                      <li class="kit-item">Два цвета на выбор</li>
                      <li class="kit-item">Оптимальное цена\качество</li>
                    </ul>
                  </div>
                  <!-- /.kit-content -->
                  <button onclick="window.open('mosquito.html', '_self')" class="button button-kit button-center">Подробнее</button>
                </div>
                <!-- /.kit-wrapper -->
              </div>
              <!-- /.kit -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
        <div class="swiper-controls">
          <div class="swiper-pagination swiper-kits-pagination"></div>
          <div class="swiper-button-prev swiper-kits-button-prev"></div>
          <div class="swiper-button-next swiper-kits-button-next"></div>
        </div>
        <!-- /.swiper-controls -->

      </div>
      <!-- /.slider -->
    </div>
    <!-- /.container -->
  </section>

  <section id="callback">
    <div class="container">
      <div class="section-title">
        <h2 class="primary-heading">У вас возникли вопросы?</h2>
        <p class="secondary-heading">Оставьте заявку, и мы вам перезвоним!</p>
      </div>
      <form data-form-type="no-modal" id="callback-index-form" class="form form-callback" action="mail.php" method="POST" enctype="multipart/form-data">
        <div class="form-callback-wrapper">
          <input required class="input input-text" type="text" name="user_name" placeholder="Ваше имя">
          <input required class="input input-text" type="tel" name="user_phone" placeholder="Номер телефона">
          <button id="callback-index-accept" type="button" class="button button-form">Оставить заявку</button>
        </div>
        <!-- /.callback-form-wrapper -->
        <p data-error-label class="form-error-label"></p>
      </form>
    </div>
    <!-- /.container -->
  </section>

  <section id="partnership">
    <div class="container">
      <div class="section-title">
        <h2 class="primary-heading">Наши партнеры</h2>
        <p class="secondary-heading">Мы сотрудничаем с известными брендами</p>
      </div>
      <div class="partners">
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand1.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand2.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand3.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand4.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand5.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand6.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand7.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
        <div class="partner-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/brands/brand8.png" alt="" class="partner-logo">
        </div>
        <!-- /.partner-card -->
      </div>
    </div>
    <!-- /.container -->
  </section>

  <section id="map">
    <div class="container">
      <div class="section-title">
        <h2 class="primary-heading">Работаем по ЮЗАО Москвы и Московской области</h2>
      </div>
    </div>
    <!-- /.container -->
    <img class="map-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/map.jpg" alt="">
  </section>

  <section id="feedback">
    <div class="slider">
      <div class="container">
        <div class="swiper-container swiper-feedback">
          <div class="section-title">
            <h2 class="primary-heading">Отзывы наших клиентов</h2>
          </div>
          <!-- swiper-wrapper -->

          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide feedback-card">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/avatar.jpg" alt="" class="avatar">
              <div class="feedback-text">
                <p class="feedback-description">Ставили буквально месяц назад и сказать, что я довльна - ничего не
                  сказать! Ни одной летающей души в квартире, а также стало меньше пыли. Рекомендую!</p>
                <div class="feedback-info">
                  <span class="name">Анна Н.</span>
                  <a href="" class="social-link"><img class="social-icon" src="img/icons/vk.svg" alt=""></a>
                  <time>19.04.2019</time>
                </div>
                <!-- /.feedback-info -->
              </div>
              <!-- /.feedback-text -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide feedback-card">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/avatar.jpg" alt="" class="avatar">
              <div class="feedback-text">
                <p class="feedback-description">Благодарю Вас за установку сеточки на балконе! Душа моя спокойна по
                  поводу моего котика, надеюсь прослужит долго! Спасибо, вам, Михаил, и вашему коллеге за
                  оперативность!</p>
                <div class="feedback-info">
                  <span class="name">Алена Б.</span>
                  <a href="https://www.instagram.com/belozoralena/" target="_blank" class="social-link"><img class="social-icon" src="img/icons/instagram.svg" alt=""></a>
                  <time>05.04.2020</time>
                </div>
                <!-- /.feedback-info -->
              </div>
              <!-- /.feedback-text -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide feedback-card">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/avatar.jpg" alt="" class="avatar">
              <div class="feedback-text">
                <p class="feedback-description">Добрый день! Заказывали у вас сетки в Видное. Спасибо большое, все
                  быстро и качественно. Теперь живем с открытыми окнами - это такой кайф :)</p>
                <div class="feedback-info">
                  <span class="name">Александра И.</span>
                  <a href="https://www.instagram.com/izuminka.msk/" class="social-link"><img class="social-icon" src="img/icons/instagram.svg" alt=""></a>
                  <time>21.06.2019</time>
                </div>
                <!-- /.feedback-info -->
              </div>
              <!-- /.feedback-text -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- swiper-wrapper -->

          <div class="swiper-controls">
            <div class="swiper-pagination swiper-feedback-pagination"></div>
            <div class="swiper-button-prev swiper-feedback-button-prev"></div>
            <div class="swiper-button-next swiper-feedback-button-next"></div>
          </div>
          <!-- /.swiper-controls -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container -->

      <button onclick="window.open('https://vk.com/moskitsetki_msk?z=album-179924034_263108745',  '_blank')" class="button button-center">Больше отзывов</button>
    </div>
    <!-- /.slider -->
  </section>
</main>

<?php include 'partials/footer.php' ?>