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
          <button data-micromodal-trigger="modal-callback" class="hero-action__button button button-primary">Сделать заказ</button>
          <button data-anchor-button="#catalog" class="hero-action__button button button-secondary">Подробнее</button>
        </div>
        <!-- /.hero-action -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="production">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Какие услуги мы оказываем?</h2>
        <span class="section-title__info">Работаем для вас больше 10 лет</span>
      </div>
      <!-- /.section-title -->

      <p class="paragraph paragraph--hidden">Наша компания изготавливает москитные сетки и рулонные шторы уже больше 10 лет. Каждая сетка или штора делается строго индивидуально под Ваши окна. В нашем каталоге тысячи цветов и вариаций рисунков для штор, а также, все возможные виды антимоскитного полотна для любой формы москитной сетки.</p>

      <div class="production">
        <div class="production__wrapper">
          <div class="column production-item">
            <div class="production-item__picture">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Москитные сетки и москитные двери</h3>
                <span class="production-item__price">от 499р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Москитная сетка – это разновидность сетчатой завесы, которая по периметру облегает кровать или спальную зону, чтобы обеспечить барьер для защиты от укусов комаров, мух и других вредных насекомых и, следовательно, от болезней, которые они могут нести.</p>
            </div>
            <!-- /.production__description -->
          </div>
          <!-- /.production-item -->

          <div class="column production-item">
            <div class="production-item__picture">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/curtains.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Рулонные шторы и жалюзи</h3>
                <span class="production-item__price">от 699р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Рулонные шторы или экраны – это один из самых практичных и простых способов оформления окна. Как понятно из названия, рулонные шторы представляют собой гладкое полотно ткани, которое сворачивается в рулон с помощью специального механизма.</p>
            </div>
            <!-- /.production__description -->
          </div>
          <!-- /.production-item -->
        </div>
        <!-- /.production__wrapper -->

        <h2 class="production__title">Другие услуги</h2>
        <p class="paragraph production__description">Наша компания также оказывает спектр различных услуг связанных с обслуживанием или ремонтом окон, а также установкой аксессуаров на балконы и окна. Цены на все услуги индивидуальны и обговариваются либо по телефону либо после выезда специалиста.</p>

        <div class="production__wrapper">
          <div class="production-item production-item--small">
            <div class="production-item__picture production-item__picture--small">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/services/limiter.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production-item__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Ограничители на окна</h3>
                <span class="production-item__price">от 299р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Ограничитель регулирует открывание створки в поворотно-откидных положениях.</p>
            </div>
            <!-- /.production-item__description -->
          </div>
          <!-- /.production-item -->

          <div class="production-item production-item--small">
            <div class="production-item__picture production-item__picture--small">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/services/adjustment.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production-item__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Регулировка окон</h3>
                <span class="production-item__price">от 499р</span>
              </div>
              <!-- /.production-item__heading -->
              <p class="production-item__text">Легкость закрытия, устранение поддувания и исправление заедающих створок.</p>
            </div>
            <!-- /.production-item__description -->
          </div>
          <!-- /.production-item -->

          <div class="production-item production-item--small">
            <div class="production-item__picture production-item__picture--small">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/services/lock.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production-item__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Замки от детей</h3>
                <span class="production-item__price">от 799р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Малыш не сможет распахнуть створку без ключа, что исключает его выпадение из окна.</p>
            </div>
            <!-- /.production-item__description -->
          </div>
          <!-- /.production-item -->

          <div class="production-item production-item--small">
            <div class="production-item__picture production-item__picture--small">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/services/tinting.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production-item__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Тонировка окон</h3>
                <span class="production-item__price">от 999р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Тонировка препятствует попаданию в квартиру яркого света, особенно, если окна выходят на солнечную сторону.</p>
            </div>
            <!-- /.production-item__description -->
          </div>
          <!-- /.production-item -->

          <div class="production-item production-item--small">
            <div class="production-item__picture production-item__picture--small">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/services/compressor.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production-item__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Замена уплотнителя</h3>
                <span class="production-item__price">от 1999р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Решите проблему конденсата или плесени на подоконниках или откосах, шума с улицы или проникновение пыли.</p>
            </div>
            <!-- /.production-item__description -->
          </div>
          <!-- /.production-item -->

          <div class="production-item production-item--small">
            <div class="production-item__picture production-item__picture--small">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/services/handles.jpg" alt="" class="production-item__image">
            </div>
            <!-- /.production-item__picture -->

            <div class="production-item__description">
              <div class="production-item__heading">
                <h3 class="production-item__title">Замена ручек</h3>
                <span class="production-item__price">от 699р</span>
              </div>
              <!-- /.production-item__heading -->

              <p class="production-item__text">Замена старых или сломанных оконных и дверных ручек на новые. Цветные, из дерева или металлические.</p>
            </div>
            <!-- /.production-item__description -->
          </div>
          <!-- /.production-item -->
        </div>
        <!-- /.production__wrapper -->
      </div>
      <!-- /.production -->
    </div>
    <!-- /.container -->
  </section>

  <section id="map">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">География нашей работы</h2>
      </div>
      <!-- /.section-title -->

      <div class="row">
        <div class="column">
          <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeb43c71a35f82b72f4fb211ee6d0101918a651b0d54c8fcffdf3354cc4e95772&amp;width=100%25&amp;height=475&amp;lang=ru_RU&amp;scroll=false"></script>
          </div>
          <!-- /.map -->
        </div>
        <!-- /.column -->

        <div class="column">
          <form id="blockCallback" class="form form-primary" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/php/mail.php" method="POST" enctype="multipart/form-data">
            <h3 class="form__title">Не увидели свой район или город?</h3>
            <p class="form__description">Оставьте заявку, и наш менеджер перезвонит вам в ближайшее время и уточнит где конкретно мы работаем!</p>
            <input data-form="name" class="form__input input input-text" type="text" name="user_name" placeholder="Ваше имя">
            <input data-form="phone" class="form__input input input-text" type="tel" name="user_phone" placeholder="Ваш телефон">
            <div class="form__policy">
              <div class="checkbox">
                <input data-form="policy" class="checkbox__input" type="checkbox" id="policy" />
                <label class="checkbox__content policy" for="policy">Я согласен на обработку моих персональных данных согласно условиям <a class="policy__link" href="politics.html" target="_blank">политики конфиденциальности</a></label>
              </div>
              <!-- /.checkbox -->
            </div>
            <!-- /.form__policy -->
            <button type="button" disabled id="modal-callback-accept" class="form__button button button-primary">Заказать</button>
            <p data-form="error" class="form__error"></p>
          </form>

        </div>
        <!-- /.column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

  <section id="portfolio">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Наши работы</h2>
      </div>
      <!-- /.section-title -->

      <p class="paragraph">За нашей спиной большое количество выполненных работ и довольных клиентов. Мы изготавливаем рулонные шторы, москитные сетки и оказываем услуги по ремонту и обслуживанию окон. Предлагаем Вам ознакомиться с фотографиями наших лучших работ.</p>

      <div class="swiper-container slider-portfolio">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="portfolio">
              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/1.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/1.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/2.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/2.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/3.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/3.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/4.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/4.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->
            </div>
            <!-- /.portfolio -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="portfolio">
              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/5.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/5.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/6.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/6.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/7.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/7.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/8.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/8.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->
            </div>
            <!-- /.portfolio -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="portfolio">
              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/9.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/9.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/10.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/10.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/11.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/11.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->

              <div class="portfolio__photo">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/12.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/portfolio/12.jpg" alt="" class="portfolio__image">
                </a>
              </div>
              <!-- /.portfolio__photo -->
            </div>
            <!-- /.portfolio -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- swiper-wrapper -->

        <div class="column column--center">
          <div class="swiper-controls">
            <div class="swiper-pagination slider-portfolio-pagination"></div>
            <div class="swiper-button-prev slider-portfolio-prev"></div>
            <div class="swiper-button-next slider-portfolio-next"></div>
          </div>
          <!-- /.swiper-controls -->
        </div>
        <!-- /.column -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>

  <section id="order">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Схема заказа</h2>
      </div>
      <!-- /.section-title -->

      <p class="paragraph">Подробная схема рассказывающая и объясняющая, каким образом происходит заказ и его обработка. Предлагаем Вам с ней ознакомиться, чтобы иметь лучшее представление о том, как работает наша компания.</p>

      <ul class="order-list">
        <li class="order-list__item">
          <img class="column order-list__image" src="img/pages/main/checkout.jpg" alt="">
          <div class="column order-list__content">
            <h3 class="order-list__title">Вы выбираете изделие или услугу</h3>
            <p class="paragraph order-list__description">На сайте предоставлены калькуляторы по различным услугам. Вы можете заказать услугу или изделие через них или же позвонить нашему менеджеру</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="column order-list__image" src="img/pages/main/measuring.jpg" alt="">
          <div class="column order-list__content">
            <h3 class="order-list__title">К Вам выезжает наш специалист на замер</h3>
            <p class="paragraph order-list__description">Мастер-консультант поможет с выбором цветового решения, даст рекомендации по конструкциям изделий и произведет точный замер места установки</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="column order-list__image" src="img/pages/main/contract.jpg" alt="">
          <div class="column order-list__content">
            <h3 class="order-list__title">Мы заключаем с Вами договор</h3>
            <p class="paragraph order-list__description">Уточняем детали проекта, вносим в него изменения, если это необходимо и заключаем договор. В нем прописаны условия исполнения заказа, а так же рабочие сроки.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="column order-list__image" src="img/pages/main/crafting.jpg" alt="">
          <div class="column order-list__content">
            <h3 class="order-list__title">Начинаем изготовление вашего заказа</h3>
            <p class="paragraph order-list__description">Стандартное время изготовления мебели в нашей компании — до 3 рабочих дней, в зависимости от сложности изделия и загруженности производства.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="column order-list__image" src="img/pages/main/delivery.jpg" alt="">
          <div class="column order-list__content">
            <h3 class="order-list__title">Доставка, установка и гарантия</h3>
            <p class="paragraph order-list__description">Доставка и монтаж изделия не включаются в сумму заказа. Цену доставки за пределы города и в другие города, уточняйте у менеджеров нашего салона.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->
      </ul>
      <!-- /.order-scheme__list -->
    </div>
    <!-- /.container -->
  </section>

  <section id="feedback">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Отзывы наших клиентов</h2>
        <span class="section-title__info">Более 100 положительных отзывов</span>
      </div>
      <!-- /.section-title -->

      <p class="paragraph">За 10 лет работы, мы успели собрать множество положительных отзывов о своей работе. Большинство клиентов остается довольными и рекомендуют наши услуги и изделия своим знакомым и друзьям. Мы дорожим хорошей репутацией и доверием к нашей деятельности.</p>

      <div class="swiper-container slider-feedback">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="feedback">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/avatar.jpg" alt="" class="feedback__photo">
              <div class="feedback__text">
                <p class="feedback__description paragraph">Ставили буквально месяц назад и сказать, что я довльна - ничего не
                  сказать! Ни одной летающей души в квартире, а также стало меньше пыли. Рекомендую!</p>
                <div class="feedback__info">
                  <span class="feedback__name">Анна Н.</span>
                  <time class="feedback__time">19.04.2019</time>
                </div>
                <!-- /.feedback-info -->
              </div>
              <!-- /.feedback-text -->
            </div>
            <!-- /.feedback -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="feedback">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/avatar.jpg" alt="" class="feedback__photo">
              <div class="feedback__text">
                <p class="feedback__description paragraph">Благодарю Вас за установку сеточки на балконе! Душа моя спокойна по поводу моего котика, надеюсь прослужит долго! Спасибо, вам, Михаил, и вашему коллеге за оперативность!</p>
                <div class="feedback__info">
                  <span class="name">Алена Б.</span>
                  <time class="feedback__time">05.04.2020</time>
                </div>
                <!-- /.feedback-info -->
              </div>
              <!-- /.feedback-text -->
            </div>
            <!-- /.feedback -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="feedback">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/avatar.jpg" alt="" class="feedback__photo">
              <div class="feedback__text">
                <p class="feedback__description paragraph">Добрый день! Заказывали у вас сетки в Видное. Спасибо большое, все быстро и качественно. Теперь живем с открытыми окнами - это такой кайф :)</p>
                <div class="feedback__info">
                  <span class="feedback__name">Александра И.</span>
                  <time class="feedback__time">21.06.2019</time>
                </div>
                <!-- /.feedback-info -->
              </div>
              <!-- /.feedback-text -->
            </div>
            <!-- /.feedback -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- swiper-wrapper -->
        <div class="row row--reverse">
          <div class="column">
            <div class="row">
              <button onclick="window.open('https://vk.com/moskitsetki_msk?z=album-179924034_263108745',  '_blank')" class="button button-primary">Больше отзывов</button>
            </div>
          </div>
          <!-- /.column -->

          <div class="column">
            <div class="swiper-controls">
              <div class="swiper-pagination slider-feedback-pagination"></div>
              <div class="swiper-button-prev slider-feedback-prev"></div>
              <div class="swiper-button-next slider-feedback-next"></div>
            </div>
            <!-- /.swiper-controls -->
          </div>
          <!-- /.column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include 'partials/footer.php' ?>