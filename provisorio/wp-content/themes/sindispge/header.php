<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php
        if (is_front_page() || is_home()) {
            bloginfo('name');
            echo ' - ' . get_bloginfo('description');
        } else {
            wp_title('', true);
            echo " - ";
            bloginfo('name');
        }
        ?></title>
    <base href="<?php echo home_url(); ?>/" />
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <!-- JS -->
    <?php wp_head(); ?>
</head>
<body class="w-100 relative overflow-h">
<header class="w-100">
    <div class="center container">
        <article class="w-100">
            <ul class="f-right d_flex wrap c-left social-header w-1024-100 justify-1024-space justify-600-center">
                <div class="self-center d_flex wrap">

                    <?php
                    if (get_option('social_media_whats') != "") {
                        ?>
                        <li class="self-center">
                            <a href="<?php echo get_option('social_media_whats'); ?>" target="_blank" title="WhatsApp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-whatsapp.png" title="WhatsApp" alt="WhatsApp" />
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if (get_option('social_media_facebook') != "") {
                        ?>
                        <li class="self-center">
                            <a href="<?php echo get_option('social_media_facebook'); ?>" target="_blank" title="Facebook">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" title="Facebook" alt="Facebook" />
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if (get_option('social_media_instagram') != "") {
                        ?>
                        <li class="self-center">
                            <a href="<?php echo get_option('social_media_instagram'); ?>" target="_blank" title="Instagram">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" title="Instagram" alt="Instagram" />
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if (get_option('social_media_email') != "") {
                        ?>
                        <li class="self-center">
                            <a href="<?php echo get_option('social_media_email'); ?>" target="_blank" title="E-mail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.png" title="E-mail" alt="E-mail" />
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </div>
            </ul>
        </article>
        <article class="w-100 m-top-15 d_flex wrap justify-space">
            <figure class="f-left c-left main-logo">
                <a class="max-w-100" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
                    <img class="max-w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.png" title="" alt="" />
                </a>
            </figure>
            <a class="self-center action-menu display-none display-1024-block" href="javascript:void(0);" title="Menu">
                <span class="smooth"></span>
                <span class="smooth"></span>
                <span class="smooth"></span>
            </a>
            <nav class="d_flex wrap self-center c-left main-menu direction-1024-column display-1024-none">
                <a class="w-100 display-none display-1024-block close-menu" href="javascript:void(0);" title="Fechar">
                    Fechar
                </a>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-desktop',
                        'container' => '',
                        'menu_id' => 'nav'
                    )
                );
                ?>
                <div class="self-center m-left-40-px m-left-1250-20-px">
                    <a class="f-left btn" href="associados#form" title="ASSOCIE-SE">
                        FILIE-SE
                    </a>
                </div>
            </nav>
        </article>
    </div>
</header>