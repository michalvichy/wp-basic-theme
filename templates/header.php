<?php $foobar = 123; ?>

<div class="o-base u--bg-black">
    <div class="o-navigation">
        <div class="row middle-xs">
            <div class="col-xs-3">
                <a href="/" class="c-brand">nespresso</a>
            </div>
            <div class="col-xs-6 u--align-center">
                <?php if (is_singular('edition')): ?>
                    <img src="<?= get_template_directory_uri() ?>/dist/images/nespresso_header.png" alt="header">
                <?php endif; ?>
            </div>
            <div class="col-xs-3 u--align-right">
                <a href="/contact" class="u--uppercase u--text-primary">Contact us</a>
            </div>
        </div>
    </div>
</div>
