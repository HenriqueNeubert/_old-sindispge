<?php get_header(); ?>

    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong strong class="w-100">
                            CONVÊNIOS
                        </strong>
                    </div>
                </div>
            </article>
        </div>
        <img class="w-100 relative z-index-1" src="<?php echo get_template_directory_uri(); ?>/uploads/banner/banner-page.jpg" title="Notícias" alt="Notícias" />
    </section>
    <section class="w-100 p-top-100 p-bottom-100">
        <div class="center">
            <article class="w-100 container d_flex wrap justify-center title">
                <h1 class="self-center">
                    CONVÊNIOS
                </h1>
            </article>
            <article class="w-100 m-top-15 d_flex wrap justify-center t-align-c list-covenants">
                <?php
                $projetos = new WP_Query(
                    array(
                        'post_type' => 'convenios',
                        'posts_per_page' => -1
                    )
                );
                while ($projetos->have_posts()) : $projetos->the_post();
                    ?>
                    <div class="item">
                        <article class="w-100">
                            <a class="w-100" href="<?php the_permalink(); ?>" title="Advocacia">
                                <strong class="w-100 f-size-20 title-2">
                                    <?php the_title(); ?>
                                </strong>
                            </a>
                                <?php if( have_rows('convenios') ): ?>
                                    <div class="w-100 slider-slick-covenant">
                                        <?php while( have_rows('convenios') ): the_row();
                                            $image = get_sub_field('imagem');
                                            ?>
                                            <div class="w-100">
                                                <a class="" href="<?php the_permalink(); ?>" title="Advocacia">
                                                    <figure class="w-100 d_flex wrap direction-column justify-center">
                                                        <img class="self-center" src="<?php echo $image["sizes"]["post-convenios"] ?>" title="" alt="" />
                                                    </figure>
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            <a class="w-100 p-top-30" href="<?php the_permalink(); ?>" title=""></a>
                        </article>
                    </div>
                <?php endwhile; ?>
            </article>
        </div>
    </section>

<?php get_footer(); ?>