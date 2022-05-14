<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?> style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/paper_00087_pr4.jpg')">
  <?php get_template_part('includes/header-content') ?>

  <!-- メインコンテンツ -->
  <main>
    <!-- ヒーローイメージ -->
    <div class="top-hero-image">
      <div class="top-hero-image__nav">
        <div class="top-hero-image__title-and-nav">
          <div class="top-hero-image__title-group">
            <p class="top-hero-image__sub-title">Hair Lounge</p>
            <p class="top-hero-image__main-title">Elmorenata</p>
          </div>

          <div class="top-hero-image__nav-menu" ontouchstart="">

            <?php
            // functions.phpのregister_nav_menusで指定した要素を指定。				
            $menu_name = 'global_nav';
            // 登録されているすべてのナビゲーションメニューの場所と、それらに割り当てられているメニューを取得します。
            $locations = get_nav_menu_locations();
            // 'global_nav'のメニューオブジェクトを取得				
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>

            <?php
            // 最大最新の1件までの記事を表示する。
            query_posts('showposts=1');
            // 記事をループする。 the_post();は投稿を次に進める。
            while (have_posts()) {
              the_post();
              $firstPostHref = get_permalink();
            }
            ?>

            <?php foreach ($menu_items as $item) : ?>
              <?php if ($item->title == 'Reservation') { ?>
                <div class="top-hero-image__nav-element">
                  <div class="top-hero-image__nav-element-main-text">
                    <?php echo $item->title; ?>
                  </div>
                </div>
              <?php } elseif ($item->title == 'Blog') { ?>
                <div class="top-hero-image__nav-element">
                  <a href="<?php echo $firstPostHref; ?>" class="top-hero-image__nav-element-main-text"><?php echo $item->title; ?></a>
                </div>
              <?php } else { ?>
                <div class="top-hero-image__nav-element">
                  <a href="<?php echo $item->url; ?>" class="top-hero-image__nav-element-main-text"><?php echo $item->title; ?></a>
                </div>
              <?php } ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="top-hero-image__main">
        <div class="top-hero-image__image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/face-g23fc3a535_1920.jpg" />
        </div>
        <div class="top-hero-image__catchphrase">
          <div class="top-hero-image__catchphrase-text">
            髪、ココロ、よみがえる。
          </div>
          <div class="top-hero-image__catchphrase-back"></div>
        </div>
      </div>
    </div>

    <!-- コンセプト -->
    <div class="top-concept">
      <div class="top-concept__container">
        <div class="general-headline">
          <div class="general-headline__main">Concept</div>
          <div class="general-headline__sub">/ コンセプト</div>
        </div>

        <div class="top-concept__contents">
          <div class="top-concept__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chairs.jpg" />
          </div>
          <div class="top-concept__description" ontouchstart="">
            <div class="general-text">
              Elmorenataは新百合ヶ丘にある美容室です。
              店名の「Elmorenata（エルモレナータ）」はイタリア語の造語で「愛すべき生まれ変わり」を意味します。
              癒しに特化したこだわり抜いたサービスやおもてなしをご提供し、お客様に「明日からまた頑張ろう」と思って頂けるような美容室にしたい。そんな想いを込めています。
            </div>
            <a href="<?php echo home_url(); ?>/concept/" class="general-btn">
              <div class="general-btn__text">More</div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ご予約 -->
    <div class="top-reservation" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/flower_and_book.jpg')">
      <div class="top-reservation__container">
        <div class="general-headline">
          <div class="general-headline__main">Reservation</div>
          <div class="general-headline__sub">/ ご予約</div>
        </div>

        <div class="top-reservation__contents">
          <div class="general-text">
            ご予約は、お電話もしくはWebにて承っております。
          </div>
          <div class="top-reservation__btnList" ontouchstart="">
            <div class="general-btn">
              <a href="tel:0447124397" class="general-btn__text">044-712-4397</a>
            </div>
            <div class="general-btn">
              <a href="#" class="general-btn__text">Webでご予約</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- スタイル紹介 -->
    <div class="top-style">
      <div class="top-style__container">
        <div class="general-headline">
          <div class="general-headline__main">Style</div>
          <div class="general-headline__sub">/ スタイル紹介</div>
        </div>

        <div class="top-style__contents" ontouchstart="">
          <div class="top-style__image-list">
            <div class="top-style__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/10A6B299-029E-4AA1-BD66-0CDEA03AEAF9.jpg" alt="スタイル" />
            </div>
            <div class="top-style__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/92EE6FAE-13C6-4C06-9C46-4938E491E97B.jpg" alt="スタイル" />
            </div>
            <div class="top-style__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/791DD428-E8E1-404A-8211-8647A1D4690F.jpg" alt="スタイル" />
            </div>
            <div class="top-style__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/D737BB94-D73B-4871-BF3B-477FACB79107.jpg" alt="スタイル" />
            </div>
            <div class="top-style__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/10A6B299-029E-4AA1-BD66-0CDEA03AEAF9.jpg" alt="スタイル" />
            </div>
            <div class="top-style__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/92EE6FAE-13C6-4C06-9C46-4938E491E97B.jpg" alt="スタイル" />
            </div>
          </div>
          <a href="<?php echo home_url(); ?>/style/" class="general-btn">
            <div class="general-btn__text">More</div>
          </a>
        </div>
      </div>
    </div>

    <!-- コンテンツ -->
    <div class="top-contents">
      <div class="top-contents__container">
        <div class="general-headline">
          <div class="general-headline__main">Contents</div>
          <div class="general-headline__sub">/ コンテンツ</div>
        </div>

        <div class="top-contents__btnList" ontouchstart="">
          <div class="top-contents__element">
            <div class="top-contents__element-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/items.jpg" />
            </div>
            <a href="<?php echo home_url(); ?>/menu/" class="top-contents__element-title">
              <div class="top-contents__element-main-title">Menu</div>
              <div class="top-contents__element-sub-title">メニュー</div>
            </a>
          </div>

          <div class="top-contents__element">
            <div class="top-contents__element-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/stylist_1.jpg" />
            </div>
            <a href="<?php echo home_url(); ?>/stylist/" class="top-contents__element-title">
              <div class="top-contents__element-main-title">Stylist</div>
              <div class="top-contents__element-sub-title">スタイリスト</div>
            </a>
          </div>

          <div class="top-contents__element">
            <div class="top-contents__element-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/access.jpg" />
            </div>
            <a href="<?php echo home_url(); ?>/access" class="top-contents__element-title">
              <div class="top-contents__element-main-title">Access</div>
              <div class="top-contents__element-sub-title">アクセス</div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ブログ -->
    <div class="top-blog">
      <div class="top-blog__container">
        <div class="general-headline">
          <div class="general-headline__main">Blog</div>
          <div class="general-headline__sub">/ ブログ</div>
        </div>

        <?php if (have_posts()) : ?>
          <div class="top-blog__list" ontouchstart="">
            <?php
            // 最大最新の3件までの記事を表示する。
            query_posts('showposts=3');

            // 記事をループする。 the_post();は投稿を次に進める。
            while (have_posts()) : the_post(); ?>
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

        <a href="<?php echo $firstPostHref ?>" class="general-btn">
          <div class="general-btn__text">More</div>
        </a>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
  <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
</body>

</html>