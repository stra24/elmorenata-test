<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/css/menu.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header-content') ?>

  <!-- メインコンテンツ -->
  <main>
    <div class="general-page-title">
      <div class="general-page-title__main">Menu</div>
      <div class="general-page-title__sub">メニュー</div>
    </div>
    <div class="menu-main-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/items.jpg" />
    </div>
    <div class="menu__list">
      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Cut</div>
          <div class="menu__headline-sub">カット（シャンプー・ブロー込）</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">一般</div>
          <div class="menu__element-one-menu-value">¥6,600</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">中学生・高校生</div>
          <div class="menu__element-one-menu-value">¥5,500</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">小学生以下</div>
          <div class="menu__element-one-menu-value">¥4,400</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">前髪カット</div>
          <div class="menu__element-one-menu-value">¥1,100</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">眉カット</div>
          <div class="menu__element-one-menu-value">¥1,100</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Color</div>
          <div class="menu__headline-sub">
            カラー（カット・シャンプー・ブロー別）
          </div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">アルカリカラー ※1</div>
          <div class="menu__element-one-menu-value">¥6,600</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">ヘアマニキュア ※1</div>
          <div class="menu__element-one-menu-value">¥6,600</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">香草カラー ※1</div>
          <div class="menu__element-one-menu-value">¥7,700</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">眉カラー</div>
          <div class="menu__element-one-menu-value">¥1,100</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Perm</div>
          <div class="menu__headline-sub">
            パーマ（カット・シャンプー・ブロー別）
          </div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">水パーマ ※1</div>
          <div class="menu__element-one-menu-value">¥6,600</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">
            前髪パーマ（部分パーマ） ※2
          </div>
          <div class="menu__element-one-menu-value">¥4,400</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">デジタルパーマ ※1</div>
          <div class="menu__element-one-menu-value">¥9,900</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Straight Perm</div>
          <div class="menu__headline-sub">
            縮毛矯正（カット・シャンプー・ブロー別）
          </div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">縮毛矯正 ※1</div>
          <div class="menu__element-one-menu-value">¥6,600</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">
            前髪ストレート（部分ストレート） ※2
          </div>
          <div class="menu__element-one-menu-value">¥4,400</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Treatment</div>
          <div class="menu__headline-sub">
            トリートメント（カット・シャンプー・ブロー別）
          </div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">トリートメント</div>
          <div class="menu__element-one-menu-value">¥4,400</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Head Spa</div>
          <div class="menu__headline-sub">
            ヘッドスパ（カット・シャンプー・ブロー別）
          </div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">ヘッドスパ</div>
          <div class="menu__element-one-menu-value">¥4,400</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__headline-group">
          <div class="menu__headline-main">Other</div>
          <div class="menu__headline-sub">その他</div>
        </div>
        <div class="menu__element-one-menu">
          <div class="menu__element-one-menu-name">シャンプー・ブロー</div>
          <div class="menu__element-one-menu-value">¥3,300</div>
        </div>
      </div>

      <div class="menu__element">
        <div class="menu__annotation-box">
          <div class="menu__annotation-group">
            <div class="menu__annotation-name">※1</div>
            <div class="menu__annotation-value">
              薬液塗布量や髪の長さで料金変更があります。<br />
              (ミディアム＋\1,100 / ロング＋\2,200)
            </div>
          </div>
          <div class="menu__annotation-group">
            <div class="menu__annotation-name">※2</div>
            <div class="menu__annotation-value">
              施術部分に応じて料金変更があります。
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>
</body>

</html>