<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/css/style-detail.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header-content') ?>

  <!-- メインコンテンツ -->
  <main>
    <div class="general-page-title">
      <div class="general-page-title__main">Style</div>
      <div class="general-page-title__sub">スタイル詳細</div>
    </div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="style-detail__container">
          <div class="style-detail__image">
            <img src="<?php the_field('main_image') ?>" alt="スタイル" />
          </div>
          <div class="style-detail__description">
            <div class="style-detail__style-name">スタイル名： <?php the_title(); ?></div>
            <div class="style-detail__style-detail-info"><?php the_field('style_description'); ?>
            </div>
            <div class="style-detail__list" ontouchstart="">
              <div class="style-detail__list-element --selected">
                <img src="<?php the_field('main_image') ?>" alt="スタイルメイン画像" />
              </div>
              <div class="style-detail__list-element">
                <img src="<?php the_field('sub_image_1') ?>" alt="スタイルサブ画像1" />
              </div>
              <div class="style-detail__list-element">
                <img src="<?php the_field('sub_image_2') ?>" alt="スタイルサブ画像2" />
              </div>
            </div>
            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="general-btn">
              <div class="general-btn__text">スタイル一覧に戻る</div>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/style-detail.js"></script>
</body>

</html>