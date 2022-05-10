<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header-content') ?>

  <!-- メインコンテンツ -->
  <main>
    <div class="general-page-title">
      <div class="general-page-title__main">Blog</div>
      <div class="general-page-title__sub">ブログ</div>
    </div>
    <div class="blog__container">
      <div class="blog__main">
        <?php if (have_posts()) : ?>
          <div class="top-blog__list" ontouchstart="">
            <?php
            // 記事をループする。 the_post();は投稿を次に進める。
            while (have_posts()) : the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="top-blog__element">
                <div class="top-blog__image">
                  <?php
                  $id = get_post_thumbnail_id();
                  $img = getEyecatchUrl($id);
                  $thumbnailAlt = get_post_meta($id, '_wp_attachment_image_alt', true);
                  ?>
                  <img src="<?php echo $img; ?>" alt="<?php echo $thumbnailAlt; ?>" />
                </div>
                <div class="top-blog__description">
                  <div class="top-blog__date"><?php the_time('Y年m月d日'); ?></div>
                  <div class="top-blog__headline">
                    <?php the_title(); ?>
                  </div>
                </div>
              </a>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
          <p>記事がありませんでした。</p>
        <?php endif; ?>
      </div>


      <div class="blog__sidebar">
        <?php get_sidebar('latest'); ?>
        <?php get_sidebar('categories'); ?>
        <?php get_sidebar('monthly'); ?>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>
</body>

</html>