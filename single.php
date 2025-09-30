<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content p-page-mv__content--news">
        <div class="p-page-mv__detail">
          <ul class="p-page-mv__breadcrumbs">
            <li class="p-page-mv__breadcrumbs-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-page-mv__breadcrumbs-link">top</a>
            <li class="p-page-mv__breadcrumbs-list">
              <span class="p-page-mv__breadcrumbs-link">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/breadcrumbs_arrow.svg" alt="" width="10" height="10">
              </span>
            <li class="p-page-mv__breadcrumbs-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-page-mv__breadcrumbs-link">NEWS</a>
            </li>
            <li class="p-page-mv__breadcrumbs-list">
              <span class="p-page-mv__breadcrumbs-link">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/breadcrumbs_arrow.svg" alt="" width="10" height="10">
              </span>
            <li class="p-page-mv__breadcrumbs-list">
              <p class="p-page-mv__breadcrumbs-link"><?php the_title(); ?></p>
            </li>
          </ul>
          <div class="p-page-mv__title-wrapper">
            <p class="c-page-en">お知らせ</p>
            <p class="p-page-mv__title">
              <span class="c-page-ja c-page-ja--figures">NEWS</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-news-single">
    <div class="p-news-single__inner l-inner">
      <div class="p-news-single__head">
        <div class="p-news-single__area">
          <div class="p-news-single__cate">
            <?php $category = get_the_category(); echo $category[0]->name; ?>
          </div>
          <time datetime="<?php the_time('Y-m-d'); ?>" class="p-news-single__date"><?php the_time('Y.m.d'); ?></time>
        </div>
        <h1 class="p-news-single__title"><?php the_title(); ?></h1>
        <figure class="p-news-single__img">
          <?php the_post_thumbnail(); ?>
        </figure>
      </div>
      <div class="p-news-single__content p-article">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer() ?>

