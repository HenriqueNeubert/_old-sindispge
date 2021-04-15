<?php
/*
  Template Name: Página Inicial
 */
get_header();
?>

    <section class="w-100 main-banner slider-slick-banner">
    <?php
    $projetos = new WP_Query(
        array(
            'post_type' => 'banner',
            'posts_per_page' => 3
        )
    );
    while ($projetos->have_posts()) : $projetos->the_post();
        ?>
        <div class="f-left">
            <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-center">
                <article class="w-100">
                    <div class="center container">
                        <div class="w-90 m-left-5 w-1024-100">
                            <strong strong class="w-100">
                                <?php the_field("linha_1"); ?> <br /> <?php the_field("linha_2"); ?>
                            </strong>
                            <span class="w-100 m-top-20">
                            <?php the_field("linha_3"); ?>
                            </span>
                            <?php if(get_field("link")): ?>
                            <a class="f-left m-top-20 btn btn-2" href="<?php the_field("link"); ?>" title="SAIBA MAIS">
                                SAIBA MAIS
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            </div>
            <img class="w-100 relative z-index-1" src="<?php echo get_the_post_thumbnail_url($post->ID, "post-banner"); ?>" title="" alt="" />
        </div>
    <?php endwhile; ?>
        <?php
        $noticias = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => 1
            )
        );
        while ($noticias->have_posts()) : $noticias->the_post();
            ?>
            <div class="f-left">
                <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-center">
                    <article class="w-100">
                        <div class="center container">
                            <div class="w-90 m-left-5 w-1024-100">
                                <strong strong class="w-100">
                                    <?php the_title(); ?>
                                </strong>
                                <a class="f-left m-top-20 btn btn-2" href="<?php the_permalink(); ?>" title="SAIBA MAIS">
                                    SAIBA MAIS
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <img class="w-100 relative z-index-1" src="https://www.sindispge.org.br/provisorio/wp-content/uploads/2020/08/main-banner.jpg" title="" alt="" />
            </div>
        <?php endwhile; ?>
    </section>
    <section class="w-100 p-top-100 p-bottom-20">
        <div class="center container">
            <div class="w-90 m-left-5 w-1024-100">
                <section class="w-40 w-1024-100 t-align-1024-c">
                    <article class="w-100 d_flex wrap title justify-1024-center">
                        <h1 class="self-center">
                            INSTITUCIONAL
                        </h1>
                    </article>
                    <h2 class="w-100 m-top-20 title-2">
                        Quem somos
                    </h2>
                    <div class="w-100 m-top-15 text-grey text text-2">
                        <p>
                            Descubra quem somos e
                            <br />no que acreditamos!
                        </p>
                    </div>
                    <article class="w-100 m-top-20">
                        <a class="f-left btn btn-2 display-inline-block f-1024-n" href="quem-somos" title="SAIBA MAIS">
                            SAIBA MAIS
                        </a>
                    </article>
                </section>
                <aside class="w-55 f-right w-1024-100 t-align-1024-c m-top-1024-30">
                    <div class="w-100 text">
                        <?php if (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endif; ?>
                    </div>
                </aside>
            </div>
            <article class="w-100 p-top-80 d_flex wrap justify-center title">
                <h3 class="self-center">
                    SERVIÇOS
                </h3>
            </article>
        </div>
    </section>
    <article class="w-100 d_flex wrap list-services-featured direction-800-column">
        <a class="w-50 t-align-c item w-800-100" style="background: url(<?php echo get_template_directory_uri(); ?>/uploads/page/test.jpg) no-repeat;" href="juridico" title="Jurídico">
            <aside class="w-100 bg-white-transparent">
                <strong class="w-100 color-grey title-2">
                    Jurídico
                </strong>
                <div class="w-100 m-top-30 t-align-c">
                    <span class="display-inline-block btn btn-2">
                        SAIBA MAIS
                    </span>
                </div>
            </aside>
        </a>
        <a class="w-50 t-align-c item w-800-100" style="background: url(<?php echo get_template_directory_uri(); ?>/uploads/page/test.jpg) no-repeat;" href="associados" title="Associdados">
            <aside class="w-100 bg-white-transparent">
                <strong class="w-100 color-grey title-2">
                    Associado
                </strong>
                <div class="w-100 m-top-30 t-align-c">
                    <span class="display-inline-block btn btn-2">
                        SAIBA MAIS
                    </span>
                </div>
            </aside>
        </a>
    </article>
    <section class="w-100 p-top-100 p-bottom-100 bg-white-1">
        <div class="center">
            <article class="w-100 container d_flex wrap justify-center title">
                <h4 class="self-center">
                    CONVÊNIOS
                </h4>
            </article>
            <article class="w-100 m-top-15 d_flex wrap justify-center t-align-c list-covenants">
                <?php
                $projetos = new WP_Query(
                    array(
                        'post_type' => 'convenios',
                        'posts_per_page' => 6
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
                            <a class="w-100 p-top-30" href="<?php the_permalink(); ?>" title=""></a>
                        </article>
                    </div>
                <?php endwhile; ?>
            </article>
        </div>
    </section>
    <section class="w-100 p-top-100 p-bottom-100">
        <div class="center">
            <article class="w-100 container d_flex wrap justify-center title">
                <h5 class="self-center">
                    Blog
                </h5>
                <h2 class="w-100 m-top-20 t-align-c title-2">
                    ÚLTIMAS POSTAGENS
                </h2>
            </article>
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
            <div class="w-100 m-top-30 t-align-c m-top-1024-15">
                <a class="display-inline-block btn btn-2" href="blog" title="Blog">
                    VEJA TODAS
                </a>
            </div>
        </div>
    </section>


<?php get_footer(); ?>