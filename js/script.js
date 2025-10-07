jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".p-totop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }

    // ヘッダーのアクティブ状態制御（トップページのみ）
    if (typeof wpPageInfo !== "undefined" && wpPageInfo.isFrontPage) {
      if ($(this).scrollTop() > 600) {
        $(".p-header").addClass("is-active");
        $(".p-header__link").addClass("is-active");
        $(".p-header__path").addClass("is-active");
        $(".p-header__btn-link").addClass("is-active");
        $(".p-drawer-icon").addClass("is-bg");
        $(".p-scroll").addClass("is-active");
      } else {
        $(".p-header").removeClass("is-active");
        $(".p-header__link").removeClass("is-active");
        $(".p-header__path").removeClass("is-active");
        $(".p-header__btn-link").removeClass("is-active");
        $(".p-drawer-icon").removeClass("is-bg");
        $(".p-scroll").removeClass("is-active");
      }
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  /* $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  }); */
  $(function () {
    $(".p-tab__btn").on("click", function () {
      activateTab($(this));
    });
  });

  // 初期ロード時にURLパラメータをチェックし、該当するタブを開く
  const urlParams = new URLSearchParams(window.location.search);
  const tabParam = urlParams.get("tab");
  if (tabParam) {
    const targetTabButton = $(`#tabParam`);
    if (targetTabButton.length) {
      activateTab(targetTabButton);
    }
  }

  function activateTab(tabButton) {
    const tab_btn = $(".p-tab__btn");
    const tab_panel = $(".p-tab__panel");
    const tabID = "#" + tabButton.attr("aria-controls");

    tab_btn.attr("aria-selected", false).attr("aria-expanded", false);
    tabButton.attr("aria-selected", true).attr("aria-expanded", true);
    tab_panel.attr("aria-hidden", true);
    $(tabID).attr("aria-hidden", false);
  }
  $("#drawer a[href]").on("click", function (event) {
    $(".p-drawer-icon").trigger("click");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const RUNNING_VALUE = "running"; // アニメーション実行中のときに付与する予定のカスタムデータ属性の値
  const IS_OPENED_CLASS = "is-opened"; // アイコン操作用のクラス名

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      // デフォルトの挙動を無効化
      event.preventDefault();

      // 連打防止用。アニメーション中だったらクリックイベントを受け付けないでリターンする
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      let icon = element.children[0];
      // detailsのopen属性を判定
      if (element.open) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);
        // アニメーションを実行
        const closingAnim = content.animate(
          closingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を付与
        element.dataset.animStatus = RUNNING_VALUE;

        icon.classList.toggle(IS_OPENED_CLASS);
        // アニメーションの完了後に
        closingAnim.onfinish = () => {
          // open属性を取り除く
          element.removeAttribute("open");
          // アニメーション実行中用の値を取り除く
          element.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開くときの処理
        // open属性を付与
        element.setAttribute("open", "true");

        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);
        // アニメーションを実行
        const openingAnim = content.animate(
          openingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を入れる
        element.dataset.animStatus = RUNNING_VALUE;

        icon.classList.toggle(IS_OPENED_CLASS);
        // アニメーション完了後にアニメーション実行中用の値を取り除く
        openingAnim.onfinish = () => {
          element.dataset.animStatus = "";
        };
      }
    });
  });
};

/**
 * アニメーションの時間とイージング
 */
const animTiming = {
  duration: 400,
  easing: "ease-out",
};

/**
 * アコーディオンを閉じるときのキーフレーム
 */
