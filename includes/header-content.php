<?php wp_body_open(); ?>

<!-- ヘッダー -->
<header class="general-header" ontouchstart="">
    <div class="general-header__container">
        <a href="<?php echo home_url(); ?>" class="general-header__title-group">
            <div class="general-header__sub-title">Hair Lounge</div>
            <div class="general-header__main-title">Elmorenata</div>
        </a>
        <div class="general-header__mobile-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

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
        wp_reset_query();  // メインループのクエリへ復帰
        ?>

        <div class="general-header__nav">
            <?php foreach ($menu_items as $item) : ?>
                <?php if ($item->title == 'Reservation') { ?>
                    <a href="<?php echo $item->url; ?>" class="general-header__nav-element">
                        <div class="general-header__nav-element-reservation"><?php echo $item->description; ?></div>
                    </a>
                <?php } elseif ($item->title == 'Blog') { ?>
                    <a href="<?php echo $firstPostHref; ?>" class="general-header__nav-element">
                        <div class="general-header__nav-element-main-text"><?php echo $item->title; ?></div>
                        <div class="general-header__nav-element-sub-text"><?php echo $item->description; ?></div>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo $item->url; ?>" class="general-header__nav-element">
                        <div class="general-header__nav-element-main-text"><?php echo $item->title; ?></div>
                        <div class="general-header__nav-element-sub-text"><?php echo $item->description; ?></div>
                    </a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</header>