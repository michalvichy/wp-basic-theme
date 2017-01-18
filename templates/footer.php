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
                            <span class="c-footer__menu-link js-overlay-open" data-target="editions">Edycje</span>
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
