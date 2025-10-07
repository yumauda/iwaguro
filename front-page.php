<?php get_header(); ?>
<main>
  <div class="p-loading js-loading-cover">
    <div class="p-loading__bg js-loading"></div>
    <div class="p-loading__logo js-logo-top">
      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.png" alt="岩黒製作所" width="315" height="38">
    </div>
  </div>
  <section class="p-mv">
    <div class="l-inner">
      <div class="p-mv__content">
        <div class="p-mv__img">
          <video src="<?php echo get_template_directory_uri() ?>/images/common/mv_video.mp4" autoplay muted loop playsinline></video>
        </div>
        <div class="p-mv__detail">
          <h2 class="p-mv__title js-mv-title">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mv_title.png" alt="あなたの技術は、生きるを支える" width="521" height="148">
          </h2>
        </div>
      </div>
    </div>
    <div class="p-mv__scroll p-scroll">
      <a href="#gradation" class="p-scroll__link">
        <span class="p-scroll__circle"></span>
        <p class="p-scroll__text">scroll</p>
      </a>
    </div>
  </section>
  <div class="p-gradation" id="gradation">
    <div class="l-inner l-gradation-inner">
      <div class="p-gradation__content">
        <div class="p-gradation__text-wrapper">
          <p class="p-gradation__text">普段、何気なく手に取っている医薬品。<br>
            そのパッケージ、<br>岩黒製作所が関わっているかもしれません。</p>
          <p class="p-gradation__text">私たちは ｢限りなき技術への挑戦｣ を信念に<br>
            医療・製薬業界の発展に貢献し続ける<br>
            薬剤包装機械製造のソリューション・カンパニー。</p>
          <p class="p-gradation__text">医薬という、<br>
            大事な命・健康を支えるものだからこそ<br>
            それらを包む技術に私たちは情熱をかけています。</p>
          <p class="p-gradation__text">ただモノづくりをするのではなく、<br>
          医薬の一つひとつに、オンリーワンの包み方を<br>
            ゼロから考え、つくり、安心を届ける。
          </p>
          <p class="p-gradation__text">創意は無限、改良は永遠。</p>
          <p class="p-gradation__text">なくてはならない「くすり」。<br>
            その一錠、一包が、<br>
            人を支える、生きる力となることを信じて。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-top-image">
    <figure class="p-top-image__img">
      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_img1.jpg" alt="" width="480" height="270">
    </figure>
    <figure class="p-top-image__img">
      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_img2.jpg" alt="" width="480" height="270">
    </figure>
    <figure class="p-top-image__img">
      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_img3.jpg" alt="" width="480" height="270">
    </figure>
  </div>

  <div class="p-line js-left--vertical">
    <section class="p-top-about js-left--row">
      <div class="c-left js-left--vertical">
        <p class="c-left__text">about</p>
      </div>
      <div class="l-inner">
        <div class="p-top-about__content">
          <div class="p-top-about__row">
            <figure class="p-top-about__img u-desktop">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_about_img.png" alt="" width="575" height="490">
            </figure>
            <div class="p-top-about__detail">
              <div class="p-top-about__title">
                <h3 class="c-section-title">
                  <span class="c-section-title__en js-about-title">about</span>
                  <span class="c-section-title__ja js-about-title">私たちについて</span>
                </h3>
              </div>
              <div class="p-top-about__block">
                <div class="p-top-about__detail-top">
                  <p class="p-top-about__detail-title">だれにも真似できない</p>
                  <p class="p-top-about__detail-title">オーダーメイドなものづくりを｡</p>
                  <p class="p-top-about__detail-en">Always Challenging.</p>
                </div>
                <figure class="p-top-about__img u-mobile">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_about_img.png" alt="" width="575" height="490">
                </figure>
                <div class="p-top-about__text-wrapper">
                  <p class="p-top-about__text">岩黒製作所は、<br class="u-mobile">国内トップクラスのシェアを誇る<br>
                    医科向けの自動包装機の開発・製造を手がける<br>
                    富山の<span class="c-text-gradation">小さな一流企業</span>です。</p>
                </div>
                <div class="p-top-about__btn">
                  <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-btn">
                    <p class="c-btn__text">view more</p>
                    <span class="c-btn__arrow">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-top-interview js-left--row-interview">
      <div class="c-left js-left--vertical-interview">
        <p class="c-left__text">interview</p>
      </div>
      <div class="l-inner">
        <div class="p-top-interview__content">
          <div class="p-top-interview__title">
            <h3 class="c-section-title">
              <span class="c-section-title__en js-interview-title">inter<br class="u-mobile">view</span>
              <span class="c-section-title__ja js-interview-title">仲間を知る</span>
            </h3>
          </div>
          <div class="p-top-interview__row">
            <p class="p-top-interview__gradation-text">
              共に創ろう。ワクワクする機械｡
            </p>
            <div class="p-top-interview__btn u-desktop">
              <a href="<?php echo home_url('/interview/'); ?>" class="c-btn">
                <p class="c-btn__text">view more</p>
                <span class="c-btn__arrow">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="p-top-interview__slider">
            <!-- Slider main container -->
            <div class="swiper swiper1">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <a href="<?php echo home_url('/interview/interview_mt/'); ?>" class="p-top-interview__slider-card">
                    <div class="p-top-interview__num-wrapper">
                      <p class="p-top-interview__no">no.</p>
                      <p class="p-top-interview__num">01</p>
                    </div>
                    <figure class="p-top-interview__slider-img">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/interview_img1.png" alt="" width="270" height="270">
                    </figure>
                    <div class="p-top-interview__slider-detail">
                      <p class="p-top-interview__slider-name">
                        t.m.
                      </p>
                      <p class="p-top-interview__slider-text">挑戦するから実現できる。<br>
                        思い通りに動いた瞬間、<br>
                        モノづくりの醍醐味を感じる｡</p>
                      <div class="p-top-interview__tag-wrapper">
                        <span class="p-top-interview__tag">#制御設計</span>
                        <span class="p-top-interview__tag">#キャリア入社</span>
                        <span class="p-top-interview__tag">#機械科 卒業</span>
                        <span class="p-top-interview__tag">#チームワーク</span>
                        <span class="p-top-interview__tag">#仕事を通して成長できる</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="<?php echo home_url('/interview/interview_yn/'); ?>" class="p-top-interview__slider-card">
                    <div class="p-top-interview__num-wrapper">
                      <p class="p-top-interview__no">no.</p>
                      <p class="p-top-interview__num">02</p>
                    </div>
                    <figure class="p-top-interview__slider-img">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/interview_img2.png" alt="" width="270" height="270">
                    </figure>
                    <div class="p-top-interview__slider-detail">
                      <p class="p-top-interview__slider-name">
                        y.n.
                      </p>
                      <p class="p-top-interview__slider-text">同じ機械がない面白さ。<br>
                      複雑な部品加工ほど<br>
                      大きな達成感を味わえる。</p>
                      <div class="p-top-interview__tag-wrapper">
                        <span class="p-top-interview__tag">#機械加工</span>
                        <span class="p-top-interview__tag">#キャリア入社</span>
                        <span class="p-top-interview__tag">#挑戦を求めて</span>
                        <span class="p-top-interview__tag">#機械を一から作り上げる面白さと達成感</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="<?php echo home_url('/interview/interview_yh/'); ?>" class="p-top-interview__slider-card">
                    <div class="p-top-interview__num-wrapper">
                      <p class="p-top-interview__no">no.</p>
                      <p class="p-top-interview__num">03</p>
                    </div>
                    <figure class="p-top-interview__slider-img">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/interview_img3.png" alt="" width="270" height="270">
                    </figure>
                    <div class="p-top-interview__slider-detail">
                      <p class="p-top-interview__slider-name">
                        y.h.
                      </p>
                      <p class="p-top-interview__slider-text">セールスエンジニアとして<br>
                      社内外の人たちと一緒にモノづくりをする楽しさと達成感。</p>
                      <div class="p-top-interview__tag-wrapper">
                        <span class="p-top-interview__tag">#営業</span>
                        <span class="p-top-interview__tag">#工学部 卒業</span>
                        <span class="p-top-interview__tag">#設計から営業職へ</span>
                        <span class="p-top-interview__tag">#お客さまと共に</span>
                        <span class="p-top-interview__tag">#ワクワクする面白さ</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="<?php echo home_url('/interview/interview_nf/'); ?>" class="p-top-interview__slider-card">
                    <div class="p-top-interview__num-wrapper">
                      <p class="p-top-interview__no">no.</p>
                      <p class="p-top-interview__num">04</p>
                    </div>
                    <figure class="p-top-interview__slider-img">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/interview_img4.png" alt="" width="270" height="270">
                    </figure>
                    <div class="p-top-interview__slider-detail">
                      <p class="p-top-interview__slider-name">
                        n.f.
                      </p>
                      <p class="p-top-interview__slider-text">仕上課から機械設計へ。<br>
                      機械づくりの難しさと楽しさを感じる毎日。</p>
                      <div class="p-top-interview__tag-wrapper">
                        <span class="p-top-interview__tag">#機械設計</span>
                        <span class="p-top-interview__tag">#新卒入社</span>
                        <span class="p-top-interview__tag">#機械工学 専攻</span>
                        <span class="p-top-interview__tag">#経験を糧に</span>
                        <span class="p-top-interview__tag">#頼られる設計者を目指して</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="<?php echo home_url('/interview/interview_rn/'); ?>" class="p-top-interview__slider-card">
                    <div class="p-top-interview__num-wrapper">
                      <p class="p-top-interview__no">no.</p>
                      <p class="p-top-interview__num">05</p>
                    </div>
                    <figure class="p-top-interview__slider-img">
                      <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/interview_img5.png" alt="" width="270" height="270">
                    </figure>
                    <div class="p-top-interview__slider-detail">
                      <p class="p-top-interview__slider-name">
                        r.n.
                      </p>
                      <p class="p-top-interview__slider-text">目標は、一台の機械を任されること！そのために積極的に学ぶ姿勢を大切にしています。</p>
                      <div class="p-top-interview__tag-wrapper">
                        <span class="p-top-interview__tag">#製造</span>
                        <span class="p-top-interview__tag">#組み立て･調整</span>
                        <span class="p-top-interview__tag">#部署間連携</span>
                        <span class="p-top-interview__tag">#自ら聞く姿勢を大切に</span>
                        <span class="p-top-interview__tag">#風通しの良い職場</span>
                      </div>
                    </div>
                  </a>
                </div>



              </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev p-top-interview__prev">
              <figure class="p-top-interview__nav-img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/prev.png" alt="" width="54" height="54">
              </figure>
            </div>
            <div class="swiper-button-next p-top-interview__next">
              <figure class="p-top-interview__nav-img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/next.png" alt="" width="54" height="54">
              </figure>
            </div>

          </div>
          <div class="p-top-interview__btn p-top-interview__btn--sp">
            <a href="#" class="c-btn">
              <p class="c-btn__text">view more</p>
              <span class="c-btn__arrow">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="p-top-story js-left--row-story" id="STORY">
      <div class="c-left js-left--vertical-story">
        <p class="c-left__text">story</p>
      </div>
      <div class="l-inner l-story-inner">
        <div class="p-top-story__content">
          <div class="p-top-story__block">
            <a href="<?php echo esc_url(home_url('/story01')); ?>" class="p-top-story__link">
              <div class="p-top-story__img1">
                <figure class="p-top-story__img">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_story_1.jpg" media="(min-width: 768px)" width="1300" height="540" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_story_1_sp.jpg" alt="" width="359" height="359">
                  </picture>
                </figure>
              </div>
              <div class="p-top-story__detail">
                <p class="p-top-story__num">STORY #<span class="u-font-outfit">01</span></p>
                <h3 class="p-top-story__title">岩黒製作所だから<br>
                  できること。</h3>
                <div class="p-top-story__bottom">
                  <div class="p-top-story__text-wrapper">
                    <p class="p-top-story__text">創意は無限、改良は永遠。止まらない情熱が</p>
                    <p class="p-top-story__text">精度の高い唯一無二の機械をつくる｡</p>
                  </div>
                  <div class="p-top-story__arrow">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_story_arrow.svg" alt="" width="28" height="28">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="p-top-story__block">
            <a href="<?php echo esc_url(home_url('/story02')); ?>" class="p-top-story__link">
              <figure class="p-top-story__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_story_2.jpg" media="(min-width: 768px)" width="1300" height="540" />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_story_2_sp.jpg" alt="" width="359" height="359">
                </picture>
              </figure>
              <div class="p-top-story__detail">
                <p class="p-top-story__num">STORY #<span class="u-font-outfit">02</span></p>
                <h3 class="p-top-story__title">社会に求められる<br>
                  医薬の業界へ。</h3>
                <div class="p-top-story__bottom">
                  <div class="p-top-story__text-wrapper">
                    <p class="p-top-story__text">社会を支える医薬の業界で</p>
                    <p class="p-top-story__text">本当に信頼されるものをつくり、届ける｡</p>
                  </div>
                  <div class="p-top-story__arrow">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_story_arrow.svg" alt="" width="28" height="28">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="p-top-story__block">
            <a href="<?php echo esc_url(home_url('/story03')); ?>" class="p-top-story__link">
              <figure class="p-top-story__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_story_3.jpg" media="(min-width: 768px)" width="1300" height="540" />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_story_3_sp.jpg" alt="" width="359" height="359">
                </picture>
              </figure>
              <div class="p-top-story__detail">
                <p class="p-top-story__num">STORY #<span class="u-font-outfit">03</span></p>
                <h3 class="p-top-story__title">機械創りに集中できる<br>
                  風通しのよい職場。</h3>
                <div class="p-top-story__bottom">
                  <div class="p-top-story__text-wrapper">
                    <p class="p-top-story__text">オーダーメイドで1つしかない機械をつくる</p>
                    <p class="p-top-story__text">自由で、刺激的な職場です｡</p>
                  </div>
                  <div class="p-top-story__arrow">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_story_arrow.svg" alt="" width="28" height="28">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="p-pickup js-left--row-pickup">
      <div class="c-left js-left--vertical-pickup">
        <p class="c-left__text">pick up</p>
      </div>
      <div class="l-inner">
        <div class="p-pickup__content">
          <ul class="p-pickup__lists">
            <li class="p-pickup__list">
              <h3 class="p-pickup__title">
                <span class="p-pickup__title-en">job</span>
                <span class="p-pickup__title-ja">職種紹介</span>
              </h3>
              <figure class="p-pickup__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/pickup_img1.png" alt="" width="270" height="270">
              </figure>
              <div class="p-pickup__detail">
                <p class="p-pickup__detail-text">
                  各部門の仕事について紹介します｡
                </p>
                <div class="p-pickup__btn">
                  <a href="<?php echo esc_url(home_url('/job/')); ?>" class="c-btn">
                    <p class="c-btn__text">view more</p>
                    <span class="c-btn__arrow">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </li>
            <li class="p-pickup__list">
              <h3 class="p-pickup__title">
                <span class="p-pickup__title-en">figures</span>
                <span class="p-pickup__title-ja">数字で見る岩黒製作所</span>
              </h3>
              <figure class="p-pickup__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/pickup_img2.png" alt="" width="270" height="270">
              </figure>
              <div class="p-pickup__detail">
                <p class="p-pickup__detail-text">
                  気になる数字について紹介します
                </p>
                <div class="p-pickup__btn">
                  <a href="<?php echo esc_url(home_url('/figures/')); ?>" class="c-btn">
                    <p class="c-btn__text">view more</p>
                    <span class="c-btn__arrow">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </li>
            <li class="p-pickup__list">
              <h3 class="p-pickup__title">
                <span class="p-pickup__title-en">style</span>
                <span class="p-pickup__title-ja">福利厚生・制度</span>
              </h3>
              <figure class="p-pickup__img">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/pickup_img3.png" alt="" width="270" height="270">
              </figure>
              <div class="p-pickup__detail">
                <p class="p-pickup__detail-text">
                  働く環境について紹介します｡
                </p>
                <div class="p-pickup__btn">
                  <a href="<?php echo esc_url(home_url('/style/')); ?>" class="c-btn">
                    <p class="c-btn__text">view more</p>
                    <span class="c-btn__arrow">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="p-top-news">
      <div class="c-left js-left--vertical-news">
        <p class="c-left__text">news</p>
      </div>
      <div class="l-inner">
        <div class="p-top-news__content">
          <div class="p-top-news__bg">
            <div class="p-top-news__detail">
              <h3 class="c-section-title">
                <span class="c-section-title__en js-news-title">news</span>
                <span class="c-section-title__ja js-news-title">お知らせ</span>
              </h3>
              <div class="p-top-news__btn p-top-news__btn--desktop">
                <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn">
                  <p class="c-btn__text">view more</p>
                  <span class="c-btn__arrow">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <ul class="p-top-news__lists">
              <?php 
                query_posts([
                  'posts_per_page' => 4, //投稿件数
                  'orderby' => 'date',
                  'order' => 'DESC'
                ]);
                if (have_posts()) :
                while (have_posts()) : the_post();
              ?>

              <li class="p-top-news__list">
                <a href="<?php the_permalink(); ?>" class="p-top-news__link">
                  <div class="p-top-news__meta">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="p-top-news__time"><?php the_time('Y.m.d'); ?></time>
                    <span class="p-top-news__category"><?php $category = get_the_category(); echo $category[0]->name; ?></span>
                  </div>
                  <p class="p-top-news__link-title"><?php the_title(); ?></p>
                </a>
              </li>

              <?php endwhile;
                endif;
                wp_reset_query(); // クエリのリセット
              ?>
            </ul>
          </div>
          <div class="p-top-news__btn p-top-news__btn--mobile">
            <a href="" class="c-btn">
              <p class="c-btn__text">view more</p>
              <span class="c-btn__arrow">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                </svg>
              </span>
            </a>
          </div>

        </div>
      </div>
    </section>
    <section class="p-challenge">
      <div class="c-left js-left--vertical-line">
        <p class="c-left__text">recruit</p>
      </div>
      <div class="l-inner">
        <div class="p-challenge__content">
          <figure class="p-challenge__top">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_recruit_top.png" media="(min-width: 768px)" width="1365" height="78" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_recruit_top_sp.png" alt="" width="355" height="227">
            </picture>
          </figure>
          <div class="p-challenge__box">
            <div class="p-challenge__left">
              <div class="p-challenge__title-wrapper">
                <h3 class="p-challenge__title">
                  <span class="p-challenge__title-ja c-text-gradation c-text-gradation--page">まだ見ぬ技術に</span>
                  <span class="p-challenge__title-ja c-text-gradation c-text-gradation--page">挑戦しよう！</span>
                </h3>
              </div>
              <div class="p-challenge__text-wrapper">
                <p class="p-challenge__text">私たちが目指すのは、モノづくりではなく“コト”づくり。<br>
                  お客さまの要望をどう実現するか、考えるのは難しい。<br class="u-desktop">
                  でも、だからこそ面白い。<br><br class="u-mobile">
                  期待に応えるモノづくりで、<br class="u-mobile">一生ゴトの仕事をしよう！</p>
              </div>
            </div>

            <div class="p-challenge__right">
              <a href="#" class="p-challenge__link">
                <p class="p-challenge__link-text">新卒採用 募集要項</p>
                <span class="p-challenge__link-arrow">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/challenge_arrow.svg" alt="" width="28" height="28">
                </span>
              </a>
              <a href="#" class="p-challenge__link">
                <p class="p-challenge__link-text">キャリア採用 募集要項</p>
                <span class="p-challenge__link-arrow">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/challenge_arrow.svg" alt="" width="28" height="28">
                </span>
              </a>
              <div class="p-challenge__btn-wrapper">
                <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="c-btn c-btn--306">
                  <p class="c-btn__text">エントリーする</p>
                  <span class="c-btn__arrow">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <figure class="p-challenge__bottom">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_recruit_bottom.png" media="(min-width: 768px)" width="1300" height="540" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_recruit_bottom_sp.png" alt="" width="355" height="227">
            </picture>
          </figure>
        </div>
      </div>
    </section>
    <section class="p-top-line">
      <div class="c-left js-left--vertical-line">
        <p class="c-left__text">line</p>
      </div>
      <div class="p-top-line__inner l-inner">
        <!-- 
        <div class="p-top-line__content">
          <div class="p-top-line__detail">
            <div class="p-top-line__title">
              <h3 class="c-section-title">
                <span class="c-section-title__en js-line-title">line</span>
                <span class="c-section-title__ja js-line-title">LINE公式アカウント</span>
              </h3>
            </div>
            <figure class="p-top-line__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/line.png" alt="" width="100" height="100">
            </figure>
          </div>
          <div class="p-top-line__text-wrapper">
            <p class="p-top-line__text">LINEの友だち登録をしていただくと<br>
              会社訪問のお問い合わせができます。<br>
              いつでもご連絡をおまちしております！</p>
          </div>
          <div class="p-top-line__btn-wrapper">
            <p class="p-top-line__btn-topText">LINE公式アカウント</p>
            <a href="" class="c-btn c-btn--300">
              <p class="c-btn__text">ご登録はこちら</p>
              <span class="c-btn__arrow">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="c-btn__path" d="M16.3464 11.6291H13.2691C13.1885 11.632 13.1083 11.6186 13.033 11.5897C12.9578 11.5609 12.8892 11.5172 12.8312 11.4612C12.7732 11.4052 12.7271 11.3382 12.6956 11.264C12.6641 11.1898 12.6479 11.1101 12.6479 11.0295C12.6479 10.9489 12.6641 10.8692 12.6956 10.795C12.7271 10.7208 12.7732 10.6538 12.8312 10.5978C12.8892 10.5419 12.9578 10.4982 13.033 10.4693C13.1083 10.4404 13.1885 10.427 13.2691 10.4299L17.7946 10.4299C17.9536 10.43 18.106 10.4932 18.2184 10.6056C18.3309 10.718 18.3941 10.8705 18.3942 11.0295L18.3942 15.555C18.397 15.6355 18.3836 15.7158 18.3548 15.791C18.3259 15.8662 18.2822 15.9349 18.2262 15.9929C18.1703 16.0508 18.1032 16.0969 18.029 16.1284C17.9549 16.1599 17.8751 16.1762 17.7946 16.1762C17.714 16.1762 17.6342 16.1599 17.5601 16.1284C17.4859 16.0969 17.4188 16.0508 17.3629 15.9929C17.3069 15.9349 17.2632 15.8662 17.2343 15.791C17.2055 15.7158 17.1921 15.6355 17.1949 15.555L17.1949 12.4777L11.7134 17.9592C11.6009 18.0717 11.4483 18.1349 11.2892 18.1349C11.13 18.1349 10.9774 18.0717 10.8649 17.9592C10.7524 17.8466 10.6892 17.694 10.6892 17.5349C10.6892 17.3758 10.7524 17.2231 10.8649 17.1106L16.3464 11.6291Z" fill="white" />
                </svg>
              </span>
            </a>
          </div>
        </div>
         -->
        <div class="p-top-line__slider">

          <div class="slider-wrapper">
            <ul class="slider">
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_1.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_2.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_3.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_4.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_5.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_6.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_1.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_2.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_3.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_4.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_5.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_6.jpg" alt="" width="400" height="400">
                </figure>
              </li>
            </ul>
            <ul class="slider">
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_1.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_2.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_3.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_4.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_5.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_6.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_1.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_2.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_3.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_4.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_5.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_6.jpg" alt="" width="400" height="400">
                </figure>
              </li>
            </ul>
          </div>
          <div class="slider-wrapper">
            <ul class="slider slider--right">
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_7.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_8.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_9.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_10.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_11.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_12.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_7.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_8.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_9.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_10.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_11.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_12.jpg" alt="" width="400" height="400">
                </figure>
              </li>
            </ul>
            <ul class="slider slider--right">
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_7.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_8.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_9.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_10.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_11.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_12.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_7.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_8.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_9.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_10.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_11.jpg" alt="" width="400" height="400">
                </figure>
              </li>
              <li class="slide">
                <figure class="p-slider__img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/scroll_12.jpg" alt="" width="400" height="400">
                </figure>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer() ?>