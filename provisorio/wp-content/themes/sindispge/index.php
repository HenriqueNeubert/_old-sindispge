<?php get_header(); ?>


    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong strong class="w-100">
                            Notícias
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
                    NOTÍCIAS
                </h1>
                <h2 class="w-100 m-top-20 t-align-c title-2">
                    Últimas postagens
                </h2>
            </article>
            <article class="w-100 m-top-20 d_flex wrap justify-center list-news m-top-1024-10 t-align-1024-c">
                <?php
                    if (have_posts()) : while (have_posts()) : the_post();
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
                <?php endif; ?>
                <div class="w-100 d_flex justify-center wrap pagination m-top-30">
                    <?php wordpress_pagination(); ?>
                </div>
            </article>
        </div>
    </section>


<?php get_footer(); ?>