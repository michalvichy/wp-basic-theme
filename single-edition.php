<?php
    namespace Roots\Sage\Extras;
    use Roots\Sage\Setup;

    setlocale(LC_TIME, 'pl_PL.UTF-8');
    $fields = CFS()->get(false, false);
    $report = $fields['edition_report'];
    $date_field = $fields['edition_date'];
    $date = date_create($date_field);
    $date = strftime('%d %B %G', strtotime($date_field));
    $city = $fields['edition_city'];

    $has_timeline = empty($fields['edition_timeline']) ? false : true;
    $has_menu = empty($fields['edition_menu']) ? false : true;
    $has_chefs = empty($fields['edition_chefs']) ? false : true;
    $has_gallery = empty($fields['edition_gallery']) ? false : true;
?>


<div class="o-base u--border-top">
    <div class="c-edition__top">
        <div class="o-container">
            <div class="row middle-xs">
                <div class="col-xs-7 col-sm-5 col-lg-3">
                    <span class="c-edition__title"><?= the_title(); ?></span><span class="c-edition__switch u--text-primary u--pointer js-overlay-open" data-target="editions">Zmień</span>
                    <p class="c-edition__date"><?= $date; ?> <?= $city; ?></p>
                </div>
                <div class="col-xs-5 col-sm-3 col-sm-offset-4 desktop--hide">
                    <div class="c-dropdown js-dropdown">
                        <span>Relacja</span>
                        <ul class="c-dropdown__list u--inline-list">
                            <?php if ($has_timeline): ?>
                                <li><span data-target="timeline" class="js-overlay-open">Program</span></li>
                            <?php endif; ?>
                            <?php if ($has_menu): ?>
                                <li><span data-target="menu" class="js-overlay-open">Menu</span></li>
                            <?php endif; ?>
                            <?php if ($has_chefs): ?>
                                <li><span data-target="chefs" class="js-overlay-open">Szefowie kuchni</span></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-8 col-lg-9 phone--hide desktop--show">
                    <ul class="c-edition__top-menu u--inline-list">
                        <?php if ($has_timeline): ?>
                            <li><button data-target="timeline" class="c-btn c-btn--primary js-overlay-open">Program</span></li>
                        <?php endif; ?>
                        <?php if ($has_menu): ?>
                            <li><button data-target="menu" class="c-btn c-btn--primary js-overlay-open">Menu</span></li>
                        <?php endif; ?>
                        <li><button class="c-btn c-btn--primary active">Relacja</button></li>
                        <?php if ($has_chefs): ?>
                            <li><button data-target="chefs" class="c-btn c-btn--primary js-overlay-open">Szefowie kuchni</span></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="o-base u--border-top u--bg-black">
    <div class="o-container">
        <div class="o-section">
            <?php if ($has_gallery): ?>
                <div class="u--align-center">
                    <div class="c-edition__gallery-intro u--align-center">
                        <?php the_post_thumbnail('edition-thumb', array( 'class' => 'c-image-hover' )); ?>
                        <button class="c-btn c-btn--primary js-overlay-open" data-target="gallery">Zobacz fotorelację</a>
                    </div>
                </div>
            <?php endif; ?>

            <h2 class="c-headline c-headline--center">Relacja</h2>

            <div class="s-edition__content">
                <?= $report; ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('templates/overlays/editions'); ?>

<?php insert_overlay('gallery', $fields) ?>
<?php insert_overlay('menu', $fields) ?>
<?php insert_overlay('timeline', $fields) ?>
<?php insert_overlay('chefs', $fields) ?>
