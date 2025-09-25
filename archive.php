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
              <p class="p-page-mv__breadcrumbs-link">NEWS</p>
            </li>
          </ul>
          <div class="p-page-mv__title-wrapper">
            <p class="c-page-en">お知らせ</p>
            <h2 class="p-page-mv__title">
              <span class="c-page-ja c-page-ja--figures">NEWS</span>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-news">
    <div class="p-news__inner l-inner">
      <ul class="p-news__cateList">
        <li class="p-news__cateItem p-news__cateItem--base <?php if(is_post_type_archive('post')) echo 'p-news__cateItem--active'; ?>">
            <a href="/news/" class="p-news__cateLink">ALL</a>
        </li>
        <?php
          $categories = get_categories();
          $current_category = get_queried_object();

          foreach($categories as $category) {
              // カテゴリーページおよび現在のカテゴリに対してアクティブクラスを付与
              $active_class = (!is_post_type_archive('post') && $current_category && $current_category->term_id == $category->term_id) ? 'p-news__cateItem--active' : '';
              echo '<li class="p-news__cateItem '.$active_class.'"><a href="'.get_category_link($category->term_id).'" class="p-news__cateLink">'.$category->name.'</a></li>';
          }
        ?>
      </ul>

      <div class="p-news__list">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            
        <div class="p-news__item p-list01">
          <div class="p-list01__area">
            <time datetime="<?php the_time('Y-m-d'); ?>" class="p-list01__date"><?php the_time('Y.m.d'); ?></time>
            <div class="p-list01__cate">
              <?php $category = get_the_category(); echo $category[0]->name; ?>
            </div>
          </div>
          <h2 class="p-list01__title"><?php the_title(); ?></h2>
          <p class="p-list01__text"><?php echo wp_trim_words( wp_strip_all_tags( get_the_content() ), 100, '...' ); ?></p>
          <div class="p-list01__btn">
            <a href="<?php the_permalink(); ?>" class="p-list01__btn">もっと見る</a>
          </div>
        </div>

        <?php endwhile;
        endif;
        ?>
      </div>

      <div class="p-news__pagination p-pagination">
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>
      </div>

    </div>
  </section>
  
</main>
<?php get_footer() ?>