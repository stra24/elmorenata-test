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
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="blog__main">
            <div class="blog__main-date"><?php the_date(); ?></div>
            <div class="blog__main-title"><?php the_title(); ?></div>
            <div class="blog__main-image">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="blog__main-text">
              <?php the_content(); ?>
            </div>

            <?php
            // 記事のカテゴリー情報を取得する
            $categories = get_the_category();
            ?>
            <div class="blog__main-category">
              <?php
              if ($categories) {
                foreach ($categories as $category) {
                  // 取得した配列から必要な情報を変数に入れる
                  $cat_name = $category->cat_name; // カテゴリー名
                  $cat_slug  = $category->category_nicename; // カテゴリースラッグ
              ?>
                  <a href="<?php echo home_url(); ?>/category/<?php echo $cat_slug ?>">
                    #<?php echo $cat_name ?>
                  </a>
              <?php
                }
              }
              ?>
            </div>
            <div class="blog__main-link-list" ontouchstart="">
              <?php
              $oldLink = get_previous_post_link('%link');
              if ($oldLink) {
                $oldLink = str_replace('<a', '<a class="blog__main-link-old"', $oldLink);
              } else {
                $oldLink = '<a></a>';
              }
              echo $oldLink;

              $newLink = get_next_post_link('%link');
              if ($newLink) {
                $newLink = str_replace('<a', '<a class="blog__main-link-new"', $newLink);
              } else {
                $newLink = '<a></a>';
              }
              echo $newLink;
              ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

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