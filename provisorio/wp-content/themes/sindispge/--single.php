<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong class="w-100">
                            <?php the_title(); ?>
                        </strong>
                    </div>
                </div>
            </article>
        </div>
        <img class="w-100 relative z-index-1" src="<?php echo get_template_directory_uri(); ?>/uploads/banner/banner-page.jpg" title="Notícias" alt="Notícias" />
    </section>
    <section class="w-100 p-top-100 p-bottom-100">
        <div class="center">

        <?php if( have_rows('convenios') ): ?>
        <?php while( have_rows('convenios') ): the_row();
            $image = get_sub_field('imagem');
            ?>
            <article class="w-100 container">
                <div class="w-90 m-left-5 w-1024-100 t-align-1024-c">
                    <?php if (have_posts()) : the_post(); ?>
                    <h1 class="w-100 t-align-c title-2">
                        <?php the_title(); ?>
                    </h1>
                    <span class="w-100 m-top-30 secondary-color-1 f-size-14">
                    <?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>
                    </span>
                    <div class="w-100 m-top-20 m-top text">
                        <?php the_content(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </article>

        <?php
            endwhile;
            endif;
        ?>
        <?php endif; ?>
            <h1 class="w-100 container m-top-100 t-align-c secondary-color title-2">
                Últimos notícias<!--trocar por mais acessados-->
            </h1>
            <article class="w-100 m-top-20 d_flex wrap justify-center list-news m-top-1024-10 t-align-1024-c">
                <?php
                $projetos = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    )
                );
                while ($projetos->have_posts()) : $projetos->the_post();
                    ?>
                    <div div class="f-left item">
                        <a class="w-100" href="<?php the_permalink(); ?>" title="">

                            <?php
                            if (has_post_thumbnail()){
                                ?>
                                <figure class="w-100 m-bottom-20">
                                    <img class="w-100" src="<?php echo get_the_post_thumbnail_url($post->ID, "post-blog"); ?>" title="" alt="" />
                                </figure>
                                <?php
                            }
                            ?>
                            <span class="w-100">
                        <?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>
                        </span>
                            <strong class="w-100 m-top-10 f-size-18 title-2">
                                <?php the_title(); ?>
                            </strong>
                            <div class="w-100 m-top-10 text text-3">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </article>
        </div>
    </section>


<?php get_footer(); ?>