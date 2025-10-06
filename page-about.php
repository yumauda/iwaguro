<?php get_header(); ?>
<main>
  <section class="p-about-mv">
    <div class="p-about-mv__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about/mv_img_pc.png" width="530" height="512" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/mv_img_sp.png" alt="" width="335" height="548" loading="lazy" decoding="async">
      </picture>
    </div>
    <div class="p-about-mv__inner l-inner">
      <div class="p-about-mv__breadcrumbs">
        <ul class="p-page-mv__breadcrumbs">
          <li class="p-page-mv__breadcrumbs-list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-page-mv__breadcrumbs-link">top</a>
          </li>
          <li class="p-page-mv__breadcrumbs-list">
            <span class="p-page-mv__breadcrumbs-link">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/breadcrumbs_arrow_white.svg" alt="" width="10" height="10">
            </span>
          </li>
          <li class="p-page-mv__breadcrumbs-list">
            <p class="p-page-mv__breadcrumbs-link"><span class="u-font-outfit">3</span>分で分かる岩黒製作所</p>
          </li>
        </ul>
      </div>

      <div class="p-about-mv__body">
        <p class="p-about-mv__en c-page-en">ABOUT</p>
        <div class="p-about-mv__wrap">
          <h1 class="p-about-mv__title">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about/mv_read.png" alt="3分で分かる岩黒製作所" width="536" height="218" loading="lazy" decoding="async">
          </h1>
          <p class="p-about-mv__read">
            岩黒製作所は、富山にある“小さな一流企業”｡<br>
            限りなき先進技術に挑戦し、<br>
            高い技術力で業界をリードし続けています｡
          </p>
        </div>
      </div>


    </div>
  </section>

  <section class="p-about-concept">
    <div class="p-about-concept__inner">
      <div class="p-about-concept__head">
        <h2 class="p-about-concept__title u-desktop">
          <span>技術のチカラで､製造現場の未来を拓く</span>
        </h2>
        <h2 class="p-about-concept__title u-mobile">
          <span>技術のチカラで､</span><br><span>製造現場の未来を拓く</span>
        </h2>
      </div>
      <p class="p-about-concept__read">
      世の中になくてはならない"薬"を届ける<br>
      薬剤包装機械製造の<br class="u-mobile">ソリューション･カンパニーとして<br>
      医療・製薬業界の発展に貢献しています。
      </p>
      <div class="p-about-concept__chronology">
        <div class="p-about-concept__chronology-head">
          <figure class="p-about-concept__chronology-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/about/p_chronology_01_pc.png" width="625" height="388" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_chronology_01_sp.png" alt="" width="293" height="188" loading="lazy" decoding="async">
            </picture>
          </figure>
          <figure class="p-about-concept__chronology-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_chronology_02.png" alt="" width="180" height="180" loading="lazy" decoding="async">
          </figure>
        </div>
        <div class="p-about-concept__chronology-body">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/about/fig_chronology_pc.png" width="530" height="512" media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about/fig_chronology_sp.png" alt="" width="335" height="548" loading="lazy" decoding="async">
          </picture>
        </div>
      </div>
      <figure class="p-about-concept__icons">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/about/fig_img_pc.png" width="1070" height="445" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/images/about/fig_img_sp.png" alt="" width="335" height="311" loading="lazy" decoding="async">
        </picture>
      </figure>
      <figure class="p-about-concept__img u-desktop">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_chronology_03.png" alt="" width="520" height="420" loading="lazy" decoding="async">
      </figure>
    </div>
  </section>

  <section class="p-about-service">
    <div class="p-about-service__inner l-inner">
      <div class="p-about-service__title">
        <h2 class="c-section-title">
          <span class="c-section-title__en">SERVICE</span>
          <span class="c-section-title__ja">事業について</span>
        </h2>
      </div>
      <p class="p-about-service__read">
        私たちが手がけるのは、製薬メーカー様のニーズに応じ、一台ずつ設計・開発される医科向けに特化した<span>フルオーダーメイド</span>の機械。<br>
        薬剤の計量誤差を限りなく抑える高度な精密技術を自社で培い、社会に欠かせない力として<span>国内トップクラスのシェア</span>を誇っています。
      </p>
      <div class="p-about-service__wrap">
        <div class="p-about-service__block">
          <div class="p-about-service__block-head">
            <h3 class="p-about-service__block-title">薬をつくる<br>
            機械</h3>
          </div>
          <p class="p-about-service__block-read">製剤機械</p>
          <p class="p-about-service__block-text">主に丸剤を製造するための機械｡</p>
          <div class="p-about-service__block-wrap">
            <figure class="p-about-service__block-img">
              <figcaption>製丸機</figcaption>
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_service_01.jpg" alt="" width="305" height="201" loading="lazy" decoding="async">
            </figure>
          </div>
        </div>
        
        <div class="p-about-service__block">
          <div class="p-about-service__block-head">
            <h3 class="p-about-service__block-title">薬をつつむ<br>
            機械</h3>
          </div>
          <p class="p-about-service__block-read">薬剤自動包装機械、<br class="u-mobile">計数充填機 <span>(ボトリング)</span></p>
          <p class="p-about-service__block-text">錠剤、カプセル剤、丸剤、顆粒剤、<br class="u-mobile">散剤などの固形剤を包装する機械｡</p>
          <div class="p-about-service__block-wrap">
            <figure class="p-about-service__block-img">
              <figcaption>PTP自動包装ライン</figcaption>
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_service_02.jpg" alt="" width="305" height="201" loading="lazy" decoding="async">
            </figure>
            <figure class="p-about-service__block-img">
              <figcaption>四方シール包装ライン</figcaption>
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_service_03.jpg" alt="" width="305" height="201" loading="lazy" decoding="async">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-about-strength">
    <div class="p-about-strength__inner l-inner">
      <div class="p-about-strength__title">
        <h2 class="c-section-title">
          <span class="c-section-title__en">STRENGTH</span>
          <span class="c-section-title__ja">岩黒製作所の強み</span>
        </h2>
      </div>
      <div class="p-about-strength__wrap">
        <div class="p-about-strength__block">
          <h3 class="p-about-strength__block-title">オンリーワンの技術力</h3>
          <figure class="p-about-strength__block-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_strength_01.jpg" alt="" width="335" height="197" loading="lazy" decoding="async">
          </figure>
          <div class="p-about-strength__block-body">
            <p class="p-about-strength__block-text">
            当社の機械は「医科向け」のため、人々の健康と安心を支える高度な技術と精密さが求められます。錠剤･粉末･顆粒など多様な薬剤への対応や、<span class="u-font-outfit">GMP (Good Manufacturing Practice)</span> 化･<span class="u-font-outfit">FA</span>化といった高度な要望に応えるべく、開発から製造･販売まで一貫して展開しています。
            </p>
          </div>
        </div>
        <div class="p-about-strength__block">
          <h3 class="p-about-strength__block-title">独自の生産・フォロー体制を確立</h3>
          <figure class="p-about-strength__block-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_strength_02.jpg" alt="" width="335" height="197" loading="lazy" decoding="async">
          </figure>
          <div class="p-about-strength__block-body">
            <p class="p-about-strength__block-text">
            「限りなき技術への挑戦」を旗印に、精密機械を製造する上で核となる精度が求められるコア部品を<span class="u-font-outfit">100％</span>自社製造する独自の生産体制を構築し、納品までのリードタイムを大幅に短縮。お客さまをお待たせしない、迅速な生産・フォロー体制を確立しています。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-about-lineup">
    <div class="p-about-lineup__inner l-inner">
      <div class="p-about-lineup__head">
        <h2 class="p-about-lineup__title">フルオーダーメイド<br class="u-mobile"> × フルラインナップ</h2>
        <p class="p-about-lineup__read">
          多種多様な薬剤に対応するこれらの機械を<br class="u-mobile">フルラインナップで取り揃えているのは、<br>
          国内の機械メーカーの中では当社<span class="u-font-outfit">1</span>社のみです。
        </p>
      </div>
      <div class="p-about-lineup__body">
        <div class="p-about-lineup__wrap">
          <div class="p-about-lineup__block">
            <div class="p-about-lineup__block-head">
              <h3 class="p-about-lineup__block-title">包装×錠剤</h3>
            </div>
            <div class="p-about-lineup__block-wrap">
              <figure class="p-about-lineup__block-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_order_01-1.png" alt="" width="335" height="220" loading="lazy" decoding="async">
                <figcaption>PTP包装ライン</figcaption>
              </figure>
              <figure class="p-about-lineup__block-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_order_01-2.png" alt="" width="335" height="220" loading="lazy" decoding="async">
                <figcaption>SP包装ライン</figcaption>
              </figure>
            </div>
          </div>
          
          <div class="p-about-lineup__block">
            <div class="p-about-lineup__block-head">
              <h3 class="p-about-lineup__block-title">包装×顆粒</h3>
            </div>
            <div class="p-about-lineup__block-wrap">
              <figure class="p-about-lineup__block-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_order_02-1.png" alt="" width="335" height="220" loading="lazy" decoding="async">
                <figcaption>四方シール包装ライン</figcaption>
              </figure>
              <figure class="p-about-lineup__block-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_order_02-2.png" alt="" width="335" height="220" loading="lazy" decoding="async">
                <figcaption>スティック包装ライン</figcaption>
              </figure>
            </div>
          </div>
          
          <div class="p-about-lineup__block">
            <div class="p-about-lineup__block-head">
              <h3 class="p-about-lineup__block-title">ボトリング<br>
              × 錠剤</h3>
            </div>
            <div class="p-about-lineup__block-wrap">
              <figure class="p-about-lineup__block-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_order_03-1.png" alt="" width="335" height="220" loading="lazy" decoding="async">
                <figcaption>錠剤計数充填機</figcaption>
              </figure>
            </div>
          </div>
          
          <div class="p-about-lineup__block">
            <div class="p-about-lineup__block-head">
              <h3 class="p-about-lineup__block-title">製剤×丸剤</h3>
            </div>
            <div class="p-about-lineup__block-wrap">
              <figure class="p-about-lineup__block-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_order_04-1.png" alt="" width="335" height="220" loading="lazy" decoding="async">
                <figcaption>製丸機</figcaption>
              </figure>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="p-about-story">
    <div class="p-about-story__inner l-inner">
      <span class="p-about-story__en p-about-story__en--01">READ MORE</span>
      <div class="p-about-story__wrap">
        <a href="<?php echo esc_url(home_url('/story01/')); ?>" class="p-about-story__link">
          <div class="p-about-story__link-head">
            <span class="p-about-story__link-num"><img src="<?php echo get_template_directory_uri(); ?>/images/about/txt_story_01.png" alt="STORY#01" width="53" height="89" loading="lazy" decoding="async"></span>
            <figure class="p-about-story__link-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_story_01.jpg" alt="" width="340" height="225" loading="lazy" decoding="async">
            </figure>
          </div>
          <div class="p-about-story__link-body">
            <p class="p-about-story__link-text">
              岩黒製作所だから<br class="u-desktop">できること｡
            </p>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/story02/')); ?>" class="p-about-story__link">
          <div class="p-about-story__link-head">
            <span class="p-about-story__link-num"><img src="<?php echo get_template_directory_uri(); ?>/images/about/txt_story_02.png" alt="STORY#02" width="53" height="89" loading="lazy" decoding="async"></span>
            <figure class="p-about-story__link-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_story_02.jpg" alt="" width="340" height="225" loading="lazy" decoding="async">
            </figure>
          </div>
          <div class="p-about-story__link-body">
            <p class="p-about-story__link-text">
              社会に求められる<br class="u-desktop">医薬の業界へ｡
            </p>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/story03/')); ?>" class="p-about-story__link">
          <div class="p-about-story__link-head">
            <span class="p-about-story__link-num"><img src="<?php echo get_template_directory_uri(); ?>/images/about/txt_story_03.png" alt="STORY#03" width="53" height="89" loading="lazy" decoding="async"></span>
            <figure class="p-about-story__link-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/about/p_story_03.jpg" alt="" width="340" height="225" loading="lazy" decoding="async">
            </figure>
          </div>
          <div class="p-about-story__link-body">
            <p class="p-about-story__link-text">
              機械創りに集中できる<br>
              風通しのよい職場｡
            </p>
          </div>
        </a>
      </div>
      <span class="p-about-story__en p-about-story__en--02">READ MORE</span>
    </div>
  </section>


</main>
<?php get_footer() ?>