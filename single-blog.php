<?php get_header(); ?>
<main class="p-blog-detail-main">
  <div class="l-inner">
    <div class="p-blog-detail-wrapper">
      <div class="p-blog-detail">
        <div class="p-blog-detail__label-wrapper">
          <span class="p-blog-detail__label">
            <?php
            $terms = get_the_terms(get_the_ID(), 'blog_category');
            echo $terms[0]->name;
            ?>
          </span>
        </div>
        <div class="p-blog-detail__title"><?php echo get_the_title(); ?></div>
        <div class="p-blog-detail__date">
          <?php echo get_the_date('Y-m-d'); ?>
        </div>
        <?php if (has_post_thumbnail()) : ?>
          <div class="p-blog-detail__img-wrapper">
            <?php the_post_thumbnail('', ['class' => 'p-blog-detail__img']); ?>
          </div>
        <?php endif; ?>
        <div class="p-blog-detail__body wordpress-content">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="p-blog-recommend">
        <div class="p-blog-recommend__title">おすすめの記事</div>
        <div class="p-blog-recommend__body">
          <?php
          $args = [
            'post_type' => 'blog',
            'tax_query' => [
              [
                'taxonomy' => 'blog_tag',
                'field'    => 'slug',
                'terms'    => 'pickup',
              ]
            ],
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'post__not_in' => [get_the_ID()]
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="p-blog-recommend__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-blog-recommend__item p-blog-recommend-item">
                  <a class="p-blog-recommend-item__link" href="<?php the_permalink(); ?>">
                    <div class="p-blog-recommend-item__img-wrapper">
                      <span class="p-blog-recommend-item__label">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'blog_category');
                        echo $terms[0]->name;
                        ?>
                      </span>
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('', ['class' => 'p-blog-recommend-item__img']); ?>
                      <?php else : ?>
                        <img class="p-blog-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-image.jpg">
                      <?php endif; ?>
                    </div>
                    <div class="p-blog-recommend-item__text-wrapper">
                      <div class="p-blog-recommend-item__date"><?php echo get_the_date('Y-m-d'); ?></div>
                      <div class="p-blog-recommend-item__title"><?php echo get_the_title(); ?></div>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          <?php else : ?>
            <!-- 投稿が無い場合の内容 -->
          <?php endif; ?>
        </div>
      </div>
    </div>
    <aside class="p-sidebar">
      <div class="p-blog-related">
        <div class="p-sidebar__title">関連記事</div>
        <div class="p-blog-related__body">
          <div class="p-blog-related__list">
            <?php
            $terms = get_the_terms(get_the_ID(), 'blog_category');
            foreach ($terms as $term) :
            ?>
              <?php
              $args = [
                'post_type' => 'blog',
                'tax_query' => [
                  [
                    'taxonomy' => 'blog_category',
                    'field'    => 'slug',
                    'terms'    => $term->slug
                  ]
                ],
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'post__not_in' => [get_the_ID()]
              ];
              $the_query = new WP_Query($args);
              ?>
              <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <div class="p-blog-related__item p-blog-related-item">
                    <a class="p-blog-related-item__link" href="<?php the_permalink(); ?>">
                      <div class="p-blog-related-item__img-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('', ['class' => 'p-blog-recommend-item__img']); ?>
                        <?php else : ?>
                          <img class="p-blog-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-image.jpg">
                        <?php endif; ?>
                      </div>
                      <div class="p-blog-related-item__text-wrapper">
                        <div class="p-blog-related-item__title"><?php echo get_the_title(); ?></div>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <!-- 投稿が無い場合の内容 -->
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="p-blog-category">
        <div class="p-sidebar__title">カテゴリー</div>
        <div class="p-blog-category__body">
          <ul class="p-blog-category__list">
            <?php
            $args = [
              'taxonomy' => 'blog_category'
            ];
            $terms = get_terms($args);
            ?>
            <?php foreach ($terms as $term) : ?>
              <li class="p-blog-category__item">
                <a class="p-blog-category__link" href="<?php echo get_term_link($term); ?>">・<?php echo $term->name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </aside>
  </div>
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