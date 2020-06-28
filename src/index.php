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
          <h2 class="hero-text__subtitle">При заключении договора - <mark>замер бесплатный!</mark></h2>
        </div>
        <!-- /.hero-text -->

        <div class="hero__action hero-action">
          <button id="make-order-button" class="hero-action__button button button-primary">Сделать заказ</button>
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

      <div class="catalog">
        <div class="catalog__card catalog-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/moskit-setka.jpg" alt="" class="catalog-card__image">
          <div class="catalog-card__description">
            <h3 class="catalog-card__heading">Москитные сетки и москитные двери</h3>
            <p class="catalog-card__text">Множество вариаций и любой размер</p>
          </div>
          <!-- /.catalog-card__description -->
          <a class="stretched-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog"></a>
        </div>
        <!-- /.catalog-card -->

        <div class="catalog__card catalog-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/curtains.jpg" alt="" class="catalog-card__image">
          <div class="catalog-card__description">
            <h3 class="catalog-card__heading">Рулонные шторы и жалюзи</h3>
            <p class="catalog-card__text">Тысячи тканей и цветов на выбор</p>
          </div>
          <!-- /.catalog-card__description -->
          <a class="stretched-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog"></a>
        </div>
        <!-- /.catalog-card -->

        <div class="catalog__card catalog-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting.jpg" alt="" class="catalog-card__image">
          <div class="catalog-card__description">
            <h3 class="catalog-card__heading">Тонировка окон</h3>
            <p class="catalog-card__text">Затемнение ваших окон</p>
          </div>
          <!-- /.catalog-card__description -->
          <a class="stretched-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/tinting.php"></a>
        </div>
        <!-- /.catalog-card -->

        <div class="catalog__card catalog-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment.jpg" alt="" class="catalog-card__image">
          <div class="catalog-card__description">
            <h3 class="catalog-card__heading">Регулировка окон</h3>
            <p class="catalog-card__text">Отрегулируем любые окна</p>
          </div>
          <!-- /.catalog-card__description -->
          <a class="stretched-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/adjustment.php"></a>
        </div>
        <!-- /.catalog-card -->

        <div class="catalog__card catalog-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/lock.jpg" alt="" class="catalog-card__image">
          <div class="catalog-card__description">
            <h3 class="catalog-card__heading">Замки от детей</h3>
            <p class="catalog-card__text">Защитим ваших детей</p>
          </div>
          <!-- /.catalog-card__description -->
          <a class="stretched-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/lock.php"></a>
        </div>
        <!-- /.catalog-card -->

        <div class="catalog__card catalog-card">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/compressor.png" alt="" class="catalog-card__image">
          <div class="catalog-card__description">
            <h3 class="catalog-card__heading">Замена уплотнителя</h3>
            <p class="catalog-card__text">Качественная замена</p>
          </div>
          <!-- /.catalog-card__description -->
          <a class="stretched-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/compressor.php"></a>
        </div>
        <!-- /.catalog-card -->
      </div>
      <!-- /.catalog -->
    </div>
    <!-- /.container -->
  </section>

  <section id="popular">
    <div class="container">
      <div class="popular">
        <h2 class="popular__title">Популярные москитные сетки</h2>
        <div class="popular__wrapper">
          <div class="popular__item popular-item">
            <img class="popular-item__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/mosquito.jpg" alt="">
            <div class="popular-item__wrapper">
              <div class="popular-item__content">
                <h3 class="popular-item__title">Москитная сетка "Обычная"</h3>
                <span class="popular-item__subtitle">Стоимость от 499р</span>
                <p class="popular-item__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил бросил ты подзаголовок напоивший, сбить реторический семь пунктуация. Океана!</p>
              </div>
              <!-- /.popular-item__content -->
              <button onclick="window.open('<?php $_SERVER['DOCUMENT_ROOT'] ?>catalog/nets/mosquito.php', '_self')" class="popular-item__button button button-primary button-center">Подробнее</button>
            </div>
            <!-- /.popular-item__wrapper -->
          </div>
          <!-- /.popular__item -->

          <div class="popular__item popular-item">
            <img class="popular-item__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust.jpg" alt="">
            <div class="popular-item__wrapper">
              <div class="popular-item__content">
                <h3 class="popular-item__title">Москитная сетка "Антипыль"</h3>
                <span class="popular-item__subtitle">Стоимость от 1199р</span>
                <p class="popular-item__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил бросил ты подзаголовок напоивший, сбить реторический семь пунктуация. Океана!</p>
              </div>
              <!-- /.popular-item__content -->
              <button onclick="window.open('<?php $_SERVER['DOCUMENT_ROOT'] ?>catalog/nets/dust.php', '_self')" class="popular-item__button button button-primary button-center">Подробнее</button>
            </div>
            <!-- /.popular-item__wrapper -->
          </div>
          <!-- /.popular__item -->

          <div class="popular__item popular-item">
            <img class="popular-item__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/cat.jpg" alt="">
            <div class="popular-item__wrapper">
              <div class="popular-item__content">
                <h3 class="popular-item__title">Москитная сетка "Антикошка"</h3>
                <span class="popular-item__subtitle">Стоимость от 1299р</span>
                <p class="popular-item__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил бросил ты подзаголовок напоивший, сбить реторический семь пунктуация. Океана!</p>
              </div>
              <!-- /.popular-item__content -->
              <button onclick="window.open('<?php $_SERVER['DOCUMENT_ROOT'] ?>catalog/nets/zebra-box.php', '_self')" class="popular-item__button button button-primary button-center">Подробнее</button>
            </div>
            <!-- /.popular-item__wrapper -->
          </div>
          <!-- /.popular__item -->
        </div>
        <!-- /.popular__wrapper -->
      </div>
      <!-- /.popular -->

      <div class="popular">
        <h2 class="popular__title">Популярные рулонные шторы</h2>
        <div class="popular__wrapper">
          <div class="popular__item popular-item">
            <img class="popular-item__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds.jpg" alt="">
            <div class="popular-item__wrapper">
              <div class="popular-item__content">
                <h3 class="popular-item__title">Рулонные шторы "Обычные" (свободновисящие)</h3>
                <span class="popular-item__subtitle">Стоимость от 1199р</span>
                <p class="popular-item__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил бросил ты подзаголовок напоивший, сбить реторический семь пунктуация. Океана!</p>

              </div>
              <!-- /.popular-item__content -->
              <button onclick="window.open('<?php $_SERVER['DOCUMENT_ROOT'] ?>catalog/curtains/roller.php', '_self')" class="popular-item__button button button-primary button-center">Подробнее</button>
            </div>
            <!-- /.popular-item__wrapper -->
          </div>
          <!-- /.popular__item -->

          <div class="popular__item popular-item">
            <img class="popular-item__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/jalousie-horizontal.jpg" alt="">
            <div class="popular-item__wrapper">
              <div class="popular-item__content">
                <h3 class="popular-item__title">Жалюзи "Обычные" (горизонтальные)</h3>
                <span class="popular-item__subtitle">Стоимость от 1399р</span>
                <p class="popular-item__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил бросил ты подзаголовок напоивший, сбить реторический семь пунктуация. Океана!</p>

              </div>
              <!-- /.popular-item__content -->
              <button onclick="window.open('<?php $_SERVER['DOCUMENT_ROOT'] ?>catalog/curtains/jalousie-horizontal.php', '_self')" class="popular-item__button button button-primary button-center">Подробнее</button>
            </div>
            <!-- /.popular-item__wrapper -->
          </div>
          <!-- /.popular__item -->

          <div class="popular__item popular-item">
            <img class="popular-item__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/zebra.jpg" alt="">
            <div class="popular-item__wrapper">
              <div class="popular-item__content">
                <h3 class="popular-item__title">Рулонная штора "Зебра" <br> (в коробе)</h3>
                <span class="popular-item__subtitle">Стоимость от 1799р</span>
                <p class="popular-item__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил бросил ты подзаголовок напоивший, сбить реторический семь пунктуация. Океана!</p>

              </div>
              <!-- /.popular-item__content -->
              <button onclick="window.open('<?php $_SERVER['DOCUMENT_ROOT'] ?>catalog/curtains/zebra-box.php', '_self')" class="popular-item__button button button-primary button-center">Подробнее</button>
            </div>
            <!-- /.popular-item__wrapper -->
          </div>
          <!-- /.popular__item -->
        </div>
        <!-- /.popular__wrapper -->
      </div>
      <!-- /.popular -->
    </div>
    <!-- /.container -->
  </section>

  <section id="map">
    <div class="container">
      <div class="section-title">
        <h2 class="primary-heading">География нашей работы</h2>
        <p class="secondary-heading">Работаем по ЮЗАО Москвы и Московской области</p>
      </div>
    </div>
    <!-- /.container -->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeb43c71a35f82b72f4fb211ee6d0101918a651b0d54c8fcffdf3354cc4e95772&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
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

      <button onclick="window.open('https://vk.com/moskitsetki_msk?z=album-179924034_263108745',  '_blank')" class="button button-primary button-center">Больше отзывов</button>
    </div>
    <!-- /.slider -->
  </section>
</main>

<?php include 'partials/footer.php' ?>