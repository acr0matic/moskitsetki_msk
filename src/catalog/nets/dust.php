<?php
// Мета-теги
$title = 'Москитная сетка "Антипыль"';
$description = "";
$keywords = "";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php' ?>

<!-- Основной контент -->
<main>
  <div class="container">
    <div class="section-title">
      <h1 class="sub-heading product-heading">Москитная сетка "Антипыль"</h1>
    </div>
    <!-- /.section-title -->
    <img class="product-page-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust/promo.jpg" alt="">
  </div>
  <!-- /.container -->

  <section id="product-description">
    <div class="container">
      <div class="section-title">
        <h2 class="sub-heading">Описание</h2>
      </div>
      <!-- /.section-title -->
      <p class="product-description">Разновидность москитных сеток с мелкоячеистым полотном «Антипыль» с каждым днем стремительно набирает популярность. К сожалению – не от хорошей жизни. Москитная сетка антипыльца – это спасение для аллергиков, которыми скоро будем мы все поголовно.
        Название москитной сетки говорит само за себя – москитная сетка антипыльца способна задерживать очень мелкие фракции песка, пыли, цветочной пыльцы, споров, мелких насекомых и, конечно, комаров.
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
        <a class="gallery-item gallery-item-large" data-fslightbox href="img/catalog/items/dust/1.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust/1.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item gallery-item-large" data-fslightbox href="img/catalog/items/dust/2.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust/2.jpg" alt="">
        </a>
        <!-- /.gallery-item -->
        <a class="gallery-item" data-fslightbox href="img/catalog/items/dust/5.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust/5.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="img/catalog/items/dust/3.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust/3.jpg" alt="">
        </a>
        <!-- /.gallery-item -->

        <a class="gallery-item" data-fslightbox href="img/catalog/items/dust/4.jpg">
          <img class="gallery-item-image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/catalog/items/dust/4.jpg" alt="">
        </a>
        <!-- /.gallery-item -->
      </div>
      <!-- /.gallery -->
    </div>
    <!-- /.container -->
  </section>

  <section id="calculation" data-product="dust" data-calculator-type="mosquito-nets">
    <div class="container">
      <div class="section-title">
        <h2 class="sub-heading">Рассчитать стоимость</h2>
      </div>
      <!-- /.section-title -->
      <form class="calculator">
        <h3 class="calculator-title">Москитная сетка</h3>
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
                <img class="calculator-block calculator-preview" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/net-prototype.svg" alt="">
                <!-- <div class="calculator-description">
                    <h3 class="calculator-title">Доп. информация</h3>
                    <p class="calculator-block calculator-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div> -->
                <!-- /.calculator-description -->
                <button type="button" class="button button-primary button-invisible calculator-button-next">Далее</button>
              </div>
              <!-- /.calculator-column -->
            </div>
            <!-- /.swiper-slide -->

            <div class="swiper-slide">
              <div class="calculator-column">
                <h3 class="calculator-title">Цвет</h3>
                <div id="calculator-color" class="calculator-block calculator-color">
                  <div class="radio-box radio-box-color">
                    <input class="radio radio-color" type="radio" id="color-white" name="color" value="white" checked>
                    <label class="calculator-heading radio-color-icon" for="color-white" class="radio-wrapper">белый</label>
                  </div>
                  <!-- /.radio-box -->
                  <div class="radio-box radio-box-color">
                    <input class="radio radio-color" type="radio" id="color-brown" name="color" value="brown">
                    <label class="calculator-heading radio-color-icon" for="color-brown" class="radio-wrapper">коричневый</label>
                  </div>
                  <!-- /.radio-box -->
                </div>
                <!-- /.calculator-color -->
                <h3 class="calculator-title">Крепежи</h3>
                <div class="calculator-block calculator-fasteners">
                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-fasteners" type="radio" id="fasteners-plastic" name="fasteners" value="plastic" checked>
                    <label class="calculator-heading radio-fasteners" for="fasteners-plastic" class="radio-wrapper">пластик</label>
                  </div>
                  <!-- /.radio-box -->
                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-fasteners" type="radio" id="fasteners-metal" name="fasteners" value="metal">
                    <label class="calculator-heading radio-fasteners" for="fasteners-metal" class="radio-wrapper">металл</label>
                  </div>
                  <!-- /.radio-box -->

                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-fasteners" type="radio" id="fasteners-plunger" name="fasteners" value="plunger">
                    <label class="calculator-heading radio-fasteners" for="fasteners-plunger" class="radio-wrapper">плунжер</label>
                  </div>
                  <!-- /.radio-box -->
                </div>
                <!-- /.calculator-fasteners -->
                <div class="calculator-description">
                  <h3 class="calculator-title">Доп. информация</h3>
                  <p class="calculator-block calculator-text">Плунжерные москитные сетки устанавливаются не снаружи или внутри окна, а непосредственно в оконный проём. Размер сетки должен в точности совпадать с оконным проемом.</p>
                  <!-- /.input-wrapper -->
                </div>
                <!-- /.calculator-description -->
                <button type="button" class="button button-primary calculator-button-next">Далее</button>
                <button type="button" class="button button-primary button-invisible calculator-button-prev">Назад</button>
              </div>
              <!-- /.calculator-column -->
            </div>
            <!-- /.swipe-slide -->

            <div class="swiper-slide">
              <div class="calculator-column">
                <h3 class="calculator-title">Ручки</h3>
                <div class="calculator-block calculator-fasteners">
                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-handle" type="radio" id="handle-plastic" name="handle" value="plastic" checked>
                    <label class="calculator-heading radio-fasteners" for="handle-plastic" class="radio-wrapper">пластик</label>
                  </div>
                  <!-- /.radio-box -->
                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-handle" type="radio" id="handle-metal" name="handle" value="metal">
                    <label class="calculator-heading radio-fasteners" for="handle-metal" class="radio-wrapper">металл</label>
                  </div>
                  <!-- /.radio-box -->
                </div>
                <!-- /.calculator-fasteners -->

                <h3 class="calculator-title">Углы</h3>
                <div class="calculator-block calculator-fasteners">
                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-corner" type="radio" id="corner-plastic" name="corner" value="plastic" checked>
                    <label class="calculator-heading radio-fasteners" for="corner-plastic" class="radio-wrapper">пластик</label>
                  </div>
                  <!-- /.radio-box -->
                  <div class="radio-box radio-box-fasteners">
                    <input class="radio radio-input-corner" type="radio" id="corner-metal" name="corner" value="metal">
                    <label class="calculator-heading radio-fasteners" for="corner-metal" class="radio-wrapper">металл</label>
                  </div>
                  <!-- /.radio-box -->
                </div>
                <!-- /.calculator-fasteners -->

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

                <button type="button" class="button button-primary button-invisible calculator-button-next">Далее</button>
                <button type="button" class="button button-primary button-invisible calculator-button-prev">Назад</button>
                <button type="button" class="button button-primary button-temp calculator-button-prev">Назад</button>
              </div>
              <!-- /.calculator-column -->
            </div>
            <!-- /.swipe-slide -->

            <div class="swiper-slide">
              <div class="calculator-column">
                <h3 class="calculator-title">Отчет</h3>
                <table>
                  <tr>
                    <th>Параметр</th>
                    <th>Значение</th>
                    <th>Цена</th>
                  </tr>
                  <tr>
                    <td>Размеры</td>
                    <td id="table-size-item">50x50</td>
                    <td id="table-size-cost">0р</td>
                  </tr>
                  <tr>
                    <td>Цвет</td>
                    <td id="table-color-item">Белый</td>
                    <td id="table-color-cost">0р</td>
                  </tr>
                  <tr>
                    <td>Крепеж</td>
                    <td id="table-fasteners-item">Пластик</td>
                    <td id="table-fasteners-cost">0р</td>
                  </tr>
                  <tr>
                    <td>Углы</td>
                    <td id="table-corner-item">Пластик</td>
                    <td id="table-corner-cost">0р</td>
                  </tr>
                  <tr>
                    <td>Ручки</td>
                    <td id="table-handle-item">Пластик</td>
                    <td id="table-handle-cost">0р</td>
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
                    <td id="item-name" class="cell-important">Тип сетки</td>
                    <td id="item-type" class="cell-important">Классическая</td>
                    <td id="item-cost" class="cell-important">0р</td>
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