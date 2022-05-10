<div class="blog__section">
    <div class="blog__section-title">最近の記事</div>
    <div class="blog__section-content-list" ontouchstart="">

        <?php
        // 固定ページに特定のカテゴリーを表示
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>
                <a href="<?php echo get_permalink(); ?>" class="blog__section-content-element">
                    <span><?php the_title(); ?></span>
                </a>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</div>