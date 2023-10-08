<?php get_header(); ?>
<main>
  <section class="p-news">
    <div class="l-inner">
      <h2 class="p-news__heading l-section__heading">お知らせ一覧</h2>
      <div class="p-news__body">
        <?php if (have_posts()) : ?>
          <ul class="p-news__list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-news__item p-news-item">
                <a class="p-news-item__link" href="<?php the_permalink() ?>">
                  <div class="p-news-item__link-inner">
                    <div class="p-news-item__date"><?php echo get_the_date('Y-m-d'); ?></div>
                    <div class="p-news-item__title"><?php echo get_the_title(); ?></div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <!-- ページネーション -->
          <?php
          $args = [
            'mid_size' => 1,
            'prev_text' => '',
            'next_text' => '',
            'screen_reader_text' => 'ページャー'
          ];
          the_posts_pagination($args);
          ?>
        <?php else : ?>
          <!-- 投稿が無い場合の内容 -->
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<div class="p-contact-banner">
  <div class="p-contact-banner__body">
    <div class="p-contact-banner__title">まずは無料で資料請求から</div>
    <div class="p-contact-banner__btn">
      <a class="p-contact-banner__btn-link" href="<?php echo esc_url(home_url()); ?>/contact">資料請求</a>
    </div>
    <div class="p-contact-banner__link-wrapper">
      <a class="p-contact-banner__link" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
    </div>
  </div>
  <div class="p-contact-banner__footer">
    <div class="p-contact-banner__footer-inner">
      <div class="p-contact-banner__text01">お電話でのお問い合わせはこちら</div>
      <div class="p-contact-banner__tel-wrapper">
        <a class="p-contact-banner__tel" href="tel:0123-456-7890">0123-456-7890</a>
      </div>
      <div class="p-contact-banner__text02">平日 08:00~20:00</div>
    </div>
  </div>
</div>
<?php get_footer(); ?>