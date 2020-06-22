<?php
  // Мета-теги
  $title = 'Рулонные шторы "Гранд"';
  $description = "";
  $keywords = "";

  include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php' ?>

  <!-- Основной контент -->
  <main>
    <div class="container">
      <div class="section-title">
        <h1 class="sub-heading product-heading">Рулонные шторы "Гранд"</h1>
      </div>
      <!-- /.section-title -->
      <img class="product-page-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds-grand/promo.jpg" alt="">
    </div>
    <!-- /.container -->

    <section id="product-description">
      <div class="container">
        <div class="section-title">
          <h2 class="sub-heading">Описание</h2>
        </div>
        <!-- /.section-title -->
        <p class="product-description">Если на балконе или лоджии остекление выполнено раздвижными алюминиевыми конструкциями, то и москитная сетка, как правило, устанавливается тоже раздвижного типа. Данная конструкция представляет собой сетчатое полотно, которое по специальным направляющим
          перемещается вдоль всего окна, занимая место открытой створки, как двери шкафа-купе. Специальный встроенный щеточный уплотнитель обеспечивает плотное прилегание к створкам. Для удобства использования сетки снабжаются эргономичными ручками.
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
          <a class="gallery-item gallery-item-large" data-fslightbox href="img/catalog/items/roller-blinds-grand/1.jpg">
            <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds-grand/1.jpg" alt="">
          </a>
          <!-- /.gallery-item -->

          <a class="gallery-item gallery-item-large" data-fslightbox href="img/catalog/items/roller-blinds-grand/2.jpg">
            <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds-grand/2.jpg" alt="">
          </a>
          <!-- /.gallery-item -->

          <a class="gallery-item" data-fslightbox href="img/catalog/items/roller-blinds-grand/3.jpg">
            <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds-grand/3.jpg" alt="">
          </a>
          <!-- /.gallery-item -->

          <a class="gallery-item" data-fslightbox href="img/catalog/items/roller-blinds-grand/4.jpg">
            <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds-grand/4.jpg" alt="">
          </a>
          <!-- /.gallery-item -->

          <a class="gallery-item" data-fslightbox href="img/catalog/items/roller-blinds-grand/5.jpg">
            <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/roller-blinds-grand/5.jpg" alt="">
          </a>
          <!-- /.gallery-item -->
        </div>
        <!-- /.gallery -->
      </div>
      <!-- /.container -->
    </section>

    <section id="calculation" data-product="rollerBlindsGrand" data-calculator-type="curtains" data-calculator-method="width">
      <div class="container">
        <div class="section-title">
          <h2 class="sub-heading">Рассчитать стоимость</h2>
        </div>
        <!-- /.section-title -->
        <form class="calculator">
          <h3 class="calculator-title">Рулонная штора</h3>
          <div class="swiper-container calculator-wrapper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="calculator-column">
                  <h3 class="calculator-title">Размеры</h3>
                  <div class="calculator-block calculator-inputs input-wrapper">
                    <label class="input-label">
                      <span class="input-info">высота</span>
                      <input id="calculator-height" class="input input-text input-shadow" type="number" placeholder="Например, 200см">
                    </label>
                    <label class="input-label">
                      <span class="input-info">ширина</span>
                      <input id="calculator-width" class="input input-text input-shadow" type="number" placeholder="Например, 100см">
                    </label>
                  </div>
                  <!-- /.input-wrapper -->
                  <img class="calculator-block calculator-preview" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/rollen-prototype.svg" alt="">
                  <div class="calculator-description">
                    <h3 class="calculator-title">Доп. информация</h3>
                    <p class="calculator-block calculator-text">Калькулятор подсчитывает минимальную стоимость. Цена может меняться от качества ткани, цвета и т.п. Для уточнения, вы можете оставить заявку и мы вам перезвоним.</p>
                  </div>
                  <!-- /.calculator-description -->
                  <button type="button" class="button button-primary button-invisible calculator-button-next">Далее</button>
                </div>
                <!-- /.calculator-column -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="calculator-column">
                  <h3 class="calculator-title">Дополнительно</h3>
                  <div class="calculator-block calculator-advanced">
                    <div class="checkbox">
                      <input type="checkbox" id="calculator-install" />
                      <label for="calculator-install">установка</label>
                      <span>+500р</span>
                    </div>
                    <!-- /.checkbox -->

                    <div class="checkbox">
                      <input type="checkbox" id="calculator-delivery" />
                      <label for="calculator-delivery">доставка</label>
                      <span>+500р</span>
                    </div>
                    <!-- /.checkbox -->
                  </div>
                  <!-- /.calculator-advanced -->
                  <h3 class="calculator-title">Отчет</h3>
                  <table>
                    <tr>
                      <th>Параметр</th>
                      <th>Значение</th>
                      <th>Цена</th>
                    </tr>
                    <tr>
                      <td>Размеры</td>
                      <td id="table-size-item">20x30</td>
                      <td id="table-size-cost">0р</td>
                    </tr>
                    <tr>
                      <td>Установка</td>
                      <td id="table-install-item">Нет</td>
                      <td id="table-install-cost">0р</td>
                    </tr>
                    <tr>
                      <td>Доставка</td>
                      <td id="table-delivery-item">Нет</td>
                      <td id="table-delivery-cost">0р</td>
                    </tr>
                    <tr>
                      <td id="item-name" class="cell-important">Тип шторы</td>
                      <td colspan="2" id="item-type" class="cell-important">Гранд</td>
                    </tr>
                  </table>

                  <div class="calculator-order">
                    <div class="calculator-order-text">
                      <h3 class="calculator-title">Итого:</h3>
                      <span id="calculator-price" class="calculator-price">0р</span>
                    </div>
                    <!-- /.calculator-order-text -->
                    <button type="button" id="calculator-order-button" class="button button-primary">Заказать услугу</button>
                  </div>
                  <!-- /.calculator-order -->
                  <button type="button" class="button button-primary button-invisible calculator-button-prev">Назад</button>
                </div>
                <!-- /.calculator-column -->
              </div>
              <!-- /.swipe-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->
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
                  <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/adjustment.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/adjustment.jpg" alt=""></a>
                  <p class="product-price">от <strong>499р</strong></p>
                  <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/adjustment.php">Регулировка окон</a></h4>
                </div>
                <!-- /.product-item -->

                <div class="product-item">
                  <a href="/catalog/services/lock.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/lock.jpg" alt=""></a>
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

            <div class="swiper-slide">
              <div class="product-list-other">
                <div class="product-item">
                  <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/limiter.php"><img class="product-image-other" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/tinting.jpg" alt=""></a>
                  <p class="product-price">от <strong>299р</strong></p>
                  <h4 class="product-title"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog/services/limiter.php">Ограничители (гребенки)</a></h4>
                </div>
                <!-- /.product-item -->

                <div class="product-item">
                </div>
                <!-- /.product-item -->

                <div class="product-item">
                </div>
                <!-- /.product-item -->

                <div class="product-item">
                </div>
                <!-- /.product-item -->

              </div>
              <!-- /.product-list-other -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->

          <div class="swiper-controls">
            <div class="swiper-pagination swiper-block-other-pagination"></div>
            <div class="swiper-button-prev swiper-block-other-button-prev"></div>
            <div class="swiper-button-next swiper-block-other-button-next"></div>
          </div>
          <!-- /.swiper-controls -->
        </div>
        <!-- /.product-list -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php' ?>