<?php wp_body_open(); ?>

<!-- ヘッダー -->
<header class="general-header" ontouchstart="">
    <div class="general-header__container">
        <a href="./front-page.php" class="general-header__title-group">
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

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php foreach ($menu_items as $item) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item->url; ?>">
                            <?php echo $item->title; ?>|<?php echo $item->description; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="general-header__nav">
            <a href="./concept.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Concept</div>
                <div class="general-header__nav-element-sub-text">コンセプト</div>
            </a>

            <a href="./style-list.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Style</div>
                <div class="general-header__nav-element-sub-text">スタイル紹介</div>
            </a>

            <a href="./menu.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Menu</div>
                <div class="general-header__nav-element-sub-text">メニュー</div>
            </a>

            <a href="./stylist.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Stylist</div>
                <div class="general-header__nav-element-sub-text">スタイリスト</div>
            </a>

            <a href="./access.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Access</div>
                <div class="general-header__nav-element-sub-text">アクセス</div>
            </a>

            <a href="./blog.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Blog</div>
                <div class="general-header__nav-element-sub-text">ブログ</div>
            </a>

            <a href="./recruit.html" class="general-header__nav-element">
                <div class="general-header__nav-element-main-text">Recruit</div>
                <div class="general-header__nav-element-sub-text">採用情報</div>
            </a>

            <div class="general-header__nav-element">
                <div class="general-header__nav-element-reservation">ご予約</div>
            </div>
        </div>
    </div>
</header>