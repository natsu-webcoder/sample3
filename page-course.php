<?php get_header(); ?>
<main>
  <section class="p-price">
    <div class="l-inner">
      <h2 class="p-price__heading l-section__heading">料金体系</h2>
      <div class="p-price__body">
        <div class="p-price__block">
          <div class="p-price__item">入会金 <br class="u-sp-only">39,800円</div>
          <div class="p-price__plus">
            <span class="p-price__plus-line"></span>
          </div>
          <div class="p-price__item">月額費用</div>
        </div>
        <div class="p-price__text">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</div>
      </div>
    </div>
  </section>
  <section class="p-plan">
    <div class="l-inner">
      <h2 class="p-plan__heading l-section__heading">料金表</h2>
      <div class="p-plan__body js-scrollable">
        <ul class="p-plan__list">
          <li class="p-plan__item p-plan-item">
            <div class="p-plan-item__title">基礎プラン</div>
            <div class="p-plan-item__body">
              <div class="p-plan-item__price"><?php the_field('plan_price1'); ?></div>
              <div class="p-plan-item__price-label">*月額（税抜価格）</div>
              <div class="p-plan-item__content">
                <div class="p-plan-item__text">カリキュラム作成</div>
                <div class="p-plan-item__text">TOEFL学習サポート</div>
                <div class="p-plan-item__text">週一回のビデオMTG</div>
              </div>
            </div>
          </li>
          <li class="p-plan__item p-plan-item">
            <div class="p-plan-item__title">演習プラン</div>
            <div class="p-plan-item__body">
              <div class="p-plan-item__price"><?php the_field('plan_price2'); ?></div>
              <div class="p-plan-item__price-label">*月額（税抜価格）</div>
              <div class="p-plan-item__content">
                <div class="p-plan-item__text">カリキュラム作成</div>
                <div class="p-plan-item__text">TOEFL学習サポート</div>
                <div class="p-plan-item__text">月二回の模試（解説付き）</div>
              </div>
            </div>
          </li>
          <li class="p-plan__item p-plan-item">
            <div class="p-plan-item__title p-plan-item__title--highlight">
              <div class="p-plan-item__title-label">おすすめ</div>志望校対策プラン</span>
            </div>
            <div class="p-plan-item__body">
              <div class="p-plan-item__price p-plan-item__price--highlight"><?php the_field('plan_price3'); ?></div>
              <div class="p-plan-item__price-label">*月額（税抜価格）</div>
              <div class="p-plan-item__content">
                <div class="p-plan-item__text">カリキュラム作成</div>
                <div class="p-plan-item__text">TOEFL学習サポート</div>
                <div class="p-plan-item__text">週一回のビデオMTG</div>
                <div class="p-plan-item__text">月二回の模試（解説付き）</div>
                <div class="p-plan-item__text">週一の英語面接対策</div>
              </div>
            </div>
          </li>
          <li class="p-plan__item p-plan-item">
            <div class="p-plan-item__title">フレックスプラン</div>
            <div class="p-plan-item__body">
              <div class="p-plan-item__price"><?php the_field('plan_price4'); ?></div>
              <div class="p-plan-item__price-label">*月額（税抜価格）</div>
              <div class="p-plan-item__content">
                <div class="p-plan-item__text p-plan-item__text--nocheck">＊別途ご相談ください</div>
              </div>
            </div>
          </li>
        </ul>
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