<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content p-page-mv__content--entry">
        <div class="p-page-mv__detail">
          <ul class="p-page-mv__breadcrumbs">
            <li class="p-page-mv__breadcrumbs-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-page-mv__breadcrumbs-link">top</a>
            <li class="p-page-mv__breadcrumbs-list">
              <span class="p-page-mv__breadcrumbs-link">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/breadcrumbs_arrow.svg" alt="" width="10" height="10">
              </span>
            <li class="p-page-mv__breadcrumbs-list">
              <p class="p-page-mv__breadcrumbs-link">エントリーフォーム</p>
            </li>
          </ul>
          <div class="p-page-mv__title-wrapper">
            <p class="c-page-en">エントリーフォーム</p>
            <h2 class="p-page-mv__title">
              <span class="c-page-ja c-page-ja--figures">ENTRY</span>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-entry-guide">
    <div class="p-entry-guide__inner l-inner">
      <div class="p-entry-guide__wrap">
        <div class="p-entry-guide__title">
          <hgroup class="c-section-title03">
            <span class="c-section-title03__sub">NEW GRADUATES</span>
            <h2 class="c-section-title03__main">新卒採用 ご応募の方へ</h2>
          </hgroup>
        </div>
        <p class="p-entry-guide__read">
          ご応募は「マイナビ」から行っております。<br>
        ご応募をお待ちしています！
        </p>
        <div class="p-entry-guide__btn">
          <a href="https://job.mynavi.jp/27/pc/search/corp267521/outline.html" target="_blank" class="p-entry-guide__btn-link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_mynavi2027.png" alt="マイナビ2027" width="240" height="48" loading="lazy" decoding="async">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-entry-form">
    <div class="p-entry-form__inner l-inner">
      <div class="p-entry-form__title">
        <hgroup class="c-section-title03">
          <span class="c-section-title03__sub">CAREER</span>
          <h2 class="c-section-title03__main">キャリア採用 ご応募の方へ</h2>
        </hgroup>
      </div>
      <p class="p-entry-form__read">
      下記のエントリーフォームより、ご応募ください。<br class="u-desktop">2〜3営業日以内に折り返しご連絡いたします。ご応募をお待ちしています！
      </p>
      <div class="p-entry-form__wrap p-form">
        <?php the_content(); ?>
      </div>
    </div>
  </section>



</main>
<?php get_footer() ?>