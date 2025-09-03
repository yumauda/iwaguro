<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content p-page-mv__content--story03">
        <div class="p-page-mv__detail p-page-mv__detail--story03">
          <ul class="p-page-mv__breadcrumbs">
            <li class="p-page-mv__breadcrumbs-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-page-mv__breadcrumbs-link">top</a>
            </li>
            <li class="p-page-mv__breadcrumbs-list">
              <span class="p-page-mv__breadcrumbs-link">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/breadcrumbs_arrow.svg" alt="" width="10" height="10">
              </span>
            </li>
            <li class="p-page-mv__breadcrumbs-list">
              <p class="p-page-mv__breadcrumbs-link">福利厚生・制度</p>
            </li>
          </ul>
          <div class="p-page-mv__title-wrapper">
            <p class="c-page-en">WORK STYLE</p>
            <figure class="p-page-mv__img u-mobile">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_benefits.png" alt="" width="659" height="569">
            </figure>
            <h2 class="p-page-mv__title p-page-mv__title--story03">
              <span class="c-page-ja">福利厚生・制度</span>
            </h2>
          </div>
          <div class="p-page-mv__text-wrapper">
            <p class="p-page-mv__text">
              生き生きと働くための仕組みや制度をご紹介します。
            </p>
          </div>
        </div>
        <figure class="p-page-mv__img u-desktop">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/mv_benefits.png" alt="" width="659" height="569">
        </figure>
      </div>
    </div>
  </section>

  
</main>
<?php get_footer() ?>