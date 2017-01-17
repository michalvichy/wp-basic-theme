<?php
    $args = array(
        'posts_per_page' => 1,
    	'offset' => 0,
    	'orderby' => 'date',
    	'order' => 'DESC',
        'post_type' => 'edition',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

    $last_edition = wp_get_recent_posts( $args, ARRAY_A );
    $last_edition_ID = $last_edition[0]['ID'];
?>

<div class="o-base">
    <footer class="c-footer">
        <div class="o-container">
            <div class="row middle-xs center-xs start-md">
                <div class="col-xs-12 col-md-5 last-xs first-md">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/footer_logo.png" alt="footer-logo" class="c-footer__logo">
                    <p class="c-footer__copy u--text-12 u--text-gray">Copyright © 2016 Nespresso. All Rights Reserved.</p>
                </div>
                <div class="col-md-7 desktop--right">
                    <ul class="c-footer__menu u--inline-list">
                        <li class="c-footer__menu-item">
                            <a href="/" class="c-footer__menu-link">Strona główna</a>
                        </li>
                        <li class="c-footer__menu-item">
                            <a href="<?= get_permalink($last_edition_ID); ?>" class="c-footer__menu-link"><?= get_the_title($last_edition_ID); ?></a>
                        </li>
                        <li class="c-footer__menu-item">
                            <span class="c-footer__menu-link js-overlay-open" data-target="contact">Kontakt</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php get_template_part('templates/overlays/contact'); ?>
