<!-- フッター -->
<footer class="general-footer">
    <div class="general-footer__container" ontouchstart="">
        <a href="<?php echo home_url(); ?>" class="general-footer__title-group">
            <div class="general-footer__title-sub">Hair Lounge</div>
            <div class="general-footer__title-main">Elmorenata</div>
        </a>

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

        <nav class="general-footer__nav">
            <?php foreach ($menu_items as $item) : ?>
                <?php if ($item->title == 'Reservation') { // 予約リンクは出力しない。
                ?>
                <?php } elseif ($item->title == 'Blog') { ?>
                    <a href="<?php echo $firstPostHref; ?>" class="general-footer__nav-element"><?php echo $item->title; ?></a>
                <?php } else { ?>
                    <a href="<?php echo $item->url; ?>" class="general-footer__nav-element"><?php echo $item->title; ?></a>
                <?php } ?>
            <?php endforeach; ?>
        </nav>
        <div class="general-footer__description">
            〒215-0004<br />
            神奈川県川崎市麻生区万福寺２丁目４−７ 才沢第２ビル<br />
            TEL:044-712-4397<br />
            電話受付:10:00～20:00（最終受付19:00）
        </div>
        <div class="general-footer__copyright">© Hair Lounge Elmorenata</div>
    </div>
</footer>
<?php wp_footer(); ?>