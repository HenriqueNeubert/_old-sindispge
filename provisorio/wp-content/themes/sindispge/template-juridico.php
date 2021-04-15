<?php
/*
  Template Name: Página Jurídico
 */
get_header();
?>

    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong strong class="w-100">
                            Serviços
                        </strong>
                    </div>
                </div>
            </article>
        </div>
        <img class="w-100 relative z-index-1" src="<?php echo get_template_directory_uri(); ?>/uploads/banner/banner-page.jpg" title="Notícias" alt="Notícias" />
    </section>
    <section class="w-100 p-top-100 p-bottom-100">
        <div class="center container">
<?php if (have_posts()) : the_post(); ?>


    <?php if( have_rows('convenios') ): ?>
        <div class="w-100 slider-slick-covenant">
            <?php while( have_rows('convenios') ): the_row();
                $image = get_sub_field('imagem');
                ?>
                <div class="f-left">
                    <a class="w-100" href="<?php the_permalink(); ?>" title="Advocacia">
                        <figure class="w-100 d_flex wrap direction-column justify-center">
                            <img class="self-center" src="<?php echo $image["sizes"]["post-convenios"] ?>" title="" alt="" />
                        </figure>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

            <article class="w-100 d_flex wrap justify-space direction-800-column t-align-800-c"> <!--parte-1-->
                <section class="w-200-px self-center m-right-50-px w-800-100">
                    <article class="title d_flex wrap active smooth justify-1024-center">
                        <h1 class="self-center">
                            SERVIÇOS
                        </h1>
                        <h2 class="w-100 m-top-15 title-2">
                            <?php the_title(); ?>
                        </h2>
                    </article>
                    <figure class="w-100 m-top-20">
                        <img class="display-inline-block max-w-100" src="<?php echo get_template_directory_uri(); ?>/uploads/page/juridico.png" title="" alt="" />
                    </figure>
                </section>
                <aside class="flex-1 self-center m-top-800-30">
                    <div class="w-100 text text-3 text-column">
                        <?php the_content(); ?>
                    </div>
                </aside>
            </article>
            <aside class="w-100 self-center"> <!--repetidor-->

                <div class="w-100 m-top-30">
                    <h3 class="title-2 f-size-40 t-align-c">
                        Advogados Conveniados
                    </h3>
                </div>
                <?php
                if(have_rows('servicos_juridico') ){
                ?>
                <div class="w-100 m-top-30 list-juridico">
                <?php
                    while( have_rows('servicos_juridico') ) : the_row();
                        ?>
                        <div class="w-100 item d_flex wrap">
                            <div class="flex-1 w-800-100 d_flex wrap direction-column justify-center">
                                <h4 class="title-2">
                                    <?php the_sub_field('title_service'); ?>
                                </h4>
                                <div class="w-100 text text-3 m-top-20">
                                    <?php the_sub_field('description_service'); ?>
                                </div>
                            </div>
                            <aside class="w-50 w-800-100 p-left-15-px">
                                <?php
                                $image = get_sub_field('image_service_1');
                                if( !empty( $image ) ): ?>
                                    <div class="w-100">
                                        <img class="max-w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                            </aside>
                        </div>
                    <?php
                    endwhile;
                ?>
                </div>
                <?php
                    }else {
                ?>
                <h2 class="w-100 t-align-c m-top-60 title-2 secondary-color m-top-1024-30">
                    Nenhum Serviço encontrado!
                </h2>
                <?php
                }
                ?>
            </aside>

<?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>