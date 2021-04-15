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
    <section class="w-100 p-top-80 p-bottom-100">
        <div class="center">
            <?php if (have_posts()) : the_post(); ?>
            <nav class="w-100 container breadcrumbs">
                <ul class="w-100 d_flex wrap justify-center">
                    <li>
                        <a class="title d_flex wrap smooth" href="convenios" title="CONVÊNIOS">
                            <h1 class="self-center">
                                CONVÊNIOS
                            </h1>
                        </a>
                    </li>
                    <li>
                        <a class="title d_flex wrap active smooth" href="javascript:void(0)" title="ADVOCACIA">
                            <h2 class="self-center">
                                <?php the_title(); ?>
                            </h2>
                        </a>
                    </li>
                </ul>
            </nav>
            <h2 class="w-100 m-top-50 container t-align-c f-size-16 title-2">
                <?php the_title(); ?>
            </h2>
            <article class="w-100 m-top-35 d_flex wrap justify-center t-align-c list-covenants-internal m-top-1024-15">

                <?php if( have_rows('convenios') ): ?>
                        <?php while( have_rows('convenios') ): the_row();
                            $image = get_sub_field('imagem');
                            ?>
                            <div class="item">
                                <figure class="w-100 d_flex wrap direction-column justify-center">
                                    <img class="self-center" src="<?php echo $image["sizes"]["post-convenios"] ?>" title="" alt="" />
                                </figure>
                                <div class="w-100 d_flex wrap justify-center">
                                    <a class="btn t-align-c" href="<?php the_permalink(); ?>">
                                        Leia Mais
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                <?php endif; ?>
            </article>
            <?php endif; ?>
        </div>
    </section>


<?php get_footer(); ?>