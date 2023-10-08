<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='Engress'>
  <meta property='og:url' content='https://natsucoder.com/sample3'>
  <meta property='og:description' content='日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール'>
  <meta property="og:image" content="https://natsucoder.com/sample3/img/ogp.png">
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール" />
  <meta name="robots" content="noindex">
  <title>Engress</title>
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-192x192.png">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/apple-touch-icon-180x180.png">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrapper">
    <header class="l-header">
      <div class="l-header__inner">
        <h1 class="l-header__logo">
          <a class="l-header__logo-link" href="<?php echo esc_url(home_url()); ?>">
            <img class="l-header__logo-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png">
          </a>
        </h1>
        <div class="l-header__nav p-header-nav">
          <nav class="p-header-nav__main p-main-nav">
            <ul class="p-main-nav__list">
              <li class="p-main-nav__item">
                <a class="p-main-nav__link" href="<?php echo esc_url(home_url()); ?>">ホーム</a>
              </li>
              <li class="p-main-nav__item">
                <a class="p-main-nav__link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
              </li>
              <li class="p-main-nav__item">
                <a class="p-main-nav__link" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
              </li>
              <li class="p-main-nav__item">
                <a class="p-main-nav__link" href="<?php echo esc_url(home_url('/course')); ?>">コース・料金</a>
              </li>
            </ul>
          </nav>
          <nav class="p-header-nav__sub p-sub-nav">
            <div class="p-sub-nav__info">
              <div class="p-sub-nav__text">平日08:00〜20:00</div>
              <div class="p-sub-nav__tel-wrapper">
                <img class="p-sub-nav__tel-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tel.png">
                <a class="p-sub-nav__tel" href="tel:0123-456-7890">0123-456-7890</a>
              </div>
            </div>
            <div class="p-sub-nav__btn-wrapper">
              <a class="p-sub-nav__btn p-sub-nav__btn--orange" href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
              <a class="p-sub-nav__btn p-sub-nav__btn--blue" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            </div>
          </nav>
        </div>
        <button type="button" class="c-btn-menu js-btn-menu">
          <span class="c-btn-menu__line"></span>
        </button>
      </div>
    </header>
    <?php
    $bg_class = 'p-sub-kv--news'; // デフォルトの背景クラス
    if (is_page()) :
      // ページのスラッグをクラス名として使用
      $slug = get_queried_object()->post_name;
      $bg_class = 'p-sub-kv--' . $slug;
    elseif (is_home() || is_category()) :
      $bg_class = 'p-sub-kv--news';
    elseif (is_post_type_archive('blog') || is_tax()) :
      $bg_class = 'p-sub-kv--blog';
    endif;
    ?>
    <?php if (is_front_page()) : ?>
      <div class="p-top-kv">
        <div class="p-top-kv__inner">
          <div class="p-top-kv__title">TOEFL対策は<br class="u-sp-only">Engress</div>
          <div class="p-top-kv__subtitle">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</div>
          <div class="p-top-kv__btn">
            <a class="p-top-kv__btn-link" href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
          </div>
          <div class="p-top-kv__contact">
            <a class="p-top-kv__contact-link" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
          </div>
        </div>
      </div>
    <?php else : ?>
      <?php if (!is_single() && !is_page('thanks')) : ?>
        <div class="p-sub-kv <?php echo $bg_class; ?>">
          <div class="p-sub-kv__inner">
            <div class="p-sub-kv__title">
              <?php if (is_page()) : ?>
                <?php echo get_the_title(); ?>
              <?php elseif (is_home() || is_category()) : ?>
                <?php echo 'お知らせ'; ?>
              <?php elseif (is_post_type_archive('blog') || is_tax()) : ?>
                <?php echo 'ブログ'; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (!is_front_page()) { ?>
        <?php if (function_exists('bcn_display')) { ?>
          <div class="p-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
            <div class="l-inner">
              <?php bcn_display(); ?>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    <?php endif; ?>