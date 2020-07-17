  <!-- Подвал -->
  <footer id="footer">
    <div class="container">
      <div class="wrapper">
        <a href="#">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/logo.svg" alt="" class="logo" />
        </a>
        <nav class="menu">
          <ul class="nav__navbar">
            <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/" class="nav__link nav__link--footer">Главная</a></li>
            <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog" class="nav__link nav__link--footer">Каталог</a></li>
            <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/#popular" class="nav__link nav__link--footer">Популярное</a></li>
            <li class="nav__item"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/#feedback" class="nav__link nav__link--footer">Отзывы</a></li>
          </ul>
        </nav>
        <div class="callback">
          <a href="tel:89266304556" class="callback__phone">+7 926 630 45 56</a>
          <span class="callback__time">с 9 до 22</span>
        </div>
        <!-- /.callback -->
      </div>
      <!-- /.wrapper -->
      <div class="wrapper">
        <div class="company">
          <span class="company__info">© 2020. «Bestforhome24.ru». Все права защищены</span>
        </div>
        <!-- /.company -->

        <div class="policy">
          <a class="policy__link" href="politics.html" target="_blank">Политика конфиденциальности</a>
        </div>
        <!-- /.policy -->

        <div class="social">
          <span>Мы в соц. сетях:</span>
          <a href="https://www.instagram.com/moskitsetki_msk/" target="_blank" class="social-link"><img class="social-icon" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/instagram.svg" alt=""></a>
          <a href="https://vk.com/moskitsetki_msk" class="social-link" target="_blank"><img class="social-icon" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/vk.svg" alt=""></a>
          <a href="" class="social-link" target="_blank"><img class="social-icon" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/youtube.svg" alt=""></a>
        </div>
      </div>
      <!-- /.wrapper -->
    </div>
  </footer>

  <div class="micromodal-slide" id="modal-callback" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        <form data-form-type="modal" class="form form-modal" id="modalCallback" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/php/mail.php" method="POST" enctype="multipart/form-data">
          <h2 class="modal__title form-modal__title">Заказать обратный звонок</h2>
          <p class="form__description">Укажите Ваш имя и номер телефона, мы свяжемся с Вами в ближайшее время, согласуем
            удобное время и дату</p>
          <input data-form="name" class="form__input input input-text" type="text" name="user_name" placeholder="Ваше имя">
          <input data-form="phone" class="form__input input input-text" type="tel" name="user_phone" placeholder="Ваш телефон">
          <div class="form__policy">
            <div class="checkbox">
              <input data-form="policy" class="checkbox__input" type="checkbox" id="policy__modal" />
              <label class="checkbox__content policy" for="policy__modal">Я согласен на обработку моих персональных данных согласно условиям <a class="policy__link" href="politics.html" target="_blank">политики конфиденциальности</a></label>
            </div>
            <!-- /.checkbox -->
          </div>
          <!-- /.form__policy -->
          <button disabled type="button" class="button button-primary">Заказать</button>
          <p data-form="error" class="form__error"></p>
        </form>
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.micromodal-slide -->

  <div class="micromodal-slide" id="modal-accept" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1">
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        <div class="accept-modal-wrapper">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/accept-icon.svg" alt="">
          <p class="modal-text">Ваша заявка отправлена, <span>спасибо!</span><br> В ближайшее время, мы Вам перезвоним</p>
        </div>
        <!-- /.accept-modal-wrapper -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.micromodal-slide -->

  <!-- Скрипты -->
  <!-- build:js -->
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/libraries/swiper.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/libraries/micromodal.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/libraries/fslightbox.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/libraries/imask.js"></script>

  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/smoothscroll.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/forms.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/mobilemenu.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/calculator.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/script.js"></script>
  <!-- endbuild -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(65058088, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/65058088" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <!-- Google Analytics -->
  <!-- /Google Analytics -->
  </body>
  <!-- Страница сверстана -->

  </html>