<?php
    $gallery = CFS()->get('edition_gallery', false);
?>

<div id="gallery" class="c-overlay js-overlay">
    <div class="c-overlay__close js-overlay-close">Zamknij  <div class="c-overlay__close-icon"><span></span><span></span></div></div>
    <div class="c-overlay__content super-wide js-perfect">
        <h2 class="c-headline c-headline--center">Fotorelacja</h2>

        <div class="js-lightgallery">
            <?php foreach ($gallery as $key => $value):
                    $img_url = $value['edition_gallery_img'];
            ?>
                <a href="<?= $img_url; ?>" class="c-gallery__item" style="background-image: url('<?= $img_url; ?>')">
                    <img src="<?= $img_url; ?>" class="c-gallery__img" alt="">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
