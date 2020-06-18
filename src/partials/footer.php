  <!-- Подвал -->
  <footer id="footer">
    <div class="container">
      <div class="wrapper">
        <a href="#">
          <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/logo.svg" alt="" class="logo" />
        </a>
        <nav class="menu">
          <ul class="nav">
            <li class="nav-item"><a href="index.html" class="nav-link footer-nav-link">Главная</a></li>
            <li class="nav-item"><a href="production.html" class="nav-link footer-nav-link">Продукция</a></li>
            <li class="nav-item"><a href="#popular-kits" class="nav-link footer-nav-link">Популярное</a></li>
            <li class="nav-item"><a href="#feedback" class="nav-link footer-nav-link">Отзывы</a></li>
          </ul>
        </nav>
        <div class="callback">
          <a href="tel:89266304556" class="phone">+7 926 630 45 56</a>
          <small class="worktime">Ежедневно с 9 до 22</small>
        </div>
        <!-- /.callback -->
      </div>
      <!-- /.wrapper -->
      <div class="wrapper">
        <span class="company-info">© 2020. «Bestforhome24.ru». Все права защищены</span>
        <a class="politics" href="politics.html" target="_blank">Политика конфиденциальности</a>
        <div class="social">
          <span>Мы в соц. сетях:</span>
          <a href="https://www.instagram.com/moskitsetki_msk/" target="_blank" class="social-link"><img
              class="social-icon" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/instagram.svg" alt=""></a>
          <a href="https://vk.com/moskitsetki_msk" class="social-link" target="_blank"><img class="social-icon"
              src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/vk.svg" alt=""></a>
          <a href="" class="social-link" target="_blank"><img class="social-icon" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/img/icons/youtube.svg"
              alt=""></a>
        </div>
      </div>
      <!-- /.wrapper -->
    </div>
  </footer>

  <div class="micromodal-slide" id="modal-callback" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        <form data-form-type="modal" id="callbackForm" class="form form-modal" action="mail.php" method="POST"
          enctype="multipart/form-data">
          <h2 class="modal-title">Заказать обратный звонок</h2>
          <p class="modal-text">Укажите Ваш имя и номер телефона, мы свяжемся с Вами в ближайшее время, согласуем
            удобное время и дату</p>
          <input required class="input input-text input-shadow" type="text" name="user_name" placeholder="Ваше имя">
          <input required class="input input-text input-shadow" type="tel" name="user_phone" placeholder="Ваш телефон">
          <div class="checkbox">
            <input type="checkbox" id="accept" />
            <label for="accept">Я согласен на обработку моих персональных данных согласно условиям <a class="politics"
                href="politics.html" target="_blank">Политика конфиденциальности</a></label>
          </div>
          <!-- /.politics -->
          <button type="button" disabled id="modal-callback-accept"
            class="button button-large button-form">Заказать</button>
          <p data-error-label class="form-error-label"></p>
        </form>
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.micromodal-slide -->

  <div class="micromodal-slide" id="modal-accept" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        <div class="accept-modal-wrapper">
          <img src="img/icons/accept-icon.svg" alt="">
          <p class="modal-text">Ваша заявка отправлена, <span>спасибо!</span><br> В ближайшее время, мы Вам перезвоним
          </p>
        </div>
        <!-- /.accept-modal-wrapper -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.micromodal-slide -->

  <div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu-overlay">
      <div class="mobile-menu-wrapper">
        <button class="modal__close" id="mobile-menu-close"></button>
        <nav>
          <ul class="mobile-menu-nav">
            <li class="mobile-menu-item"><a class="mobile-menu-link" href="index.html">Главная</a></li>
            <li class="mobile-menu-item"><a class="mobile-menu-link" href="production.html">Продукция</a></li>
            <li class="mobile-menu-item"><a class="nav-link" href="#popular-kits">Популярное</a></li>
            <li class="mobile-menu-item"><a class="mobile-menu-link " href="#feedback ">Отзывы</a></li>
          </ul>
        </nav>
        <div class="callback">
          <a href="tel:89266304556 " class="phone">+7 926 630 45 56</a>
          <small class="worktime">Ежедневно с 9 до 22</small>
        </div>
        <button data-modal-callback class="button">Заказать звонок</button>
      </div>
      <!-- /.mobile-menu-wrapper -->
    </div>
    <!-- /.mobile-menu-overlay -->
  </div>
  <!-- /.mobile-menu -->

  <!-- Скрипты -->
  <!-- build:js -->
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/libraries/swiper.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/libraries/micromodal.js"></script>

  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/smoothscroll.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/mobilemenu.js"></script>
  <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/scripts/script.js"></script>
  <!-- endbuild -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript ">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script ", "https://mc.yandex.ru/metrika/tag.js ", "ym ");

    ym(61235758, "init ", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/61235758 " style="position: absolute;
 left: -9999px; " alt=" " /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <!-- Google Analytics -->
  <!-- /Google Analytics -->
</body>
<!-- Страница сверстана -->

</html>