<!DOCTYPE html>
<html lang="ja">

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/css/style-list.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header-content') ?>

  <!-- メインコンテンツ -->
  <main>
    <div class="general-page-title">
      <div class="general-page-title__main">Style</div>
      <div class="general-page-title__sub">スタイル紹介</div>
    </div>
    <div class="style-list-main-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/julia-caesar-DYTQrnJ5FJ0-unsplash.jpg" />
    </div>

    <div class="style-list__menu" ontouchstart="">
      <a class="style-list__menu-element --selected" href="<?php echo get_post_type_archive_link('style'); ?>">
        <div class="style-list__main-title">All</div>
        <div class="style-list__sub-title">全て</div>
      </a>
      <?php
      $terms = get_terms('style-category', 'hide_empty=0');
      foreach ($terms as $term) {
        echo '
        <a class="style-list__menu-element" href="' . get_term_link($term->slug, 'style-category') . '">
          <div class="style-list__main-title">' . $term->name . '</div>
          <div class="style-list__sub-title">' . $term->description . '</div>
        </a>';
      }
      ?>
    </div>

    <div class="style-list__result-list" ontouchstart="">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="style-list__result-element">
            <img src="<?php the_field('main_image') ?>" alt="スタイル" />
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>
</body>

</html>