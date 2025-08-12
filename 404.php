<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <div class="p-page-mv__detail p-page-mv__detail--figures">

          <div class="p-page-mv__title-wrapper">
            <h2 class="c-page-en">404</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-thanks">
    <div class="l-inner">
      <div class="p-thanks__content">
        <div class="p-thanks__title-wrapper">
          <h2 class="p-thanks__title">ご指定のページは見つかりませんでした。</h2>
        </div>
        <div class="p-thanks__text-wrapper">
          <p class="p-thanks__text">申し訳ありませんが、ご指定のページが移動または削除されている場合があります。<br>目的のページが見つからない場合は、メニューから検索してください。</p>
        </div>
        <div class="p-thanks__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn">
            <p class="c-btn__text">TOPへ戻る</p>
            <span class="c-btn__arrow">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/arrow.svg" alt="" width="28" height="28">
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>