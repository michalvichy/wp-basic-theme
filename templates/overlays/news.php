<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
    );

    $query = new WP_Query($args);
?>

<div id="news" class="c-overlay js-overlay">
    <div class="c-overlay__close js-overlay-close">Zamknij  <div class="c-overlay__close-icon"><span></span><span></span></div></div>
    <div class="c-overlay__content wide js-perfect">
        <h2 class="c-headline c-headline--center">Aktualności</h2>

        <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    $post_id = $post->ID;
                    $content = get_the_content();
                    $day = get_the_date('d.m');
                    $year = get_the_date('Y');
            ?>

            <div class="c-single-news">
                <div class="dot"><span></span></div>
                <div class="date-box">
                    <p class="date">
                        <span class="day"><?= $day; ?></span>
                        <span class="year"><?= $year; ?></span>
                    </p>
                </div>

                <div class="s-news">
                    <?= $content; ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