const closingAnimKeyframes = (content) => [
  {
    height: content.offsetHeight + "px", // height: "auto"だとうまく計算されないため要素の高さを指定する
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];

/**
 * アコーディオンを開くときのキーフレーム
 */
const openingAnimKeyframes = (content) => [
  {
    height: 0,
    opacity: 0,
  },
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
];
jQuery(".p-drawer-icon").on("click", function (e) {
  e.preventDefault();
  jQuery(".p-header__content").toggleClass("is-active");
  jQuery(".p-drawer-icon").toggleClass("is-active");
  jQuery(".p-drawer-content").toggleClass("is-active");
  jQuery(".p-drawer-background").toggleClass("is-active");
  return false;
});

window.onload = function () {
  document.body.classList.add("fade-in");
};

let scrollPosition = 0; // スクロール位置を記録する変数

jQuery(document).ready(function ($) {
  $(".p-drawer-icon, .p-drawer-icon--barge").on("click", function () {
    $("body").toggleClass("drawer-open");
  });
});

jQuery(document).ready(function ($) {
  $(".js-btn").on("click", function () {
    $(".js-news-wrapper1").slideDown();
    $(this).hide();
  });
});
jQuery(document).ready(function ($) {
  $(".js-btn2").on("click", function () {
    $(".js-news-wrapper2").slideDown();
    $(this).hide();
  });
});
jQuery(document).ready(function ($) {
  $(".js-btn3").on("click", function () {
    $(".js-news-wrapper3").slideDown();
    $(this).hide();
  });
});

jQuery(document).ready(function ($) {
  $(".p-tabNews__btn").each(function () {
    var postCount = parseInt($(this).data("post-count"), 1);
    // 表示する投稿の数を設定（例: 4）
    var displayCount = 4;

    // 投稿数が表示数以下の場合、ボタンを非表示にする
    if (postCount <= displayCount) {
      $(this).hide();
    }
  });
});
jQuery(".js-modal-btn").on("click", function (e) {
  e.preventDefault();
  jQuery(".p-modal").toggleClass("is-active");
  return false;
});
jQuery(".p-modal__close").on("click", function (e) {
  e.preventDefault();
  jQuery(".p-modal").removeClass("is-active");
  return false;
});
jQuery(".js-view").on("click", function (e) {
  e.preventDefault();
  jQuery(".p-digital-modal").toggleClass("is-active");
  return false;
});
jQuery(".p-digital-modal__close").on("click", function (e) {
  e.preventDefault();
  jQuery(".p-digital-modal").removeClass("is-active");
  return false;
});

document.addEventListener("DOMContentLoaded", () => {
  const allowMultiple = false; // trueなら複数同時オープン可

  function openPanel(li, trigger, panel) {
    li.classList.add("is-open");
    trigger.setAttribute("aria-expanded", "true");
    panel.setAttribute("aria-hidden", "false");

    // 一旦0にしてから高さを計測→設定（トランジションを確実に走らせる）
    panel.style.maxHeight = "0px";
    requestAnimationFrame(() => {
      panel.style.maxHeight = panel.scrollHeight + "px";
    });
  }

  function closePanel(li, trigger, panel) {
    li.classList.remove("is-open");
    trigger.setAttribute("aria-expanded", "false");
    panel.setAttribute("aria-hidden", "true");
    panel.style.maxHeight = "0px";
  }

  // ウィンドウリサイズで開いてるパネルの高さ再計算
  window.addEventListener("resize", () => {
    document
      .querySelectorAll(
        ".p-drawer-content__list.is-open > .p-drawer-content__toggle-lists"
      )
      .forEach((panel) => {
        panel.style.maxHeight = panel.scrollHeight + "px";
      });
  });

  // クリック（イベントデリゲート）
  document.addEventListener("click", (e) => {
    const trigger = e.target.closest(".p-drawer-content__open");
    if (!trigger) return;

    // 親liと対応パネルを取得
    const li = trigger.closest(".p-drawer-content__list");
    const panel = li.querySelector(":scope > .p-drawer-content__toggle-lists");
    if (!panel) return;

    // 親リンクの遷移は止める（トグル専用にする場合）
    e.preventDefault();

    const isExpanded = trigger.getAttribute("aria-expanded") === "true";

    if (isExpanded) {
      closePanel(li, trigger, panel);
    } else {
      if (!allowMultiple) {
        // 他を閉じる
        document
          .querySelectorAll(".p-drawer-content__list.is-open")
          .forEach((otherLi) => {
            if (otherLi === li) return;
            const otherTrigger = otherLi.querySelector(
              ":scope > .p-drawer-content__open"
            );
            const otherPanel = otherLi.querySelector(
              ":scope > .p-drawer-content__toggle-lists"
            );
            if (otherTrigger && otherPanel)
              closePanel(otherLi, otherTrigger, otherPanel);
          });
      }
      openPanel(li, trigger, panel);
    }
  });

  // 初期ARIA付与（任意：HTML側で入れてもOK）
  document.querySelectorAll(".p-drawer-content__open").forEach((trigger) => {
    if (!trigger.hasAttribute("aria-expanded"))
      trigger.setAttribute("aria-expanded", "false");
  });
  document
    .querySelectorAll(".p-drawer-content__toggle-lists")
    .forEach((panel) => {
      if (!panel.hasAttribute("aria-hidden"))
        panel.setAttribute("aria-hidden", "true");
      // トランジション後にmaxHeightをクリアしたい場合は以下（任意）
      panel.addEventListener("transitionend", (ev) => {
        if (ev.propertyName !== "max-height") return;
        const li = panel.closest(".p-drawer-content__list");
        if (li && li.classList.contains("is-open")) {
          // 開いた後はauto相当の動きにするため、いったんauto化
          panel.style.maxHeight = "none";
        }
      });
    });
});

function openPanel(li, trigger, panel) {
  li.classList.add("is-open");
  trigger.setAttribute("aria-expanded", "true");
  panel.setAttribute("aria-hidden", "false");

  panel.style.maxHeight = panel.scrollHeight + "px";
}

function closePanel(li, trigger, panel) {
  li.classList.remove("is-open");
  trigger.setAttribute("aria-expanded", "false");
  panel.setAttribute("aria-hidden", "true");

  // 今の高さを固定してから → 次のフレームで 0 に
  panel.style.maxHeight = panel.scrollHeight + "px";
  requestAnimationFrame(() => {
    panel.style.maxHeight = "0px";
  });
}

jQuery(document).ready(function($){
  $(".js-faq-head").on("click", function(){
    var $item = $(this).closest(".p-grad-faq__item");
    var $body = $item.find(".js-faq-body");
    $body.slideToggle(300);
    $(this).toggleClass("is-open");
  });


  /* ================================
     チェックボックスのフォーカス制御
  =================================== */
  document.addEventListener('click', function(e) {
    const label = e.target.closest('label');
    if (!label) return;
    const targetId = label.getAttribute('for');
    if (!targetId) return;
    const input = document.getElementById(targetId);
    if (input) input.focus();
  });

  /* ================================
     プライバシーポリシーの is-checked 付与
  =================================== */
  (function(){
    const $policyCheckbox = $('input[name="your_policy[]"]');
    $policyCheckbox.on('change', function(){
      const $control = $(this).closest('.wpcf7-form-control');
      $control.toggleClass('is-checked', $(this).is(':checked'));
    });
    $policyCheckbox.trigger('change');
  })();


});


