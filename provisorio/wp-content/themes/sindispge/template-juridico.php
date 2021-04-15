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
                <aside class="flex-1 self-center m-top-800-30"> <!--repetidor-->
                    <?php
                        if( have_rows('servicos_juridico') ):
                        while( have_rows('servicos_juridico') ) : the_row();
                        ?>

                           <div class="w-100 m-top-30">
                               <div class="flex-1 w-800-100">
                                    <h4 class="title-2">
                                        <?php the_sub_field('title_service'); ?>
                                    </h4>
                                    <div class="w-100 text text-3 m-top-20">
                                        <?php the_sub_field('description_service'); ?>
                                    </div>
                               </div>
                               <aside class="w-60 w-800-100 p-left-15-px">
                                   <?php
                                   if(!empty($servicos["image_service_1"])):
                                       ?>
                                       <div class="w-100">
                                           <img src="<?php echo $servicos["image_service_1"]["sizes"]["post-blog"]; ?>" class="w-100" alt="<?php echo $servicos["image_service_1"]["alt"]; ?>" title="<?php echo $servicos["image_service_1"]["description"]; ?>">
                                       </div>
                                   <?php endif; ?>

                                   <?php
                                   if(!empty($vantagem["image_service_2"])):
                                       ?>
                                       <div class="w-100 m-top-20">
                                           <img src="<?php echo $vantagem["image_service_2"]["sizes"]["post-blog"]; ?>" class="w-100" alt="<?php echo $vantagem["image_service_2"]["alt"]; ?>" title="<?php echo $vantagem["image_service_2"]["description"]; ?>">
                                       </div>
                                   <?php endif; ?>

                                   <?php
                                   if(!empty($vantagem["description_image_2"])):
                                       ?>
                                       <div class="w-100">
                                           <img src="<?php echo $vantagem["description_image_2"]["sizes"]["800"]; ?>" class="w-100" alt="<?php echo $vantagem["description_image_2"]["alt"]; ?>" title="<?php echo $vantagem["description_image_2"]["description"]; ?>">
                                       </div>
                                   <?php endif; ?>
                               </aside>
                           </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </aside>
            </article>


            <article class="w-100 m-top-80 d_flex wrap justify-space direction-800-column t-align-800-c"> <!--parte-2-->
                <section class="w-200-px m-right-50-px display-800-none">
                </section>
                <aside class="flex-1 d_flex wrap">
                    <?php
                    if( get_field("imagem_1")){
                        ?>
                        <figure class="flex-1 self-center t-align-c w-600-100">
                            <img class="display-inline-block max-w-100" src="<?php echo get_field("imagem_1")["sizes"]["post-convenios"] ?>" title="" alt="" />
                        </figure>
                        <?php
                    }
                    ?>
                    <?php
                    if( get_field("imagem_2")){
                        ?>
                        <figure class="flex-1 self-center m-left-40-px w-600-100 m-top-600-20">
                            <img class="w-100" src="<?php echo get_field("imagem_2")["sizes"]["post-convenios"] ?>" title="" alt="" />

                        </figure>
                        <?php
                    }
                    ?>
                </aside>
            </article>


<?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>