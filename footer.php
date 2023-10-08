<footer class="l-footer">
  <div class="l-footer__body">
    <div class="l-inner">
      <nav class="l-footer__nav">
        <ul class="l-footer__list">
          <li class="l-footer__item">
            <a class="l-footer__link" href="<?php echo esc_url(home_url()); ?>">ホーム</a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="<?php echo esc_url(home_url('/course')); ?>">コース・料金</a>
          </li>
        </ul>
      </nav>
      <div class="l-footer__content">
        <div class="l-footer__logo">
          <img class="l-footer__logo-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png">
        </div>
        <div class="l-footer__info">
          <div class="l-footer__tel-wrapper">
            <img class="l-footer__tel-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tel-white.png">
            <a class="l-footer__tel" href="tel:0123-456-7890">0123-456-7890</a>
          </div>
          <div class="l-footer__text">平日08:00〜20:00</div>
        </div>
      </div>
    </div>
  </div>
  <div class="l-footer__copyright">
    <div class="l-inner">&copy; 2020 Engress.</div>
  </div>
  <?php wp_footer(); ?>
</footer>
</div>
</body>

</html>