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
      <div class="general-page-title__main"><?php echo get_the_archive_title(); ?></div>
      <div class="general-page-title__sub">記事一覧</div>
    </div>
    <div class="blog__container">
      <div class="blog__main">
        <?php if (have_posts()) : ?>
          <div class="archive__list" ontouchstart="">
            <?php
            // 記事をループする。 the_post();は投稿を次に進める。
            while (have_posts()) : the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="archive__element">
                <div class="archive__image">
                  <?php
                  $id = get_post_thumbnail_id();
                  $img = getEyecatchUrl($id);
                  $thumbnailAlt = get_post_meta($id, '_wp_attachment_image_alt', true);
                  ?>
                  <img src="<?php echo $img; ?>" alt="<?php echo $thumbnailAlt; ?>" />
                </div>
                <div class="archive__description">
                  <div class="archive__date"><?php the_time('Y年m月d日'); ?></div>
                  <div class="archive__headline">
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
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/archive.js"></script>
</body>

</html>