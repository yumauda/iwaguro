<?php get_header(); ?>
<main>
  <section class="p-page-mv">
    <div class="l-inner">
      <div class="p-page-mv__content">
        <div class="p-page-mv__detail p-page-mv__detail--figures">
          <div class="p-page-mv__title-wrapper">
            <h2 class="c-page-en">ENTRY</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-thanks">
    <div class="l-inner">
      <div class="p-thanks__content">
        <div class="p-thanks__title-wrapper">
          <h2 class="p-thanks__title">ご応募いただき、誠にありがとうございます。</h2>
        </div>
        <div class="p-thanks__text-wrapper">
          <p class="p-thanks__text">
            自動返信メールをご入力いただいたメールアドレスに送信しております。<br>
            メールが届かない場合は、お手数ですが、もう一度メールアドレスをご確認のうえ送信をお願いいたします。</p>
          <p class="p-thanks__text">3営業日以内を目安に担当者よりメールにてご連絡いたします。<br>
            3日経過しても連絡がない場合、もう一度お問い合わせいただくか、お電話にてご連絡をお願いいたします。</p>
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