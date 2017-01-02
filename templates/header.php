<?php $foobar = 123; ?>

<div class="o-base u--bg-black">
    <div class="o-navigation">
        <div class="row middle-xs">
            <div class="col-xs-6 col-sm-3">
                <a href="/" class="c-brand">nespresso</a>
            </div>
            <div class="col-xs-6 u--align-center phone--hide tablet--block">
                <?php if (is_singular('edition')): ?>
                    <img src="<?= get_template_directory_uri() ?>/dist/images/nespresso_header.png" alt="header">
                <?php endif; ?>
            </div>
            <div class="col-xs-6 col-sm-3 u--align-right">
                <button class="c-btn u--uppercase u--text-primary js-overlay-open" data-target="contact">Kontakt</a>
            </div>
        </div>
    </div>
</div>
