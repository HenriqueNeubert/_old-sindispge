<section class="w-100 t-align-c info-footer">
    <img class="display-inline-block max-w-100" src="<?php echo get_template_directory_uri(); ?>/uploads/sindispge.jpg" title="" alt="" />
</section>
<section class="w-100 p-top-80 p-bottom-40">
    <div class="center">
        <div class="w-100 d_flex wrap justify-space">
            <div class="self-center list-footer d_flex wrap w-1024-100 justify-1024-center">
                <figure class="self-center f-left p-right-40-px p-right-1024-0">
                    <a class="f-left" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
                        <img class="f-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo-2.png" alt="SINDSPGE">
                    </a>
                </figure>
                <div class="self-center d_flex wrap direction-column w-1024-100">
                    <nav class="main-menu-2 self-center f-left c-left m-top-1024-20">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-footer',
                                'container' => '',
                                'menu_id' => 'nav'
                            )
                        );
                        ?>
                    </nav>
                    <ul class="self-center social m-top-30 w-100 d_flex wrap c-left social-header justify-1024-center">
                        <?php
                        if (get_option('social_media_whats') != "") {
                            ?>
                            <li class="self-center">
                                <a class="smooth" href="<?php echo get_option('social_media_whats'); ?>" target="_blank" title="WhatsApp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-whatsapp.png" title="WhatsApp" alt="WhatsApp" />
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <?php
                        if (get_option('social_media_instagram') != "") {
                            ?>
                            <li class="self-center">
                                <a class="smooth" href="<?php echo get_option('social_media_instagram'); ?>" target="_blank" title="Instagram">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" title="Instagram" alt="Instagram" />
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <?php
                        if (get_option('social_media_facebook') != "") {
                            ?>
                            <li class="self-center">
                                <a class="smooth" href="<?php echo get_option('social_media_facebook'); ?>" target="_blank" title="Facebook">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" title="Facebook" alt="Facebook" />
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <?php
                        if (get_option('social_media_email') != "") {
                            ?>
                            <li class="self-center">
                                <a class="smooth" href="<?php echo get_option('social_media_email'); ?>" target="_blank" title="E-mail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.png" title="E-mail" alt="E-mail" />
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <section class="self-start d_flex wrap justify-center m-top-15 w-1024-100 justify-1024-center">
                <ul class="self-center c-left d_flex wrap direction-column w-1024-100 m-top-1024-30 justify-1024-center">
                    <?php
                    if (get_option('social_media_telefones') != "") {
                        ?>
                        <li class="d_flex wrap justify-1024-center">
                            <figure class="self-center w-600-100 d_flex wrap justify-600-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-phone.png" alt="TELEFONE" title="TELEFONE">
                            </figure>
                            <div class="self-center text text-4 grey p-left-10-px w-600-100 m-top-600-10 t-align-600-c">
                                <p>
                                    <?php echo get_option('social_media_telefones'); ?>
                                </p>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if (get_option('social_media_email') != "") {
                        ?>
                        <li class="m-top-30 d_flex wrap justify-1024-center">
                            <figure class="self-center w-600-100 d_flex wrap justify-600-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-email-2.png" alt="E-MAIL" title="E-MAIL">
                            </figure>
                            <a class="self-center" href="mailto:<?php echo get_option('social_media_email'); ?>" title="E-mail">
                                <div class="text text-4 grey p-left-10-px w-600-100 m-top-600-10 t-align-600-c">
                                    <p>
                                        <?php echo get_option('social_media_email'); ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if (get_option('social_media_endereco') != "") {
                    ?>
                    <li class="m-top-30 d_flex wrap justify-1024-center">
                        <figure class="self-center w-600-100 d_flex wrap justify-600-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-pin.png" alt="ENDEREÇO" title="ENDEREÇO">
                        </figure>
                        <div class="self-center text text-4 grey p-left-10-px w-600-100 m-top-600-10 t-align-600-c">
                                <p>
                                    <?php echo get_option('social_media_endereco'); ?>
                                </p>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </section>
        </div>
        <div class="w-100 m-top-40 d_flex copyright wrap justify-space">
            <div class="display-600-none">
            </div>
            <span class="t-align-c self-end">
                    Sindispge © 2020
                </span>
            <figure class="">
                <a class="f-left" href="https://www.axelagencia.com/" title="Axel Agência" target="_blank">
                    <img class="f-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo-axel.png" alt="">
                </a>
            </figure>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>