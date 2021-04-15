<?php
/*
  Template Name: Página Missão
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
                <section class="w-40 m-right-50-px t-align-c w-800-100">
                    <figure class="w-100 m-bottom-20">
                        <img class="display-inline-block max-w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png" title="" alt="" />
                    </figure>
                    <strong class="w-100 title-2">
                        Missão
                    </strong>
                </section>
                <aside class="flex-1 self-center m-top-800-30">
                    <div class="w-100 text text-3">
                        <?php the_content(); ?>
                    </div>
                </aside>
            </article>
            <article class="w-90 m-top-80 m-left-5 w-1024-100 d_flex wrap justify-space direction-800-column t-align-800-c">
                <section class="w-40 m-right-50-px t-align-c w-800-100">
                    <figure class="w-100 m-bottom-20">
                        <img class="display-inline-block max-w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.png" title="Visão" alt="Visão" />
                    </figure>
                    <strong class="w-100 title-2">
                        Visão
                    </strong>
                </section>
                <aside class="flex-1 self-center m-top-800-30">
                    <div class="w-100 text text-3">
                        <?php the_field("texto_1"); ?>
                    </div>
                </aside>
            </article>
            <article class="w-90 m-top-80 m-left-5 w-1024-100 d_flex wrap justify-space direction-800-column t-align-800-c">
                <section class="w-40 m-right-50-px t-align-c w-800-100">
                    <figure class="w-100 m-bottom-20">
                        <img class="display-inline-block max-w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/values.png" title="Valores" alt="Valores" />
                    </figure>
                    <strong class="w-100 title-2">
                        Valores
                    </strong>
                </section>
                <aside class="flex-1 self-center m-top-800-30">
                    <div class="w-100 text text-3">
                        <?php the_field("texto_2"); ?>
                    </div>
                </aside>
            </article>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>