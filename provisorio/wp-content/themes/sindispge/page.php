<?php
get_header();
?>

<?php if (have_posts()) : the_post(); ?>

    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong strong class="w-100">
                            <?php the_title(); ?>
                        </strong>
                    </div>
                </div>
            </article>
        </div>
        <img class="w-100 relative z-index-1" src="<?php echo get_template_directory_uri(); ?>/uploads/banner/banner-page.jpg" title="Notícias" alt="Notícias" />
    </section>
    <section class="w-100 p-top-20 p-bottom-100">
        <div class="center container">
            <nav class="w-100 breadcrumbs">
                <ul class="w-100 d_flex wrap justify-center">
                    <li>
                        <a class="title smooth" href="javascript:void();" title="INSTITUCIONAL">
                            <span class="self-center">
                            INSTITUCIONAL
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="title active smooth" href="quem-somos" title="QUEM SOMOS">
                            <span class="self-center">
                            QUEM SOMOS
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="title smooth" href="historico" title="HISTÓRICO">
                            <span class="self-center">
                            HISTÓRICO
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="title smooth" href="estatuto" title="ESTATUTO">
                            <span class="self-center">
                            ESTATUTO
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="title smooth" href="missao-visao-valores" title="MISSÃO, VISÃO E VALORES">
                            <span class="self-center">
                            MISSÃO, VISÃO E VALORES
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="title smooth" href="direcao-e-conselho" title="DIREÇÃO E CONSELHO">
                            <span class="self-center">
                            DIREÇÃO E CONSELHO
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <article class="w-90 m-top-80 m-left-5 w-1024-100 d_flex wrap justify-space direction-800-column t-align-800-c">
                <aside class="flex-1">
                    <div class="w-100 text text-3">
                        <?php the_content(); ?>
                    </div>
                </aside>
                <?php
                if (has_post_thumbnail()){
                    ?>
                    <figure class="w-40 self-center m-left-50-px t-align-c w-800-100 m-top-800-20">
                        <img class="display-inline-block max-w-90" src="<?php echo get_the_post_thumbnail_url($post->ID, "post-blog"); ?>" title="" alt="" />
                    </figure>
                    <?php
                }
                ?>
            </article>
            <article class="w-90 m-top-80 m-left-5 w-1024-100 d_flex wrap justify-space direction-800-column t-align-800-c">
                <section class="flex-1 self-center">
                    <div class="w-100 text text-3">
                        <?php the_field("texto_1"); ?>
                    </div>
                </section>
                <aside class="w-50 m-left-30-px self-center m-left-50-px w-800-100 m-top-800-20 t-align-800-c">
                    <div class="w-100 text text-3">
                        <?php the_field("texto_2"); ?>
                    </div>
                </aside>
            </article>
    </section>
<?php endif; ?>

<?php get_footer(); ?>