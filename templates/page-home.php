<div class="o-base u--bg-black">
    <div class="o-container">
        <div class="o-section">
            <div class="row middle-xs">
                <div class="col-xs-12 col-md-6">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/foo.png" alt="header">
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/nespresso_header.png" alt="header">
                    <p class="c-paragraph">
                        Poland Restaurant Forum by Nespresso to platforma dyskusji i wymiany doświadczeń osób związanych z branżą horeca: restauratorów szefów kuchni, sommelierów, mediów branżowych i pasjonatów gastronomii. Odbywające się cyklicznie spotkania ma na celu wymianę doświadczeń wszystkich stron zainteresowanych gastronomią oraz dyskusję o kwestiach nurtujących branżę. Forum odbywa się w różnych miastach Polski, uwzględniając lokalną specyfikę przemysłu gastronomicznego. Ciekawe dyskusje, goście specjalni z międzynarodowym doświadczeniem, networking i kuchnia najwyższej jakości – to wyróżniki każdej edycji.
                    </p>
                    <div class="o-btn-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="o-base u--border-top">
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
    <div class="c-edition__carousel">
        <div class="c-edition__carousel-btn prev js-edition-prev is-visible"><span></span></div>
        <div class="c-edition__carousel-btn next js-edition-next is-visible"><span></span></div>

        <div class="owl-carousel owl-theme">
            <?php
            if ( $query->have_posts() ) :
                $i = 1;

                while ( $query->have_posts() ) : $query->the_post();
                    $post_id = $post->ID;
                    $city = CFS() -> get('edition_city', $post_id);
                    $url = get_permalink($post_id);

                ?>
                <a href="<?= $url ?>" class="c-edition__preview <?php echo $i > 3 ? 'phone--hide desktop--block' : ''; ?>">
                    <div class="c-edition__preview-container">
                        <?php the_post_thumbnail('edition-thumb', array( 'class' => 'c-image-hover' )); ?>
                        <p class="c-edition__preview-title u--horizontal"><?= the_title(); ?></p>
                        <p class="c-edition__preview-city u--horizontal">- <?= $city ?> -</p>
                    </div>
                </a>
                <?php $i++; endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="o-btn-container u--align-center desktop--hide">
            <button class="c-btn c-btn--primary js-overlay-open" data-target="editions">Starsze edycje</button>
        </div>
    </div>
</div>

<div class="o-base c-section-news">
    <div class="o-container">
        <div class="o-section">
            <div class="row center-xs">
                <div class="col-xs-12 col-md-6">
                    <h2 class="c-headline c-headline--center">Aktualności</h2>
                    <p class="c-paragraph">
                        Za nami IV edycja Poland Restaurant Forum by Nespresso!
                        W gronie ponad 100 osób – restauratorów, managerów, szefów kuchni i pasjonatów gastronomii – dyskutowaliśmy o tym, gdzie szukać siły i motywacji do działania w branży horeca. Obszerną relację i zdjęcia z wydarzenia, które odbyło się pod hasłem „Share The Power” już do obejrzenia na stronie – zerknijcie do sekcji warszawskiej edycji!
                    </p>

                    <div class="o-btn-container">
                        <button class="c-btn c-btn--primary js-overlay-open" data-target="news">Czytaj więcej</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="o-base u--bg-black u--border-top">
    <div class="o-container">
        <div class="row middle-md">
            <div class="col-xs-12 col-md-4">
                <h2 class="c-headline">Kontakt</h2>
                <h3 class="c-headline--medium">Skontaktuj się z nami</h3>
                <a href="mailto:polandrestaurantforum@nespresso.com" class="u--text-gray">PolandRestaurantForum@nespresso.com</a>
            </div>
            <div class="col-xs-12 col-md-8">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/mac_screen.png" alt="screen">
            </div>
        </div>
    </div>
</div>

<?php get_template_part('templates/overlays/editions'); ?>
<?php get_template_part('templates/overlays/contact'); ?>
<?php get_template_part('templates/overlays/news'); ?>
