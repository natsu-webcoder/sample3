<?php get_header(); ?>
<main>
  <section class="p-intro">
    <div class="l-inner">
      <h2 class="p-intro__heading l-section__heading">TOEFL学習で<br class="u-sp-only">こんな悩みありませんか？</h2>
      <div class="p-intro__body">
        <ul class="p-intro__list">
          <li class="p-intro__item">勉強の習慣が<br class="u-pc-tb-only">身についていない</li>
          <li class="p-intro__item">勉強しているはず<br class="u-pc-tb-only">なのに点数が伸びない</li>
          <li class="p-intro__item">正しい勉強方法が<br class="u-pc-tb-only">わからない</li>
        </ul>
        <div class="p-intro__text-wrapper">
          <div class="p-intro__text-wrapper-inner">
            <div class="p-intro__text01">Engressは<br><span class="u-underline">TOEFLに特化したスクール</span>です</div>
            <div class="p-intro__text02">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="u-pc-tb-only">TOEFLの苦手分野を克服します。
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-strength">
    <div class="l-inner">
      <h2 class="p-strength__heading l-section__heading">TOEFL対策に特化した<br class="u-sp-only">Engress3つの強み</h2>
      <div class="p-strength__body">
        <ul class="p-strength__list">
          <li class="p-strength__item p-strength-item">
            <div class="p-strength-item__text-wrapper">
              <div class="p-strength-item__label-wrapper">
                <span class="p-strength-item__label">特長 １</span>
              </div>
              <div class="p-strength-item__title">TOEFLに最適化された<br>無駄のないカリキュラム</div>
              <div class="p-strength-item__text">
                TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
              </div>
            </div>
            <div class="p-strength-item__img-wrapper">
              <img class="p-strength-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature01.jpg">
            </div>
          </li>
          <li class="p-strength__item p-strength-item">
            <div class="p-strength-item__text-wrapper">
              <div class="p-strength-item__label-wrapper">
                <span class="p-strength-item__label">特長 ２</span>
              </div>
              <div class="p-strength-item__title">日本人指導歴10年以上の<br>経験豊富な講師陣</div>
              <div class="p-strength-item__text">
                Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
              </div>
            </div>
            <div class="p-strength-item__img-wrapper">
              <img class="p-strength-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature02.jpg">
            </div>
          </li>
          <li class="p-strength__item p-strength-item">
            <div class="p-strength-item__text-wrapper">
              <div class="p-strength-item__label-wrapper">
                <span class="p-strength-item__label">特長 ３</span>
              </div>
              <div class="p-strength-item__title">平均3ヶ月でTOEFL iBT20点アップ</div>
              <div class="p-strength-item__text p-strength-item__text--mt34">
                Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
              </div>
            </div>
            <div class="p-strength-item__img-wrapper">
              <img class="p-strength-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature03.jpg">
            </div>
          </li>
        </ul>
      </div>
      <div class="p-price-banner">
        <div class="p-price-banner__inner">
          <div class="p-price-banner__title">Engressの料金プランは<br class="u-sp-only">こちら</div>
          <div class="p-price-banner__btn">
            <a class="p-price-banner__btn-link" href="<?php echo esc_url(home_url()); ?>/course">料金を見てみる</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-success">
    <div class="l-inner">
      <h2 class="p-success__heading l-section__heading">TOEFL成功事例</h2>
      <div class="p-success__body">
        <ul class="p-success__list">
          <?php $items = ['success', 'success_second', 'success_third']; ?>
          <?php foreach ($items as $item) : ?>
            <?php if (have_rows($item)) : ?>
              <?php while (have_rows($item)) : the_row(); ?>
                <li class="p-success__item p-success-item">
                  <div class="p-success-item__title"><?php the_sub_field('success_title'); ?></div>
                  <div class="p-success-item__body">
                    <div class="p-success-item__img-wrapper">
                      <div class="p-success-item__img-wrapper-inner">
                        <img class="p-success-item__img" src="<?php echo get_sub_field('success_img'); ?>">
                      </div>
                    </div>
                    <div class="p-success-item__text-wrapper">
                      <span class="p-success-item__text01"><?php the_sub_field('success_text01'); ?></span>
                      <span class="p-success-item__text02"><?php the_sub_field('success_text02'); ?></span>
                    </div>
                    <div class="p-success-item__text03"><?php the_sub_field('success_text03'); ?></div>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-flow l-section">
    <div class="l-inner">
      <h2 class="p-flow__heading l-section__heading">ご利用の流れ</h2>
      <div class="p-flow__body">
        <ul class="p-flow__list">
          <li class="p-flow__item p-flow-item">
            <div class="p-flow-item__number">01</div>
            <div class="p-flow-item__text-wrapper">
              <div class="p-flow-item__title">お問い合わせ</div>
              <div class="p-flow-item__text">まずはフォームまたはお電話からお申し込みください。</div>
            </div>
          </li>
          <li class="p-flow__item p-flow-item">
            <div class="p-flow-item__number">02</div>
            <div class="p-flow-item__text-wrapper">
              <div class="p-flow-item__title">ヒアリング</div>
              <div class="p-flow-item__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</div>
            </div>
          </li>
          <li class="p-flow__item p-flow-item">
            <div class="p-flow-item__number">03</div>
            <div class="p-flow-item__text-wrapper">
              <div class="p-flow-item__title">学習プランのご提供</div>
              <div class="p-flow-item__text">目標達成のために最適な学習プランをご提案致します。</div>
            </div>
          </li>
          <li class="p-flow__item p-flow-item">
            <div class="p-flow-item__number">04</div>
            <div class="p-flow-item__text-wrapper">
              <div class="p-flow-item__title">ご入会</div>
              <div class="p-flow-item__text">お申込み完了後、レッスンがスタートします。</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-faq l-section">
    <div class="l-inner">
      <h2 class="p-faq__heading l-section__heading">よくある質問</h2>
      <div class="p-faq__body">
        <dl class="accordion">
          <div class="accordion__item">
            <dt class="accordion__question">
              <div class="accordion__question-inner">
                Engressはサラリーマンでも学習を続けられるでしょうか？
                <div class="accordion__btn-wrapper">
                  <span class="accordion__btn-line"></span>
                </div>
              </div>
            </dt>
            <dd class="accordion__answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__question">
              <div class="accordion__question-inner">
                教材はオリジナルのものを使用しているのでしょうか？
                <div class="accordion__btn-wrapper">
                  <span class="accordion__btn-line"></span>
                </div>
              </div>
            </dt>
            <dd class="accordion__answer">ここにアコーディオンの内容が入ります。</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__question">
              <div class="accordion__question-inner">
                講師に日本人はいますか？
                <div class="accordion__btn-wrapper">
                  <span class="accordion__btn-line"></span>
                </div>
              </div>
            </dt>
            <dd class="accordion__answer">ここにアコーディオンの内容が入ります。</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__question">
              <div class="accordion__question-inner">
                TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
                <div class="accordion__btn-wrapper">
                  <span class="accordion__btn-line"></span>
                </div>
              </div>
            </dt>
            <dd class="accordion__answer">ここにアコーディオンの内容が入ります。</dd>
          </div>
        </dl>
      </div>
    </div>
  </section>
  <div class="blog-news-wrapper">
    <div class="l-inner">
      <section class="p-top-blog">
        <h2 class="p-top-blog__heading l-section__heading">ブログ</h2>
        <div class="p-top-blog__body">
          <?php
          $args = [
            'post_type' => 'blog',
            'posts_per_page' => 3,
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="p-top-blog__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-top-blog__item p-top-blog-item">
                  <a class="p-top-blog-item__link" href="<?php the_permalink(); ?>">
                    <div class="p-top-blog-item__img-wrapper">
                      <span class="p-top-blog-item__label">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'blog_category');
                        echo $terms[0]->name;
                        ?>
                      </span>
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('', ['class' => 'p-top-blog-item__img']); ?>
                      <?php else : ?>
                        <img class="p-blog-item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-image.jpg">
                      <?php endif; ?>
                    </div>
                    <div class="p-top-blog-item__text-wrapper">
                      <div class="p-top-blog-item__title"><?php echo get_the_title(); ?></div>
                      <div class="p-top-blog-item__date"><?php echo get_the_date('Y-m-d'); ?></div>
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
      </section>
      <section class="p-top-news">
        <h2 class="p-top-news__heading l-section__heading">お知らせ</h2>
        <div class="p-top-news__body">
          <?php
          $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="p-top-news__list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-top-news__item p-top-news-item">
                  <a class="p-top-news-item__link" href="<?php the_permalink(); ?>">
                    <div class="p-top-news-item__date"><?php echo get_the_date('Y-m-d'); ?></div>
                    <div class="p-top-news-item__title"><?php echo get_the_title(); ?></div>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          <?php else : ?>
            <!-- 投稿が無い場合の内容 -->
          <?php endif; ?>
        </div>
      </section>
    </div>
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