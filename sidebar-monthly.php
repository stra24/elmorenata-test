<div class="blog__section">
    <div class="blog__section-title">アーカイブ</div>
    <div class="blog__section-content-list" ontouchstart="">

        <?php
        $args = array(
            'posts_per_page' => 15,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            $archiveArray = [];
            while ($the_query->have_posts()) {
                $the_query->the_post();
                $yearMonth = mysql2date('Y年n月', $post->post_date);

                if (array_key_exists($yearMonth, $archiveArray)) {
                    $archiveArray[$yearMonth] = $archiveArray[$yearMonth] + 1;
                } else {
                    $archiveArray[$yearMonth] = 1;
                }
            }
        }
        wp_reset_postdata();
        ?>

        <?php foreach ($archiveArray as $key => $value) { ?>
            <?php
            sscanf($key, "%d年%d月", $yearStr, $monthStr);
            $monthStr = sprintf('%02d', $monthStr);
            ?>

            <a href="<?php echo home_url(); ?>/<?php echo $yearStr; ?>/<?php echo $monthStr; ?>" class="blog__section-content-element">
                <span><?php echo $yearStr; ?>年<?php echo $monthStr; ?>月(<?php echo $value; ?>)</span>
            </a>
        <?php } ?>
    </div>
</div>