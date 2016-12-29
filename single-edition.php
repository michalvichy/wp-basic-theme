<?php
    $fields = CFS()->get(false, false);
    $report = $fields['edition_report'];
    $edition_date = $fields['edition_date'];
?>


<div class="o-base u--border-top">
    <div class="c-edition__top">
        <div class="o-container">
            <div class="row middle-sm">
                <div class="col-sm-4 col-lg-3">
                    <span class="c-edition__title"><?= the_title(); ?></span><span class="u--text-primary">Zmień</span>
                    <p class="c-edition__date"><?= $edition_date; ?></p>
                </div>
                <div class="col-sm-8 col-lg-9">
                    <ul class="c-edition__top-menu u--inline-list">
                        <li><button class="c-btn c-btn--primary">Program</button></li>
                        <li><button class="c-btn c-btn--primary">Menu</button></li>
                        <li><button class="c-btn c-btn--primary active">Relacja</button></li>
                        <li><button class="c-btn c-btn--primary">Szefowie kuchni</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="o-base u--border-top u--bg-black">
    <div class="o-container">
        <div class="o-section">
            <div class="u--align-center">
                <div class="c-edition__gallery-intro u--align-center">
                    <?php the_post_thumbnail('edition-thumb', array( 'class' => 'c-image-hover' )); ?>
                    <a href="#" class="c-btn c-btn--primary">Zobacz fotorelację</a>
                </div>
            </div>

            <h2 class="c-headline c-headline--center">Relacja</h2>

            <div class="s-edition__content">
                <?= $report; ?>
            </div>
        </div>
    </div>
</div>
