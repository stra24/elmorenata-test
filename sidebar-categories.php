<div class="blog__section">
    <div class="blog__section-title">カテゴリー</div>
    <div class="blog__section-content-list" ontouchstart="">

        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
        ?>
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="blog__section-content-element">
                <span><?php echo $category->name; ?></span>
            </a>
        <?php } ?>
    </div>
</div>