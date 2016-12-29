<?php
    $args = array(
        'post_type' => 'edition',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
    );

    $query = new WP_Query($args);
?>

<div class="c-overlay js-overlay">
    <div class="c-overlay__close js-overlay-close">Zamknij  <div class="c-overlay__close-icon"><span></span><span></span></div></div>
    <div class="c-overlay__content">
        <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    $post_id = $post->ID;
                    $city = CFS() -> get('edition_city', $post_id);
                    $url = get_permalink($post_id);
        ?>
                <a href="<?= $url ?>" class="c-edition__preview--static">
                    <div class="c-edition__preview-container" style="background-image: url('<?= the_post_thumbnail_url('edition-thumb'); ?>')">
                        <p class="c-edition__preview-title"><?= the_title(); ?></p>
                        <p class="c-edition__preview-city">- <?= $city ?> -</p>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
