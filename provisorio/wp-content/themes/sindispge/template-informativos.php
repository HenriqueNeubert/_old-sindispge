<?php
/*
  Template Name: Página Informativos
 */
get_header();
?>

<?php if (have_posts()) : the_post(); ?>

    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong strong class="w-100">
                            Informativos
                        </strong>
                    </div>
                </div>
            </article>
        </div>
        <img class="w-100 relative z-index-1" src="<?php echo get_template_directory_uri(); ?>/uploads/banner/banner-page.jpg" title="Notícias" alt="Notícias" />
    </section>

    <section class="w-100 p-top-100 p-bottom-100">
        <div class="center container">
            <article class="w-100 d_flex wrap justify-center title">
                <h1 class="self-center">
                    INFORMATIVOS
                </h1>
                <h2 class="w-100 m-top-20 t-align-c title-2">
                    <?php the_title(); ?>
                </h2>
            </article>
            <article class="w-100 m-top-50 d_flex wrap list-calendary">
                <?php if( have_rows('informativo') ): ?>
                        <?php while( have_rows('informativo') ): the_row();
                            ?>
                            <div class="f-left item">
                                <a class="w-100 h-100 d_flex wrap direction-column justify-center" href="<?php echo get_sub_field("arquivo")["url"] ?>" title="<?php the_sub_field('mes'); ?>" target="_blank">
                                    <span class="self-center title-2">
                                    <?php the_sub_field('mes'); ?>
                                    </span>
                                </a>
                            </div>
                        <?php endwhile; ?>
                <?php endif; ?>
            </article>
            <nav class="w-100 m-top-80 list-year">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-informativo',
                        'container' => '',
                        'menu_id' => 'nav',
                        'menu_class' => 'w-100 d_flex wrap justify-center'
                    )
                );
                ?>
            </nav>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>