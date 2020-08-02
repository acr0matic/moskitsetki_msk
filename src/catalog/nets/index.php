<?php
// Мета-теги
$title = "Наши товары и услуги";
$description = "";
$keywords = "";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php' ?>

<!-- Основной контент -->
<main>
  <section id="promo">
    <div class="container">
      <div class="promo">
        <div class="promo__wrapper">
          <h1 class="promo__title">Москитные сетки</h1>
          <nav class="promo__nav promo-nav">
            <ul class="promo-nav__navbar">
              <li class="promo-nav__item"><a class="promo-nav__link" href="#description">Зачем нужны?</a></li>
              <li class="promo-nav__item"><a class="promo-nav__link" href="">Виды сеток</a></li>
              <li class="promo-nav__item"><a class="promo-nav__link" href="">Виды полотна</a></li>
              <li class="promo-nav__item"><a class="promo-nav__link" href="">Калькулятор</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.promo__wrapper -->

        <img class="promo__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/promo.jpg" alt="">
      </div>
      <!-- /.promo -->
    </div>
    <!-- /.container -->
  </section>

  <section id="description">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Зачем нужны сетки?</h2>
        <span class="section-title__info">Работаем для вас больше 10 лет</span>
      </div>
      <!-- /.section-title -->

      <p class="paragraph">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Пояс, знаках журчит переулка вершину меня маленькая ему над послушавшись напоивший пустился вопрос родного жизни рыбными решила продолжил ipsum диких.</p>

      <div class="photo-block">
        <div class="photo-block__picture">
          <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/1.jpg">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/1.jpg" alt="" class="photo-block__image">
          </a>
        </div>
        <!-- /.photo-block__picture -->

        <div class="photo-block__picture">
          <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/2.jpg">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/2.jpg" alt="" class="photo-block__image">
          </a>
        </div>
        <!-- /.photo-block__picture -->

        <div class="photo-block__picture">
          <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/3.jpg">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/3.jpg" alt="" class="photo-block__image">
          </a>
        </div>
        <!-- /.photo-block__picture -->

        <div class="photo-block__picture">
          <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/4.jpg">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/portfolio/4.jpg" alt="" class="photo-block__image">
          </a>
        </div>
        <!-- /.photo-block__picture -->
      </div>
      <!-- /.photo-block -->
    </div>
    <!-- /.container -->
  </section>

  <section id="frames">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Разновидности сеток</h2>
      </div>
      <!-- /.section-title -->

      <p class="paragraph">Далеко-далеко за словесными горами в стране Далеко-далеко за словесными горами. Океана, она от всех снова взобравшись агентство предупредила свою вопроса маленькая!</p>

      <div class="swiper-container slider-frames">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="frame">
              <div class="frame__wrapper">
                <div class="frame__picture">
                  <img class="frame__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/classic.svg" alt="Классическая москитная сетка">
                </div>
                <!-- /.frame__picture -->

                <div class="frame__content">
                  <h3 class="frame__title">Рамочная сетка</h3>
                  <span class="frame__cost">от 499р</span>
                  <p class="frame__description paragraph">Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>
                  <p class="frame__description paragraph">Далеко-далеко за согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>

                  <div class="frame__action frame-action">
                    <div class="frame-action__wrapper">
                      <button class="frame-action__button frame-action__info button button-primary">Подробнее</button>
                    </div>
                    <!-- /.frame-action__wrapper -->
                  </div>
                  <!-- /.frame__action -->
                </div>
                <!-- /.frame__content -->
              </div>
              <!-- /.frame__wrapper -->
            </div>
            <!-- /.frame -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="frame">
              <div class="frame__wrapper">
                <div class="frame__picture">
                  <img class="frame__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/inner.svg" alt="Классическая москитная сетка">
                </div>
                <!-- /.frame__picture -->

                <div class="frame__content">
                  <h3 class="frame__title">Вставная сетка</h3>
                  <span class="frame__cost">от 999р</span>
                  <p class="frame__description paragraph">Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>

                  <div class="frame__action frame-action">
                    <div class="frame-action__wrapper">
                      <button class="frame-action__button frame-action__info button button-primary">Подробнее</button>
                    </div>
                    <!-- /.frame-action__wrapper -->
                  </div>
                  <!-- /.frame__action -->
                </div>
                <!-- /.frame__content -->
              </div>
              <!-- /.frame__wrapper -->
            </div>
            <!-- /.frame -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="frame">
              <div class="frame__wrapper">
                <div class="frame__picture">
                  <img class="frame__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/door.svg" alt="Классическая москитная сетка">
                </div>
                <!-- /.frame__picture -->

                <div class="frame__content">
                  <h3 class="frame__title">Дверная сетка</h3>
                  <span class="frame__cost">от 999р</span>
                  <p class="frame__description paragraph">Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>

                  <div class="frame__action frame-action">
                    <div class="frame-action__wrapper">
                      <button class="frame-action__button frame-action__info button button-primary">Подробнее</button>
                    </div>
                    <!-- /.frame-action__wrapper -->
                  </div>
                  <!-- /.frame__action -->
                </div>
                <!-- /.frame__content -->
              </div>
              <!-- /.frame__wrapper -->
            </div>
            <!-- /.frame -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="frame">
              <div class="frame__wrapper">
                <div class="frame__picture">
                  <img class="frame__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/provedal.svg" alt="Классическая москитная сетка">
                </div>
                <!-- /.frame__picture -->

                <div class="frame__content">
                  <h3 class="frame__title">Развижная сетка</h3>
                  <span class="frame__cost">от 999р</span>
                  <p class="frame__description paragraph">Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>

                  <div class="frame__action frame-action">
                    <div class="frame-action__wrapper">
                      <button class="frame-action__button frame-action__info button button-primary">Подробнее</button>
                    </div>
                    <!-- /.frame-action__wrapper -->
                  </div>
                  <!-- /.frame__action -->
                </div>
                <!-- /.frame__content -->
              </div>
              <!-- /.frame__wrapper -->
            </div>
            <!-- /.frame -->
          </div>
          <!-- /.swiper-slide -->


          <div class="swiper-slide">
            <div class="frame">
              <div class="frame__wrapper">
                <div class="frame__picture">
                  <img class="frame__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/provedal.svg" alt="Классическая москитная сетка">
                </div>
                <!-- /.frame__picture -->

                <div class="frame__content">
                  <h3 class="frame__title">Развижная сетка</h3>
                  <span class="frame__cost">от 999р</span>
                  <p class="frame__description paragraph">Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>

                  <div class="frame__action frame-action">
                    <div class="frame-action__wrapper">
                      <button class="frame-action__button frame-action__info button button-primary">Подробнее</button>
                    </div>
                    <!-- /.frame-action__wrapper -->
                  </div>
                  <!-- /.frame__action -->
                </div>
                <!-- /.frame__content -->
              </div>
              <!-- /.frame__wrapper -->
            </div>
            <!-- /.frame -->
          </div>
          <!-- /.swiper-slide -->


          <div class="swiper-slide">
            <div class="frame">
              <div class="frame__wrapper">
                <div class="frame__picture">
                  <img class="frame__image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/nets/provedal.svg" alt="Классическая москитная сетка">
                </div>
                <!-- /.frame__picture -->

                <div class="frame__content">
                  <h3 class="frame__title">Развижная сетка</h3>
                  <span class="frame__cost">от 999р</span>
                  <p class="frame__description paragraph">Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Пор рукописи напоивший правилами снова.</p>

                  <div class="frame__action frame-action">
                    <div class="frame-action__wrapper">
                      <button class="frame-action__button frame-action__info button button-primary">Подробнее</button>
                    </div>
                    <!-- /.frame-action__wrapper -->
                  </div>
                  <!-- /.frame__action -->
                </div>
                <!-- /.frame__content -->
              </div>
              <!-- /.frame__wrapper -->
            </div>
            <!-- /.frame -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- /.swiper-wrapper -->

        <div class="swiper-button-prev slider-frames-prev"></div>
        <div class="swiper-button-next slider-frames-next"></div>

        <div class="swiper-scrollbar slider-frames-scrollbar"></div>
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php' ?>