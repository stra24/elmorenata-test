<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/css/recruit.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header-content') ?>
  <!-- メインコンテンツ -->
  <main ontouchstart="">
    <div class="general-page-title">
      <div class="general-page-title__main">Recruit</div>
      <div class="general-page-title__sub">採用情報</div>
    </div>
    <div class="recruit-main-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/dylan-gillis-KdeqA3aTnBY-unsplash.jpg" />
    </div>

    <div class="recruit__main-message">
      <div class="recruit__main-message-headline">スタッフ募集中！</div>
      <div class="recruit__main-message-text">
        Elmorenataでは、一緒に働いていただけるスタッフ（スタイリスト）を募集しています！<br />
        夢を持った前向きで美容が好きな方、お待ちしております。<br />
        ご興味・ご質問のある方は、お気軽に当店にお電話下さい。（044-712-4397）
      </div>
    </div>

    <div class="recruit__requirements">
      <div class="recruit__requirements-headline">募集要項</div>
      <table class="recruit__requirements-table">
        <tr>
          <td class="recruit__requirements-name">募集職種</td>
          <td class="recruit__requirements-value">スタイリスト</td>
        </tr>

        <tr>
          <td class="recruit__requirements-name">勤務地</td>
          <td class="recruit__requirements-value">
            〒215-0004<br />神奈川県川崎市麻生区万福寺２丁目４−７ 才沢第２ビル
          </td>
        </tr>
        <tr>
          <td class="recruit__requirements-name">応募資格</td>
          <td class="recruit__requirements-value">美容師免許</td>
        </tr>
        <tr>
          <td class="recruit__requirements-name">雇用形態</td>
          <td class="recruit__requirements-value">業務委託</td>
        </tr>

        <tr>
          <td class="recruit__requirements-name">報酬</td>
          <td class="recruit__requirements-value">
            〇万円/月～<br />※歩合・経験・能力を考慮の上、優遇致します。
          </td>
        </tr>

        <tr>
          <td class="recruit__requirements-name">勤務時間</td>
          <td class="recruit__requirements-value">
            10:00～20:00（シフト制）
          </td>
        </tr>

        <tr>
          <td class="recruit__requirements-name">休日</td>
          <td class="recruit__requirements-value">週休2日</td>
        </tr>

        <tr>
          <td class="recruit__requirements-name">福利厚生</td>
          <td class="recruit__requirements-value">
            ここにテキストが入ります。 ここにテキストが入ります。
            ここにテキストが入ります。 ここにテキストが入ります。
            ここにテキストが入ります。
          </td>
        </tr>
      </table>
    </div>
    <div class="recruit__btn">
      <div class="recruit__btn-sub-text">ご応募・お問い合わせはこちら</div>
      <div class="recruit__btn-main-text">044-712-4397</div>
      <div class="recruit__btn-sub-text">採用担当：加藤</div>
    </div>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>
</body>

</html>