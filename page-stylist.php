<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/css/stylist.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header-content') ?>

  <!-- メインコンテンツ -->
  <main>
    <div class="general-page-title">
      <div class="general-page-title__main">Stylist</div>
      <div class="general-page-title__sub">スタイリスト</div>
    </div>
    <div class="stylist__container">
      <div class="stylist__all-image">
        <div class="stylist__main-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/stylist_4.jpg" alt="スタイル" />
        </div>

        <div class="stylist__sub-image-list" ontouchstart="">
          <div class="stylist__sub-image-element --selected">
            <img src="<?php echo get_template_directory_uri(); ?>/img/stylist_4.jpg" alt="スタイル" />
          </div>
          <div class="stylist__sub-image-element">
            <img src="<?php echo get_template_directory_uri(); ?>/img/stylist_2.jpg" alt="スタイル" />
          </div>
          <div class="stylist__sub-image-element">
            <img src="<?php echo get_template_directory_uri(); ?>/img/stylist_3.jpg" alt="スタイル" />
          </div>
        </div>
      </div>

      <div class="stylist__description">
        <div class="stylist__position">オーナー兼スタイリスト</div>
        <div class="stylist__japanese-name">加藤　悦生</div>
        <div class="stylist__english-name">Essay Kato</div>
        <div class="stylist__introduction-group">
          <div class="stylist__stylist-item-name">スタイリスト歴</div>
          <div class="stylist__stylist-item-value">15年</div>
        </div>

        <div class="stylist__introduction-group">
          <div class="stylist__stylist-item-name">得意な技術</div>
          <div class="stylist__stylist-item-value">
            骨格に合わせた補正の似合わせカット、また独自にブレンドして作るオーダーメイドのカラーはご好評頂いております。
            また、癒しを大事にしているサロンということもあり、ヘッドスパ、マッサージは特にこだわっています。
          </div>
        </div>

        <div class="stylist__introduction-group">
          <div class="stylist__stylist-item-name">趣味・マイブーム</div>
          <div class="stylist__stylist-item-value">
            長年の趣味でギター、ボルダリング（ロッククライミング）をやっています。
            また、幼い頃から英語にも興味があり、日常会話でしたら可能です。最近はうちの愛犬とのお散歩が日課です♪
          </div>
        </div>

        <div class="stylist__introduction-group">
          <div class="stylist__stylist-item-name">メッセージ</div>
          <div class="stylist__stylist-item-value">
            美容室はただ髪を切るだけの場所ではなく、同時に癒しや安らぎ、内側の充実感も養える場所でありたいと思っています。
            そのためにこだわり抜いたサービス、内装、システムになっております。
            少しでも「感動」を引き出せるように、全力を注ぎます！日本語の話せない外国人の方もぜひ！美容のお仕事に、誇りを持っています。
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/stylist.js"></script>
</body>

</html>