<?php
/*
  Template Name: Página Filia-se
 */
get_header();
?>

    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong class="w-100">
                            Filia-se
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
            <article class="w-80 m-left-10 d_flex wrap justify-space w-1024-100 direction-800-column t-align-800-c">
                <section class="w-250-px m-right-50-px w-800-100">
                    <article class="title d_flex wrap active smooth justify-1024-center">
                        <h1 class="self-center">
                            FILIA-SE
                        </h1>
                        <h2 class="w-100 m-top-15 title-2">
                            <?php the_title(); ?>
                        </h2>
                    </article>
                    <figure class="w-100 m-top-20">
                        <img class="display-inline-block max-w-100" src="<?php echo get_template_directory_uri(); ?>/uploads/page/associados.png" title="" alt="" />
                    </figure>
                </section>
                <aside class="flex-1 self-center m-top-800-30">
                    <div class="w-100 text text-3">
                        <?php the_content(); ?>
                    </div>
                </aside>
            </article>
            <h3 class="w-100 m-top-80 t-align-c title-2" id="form">
                FILIE-SE
            </h3>
            <article class="w-100 d_flex justify-center box-form box-form-2">
                <?php the_field("formulario-2"); ?>
            </article>
            <?php endif; ?>

            <div class="w-100 m-top-30 w-1024-100 t-align-c">
                <div class="w-100 title-2">
                    FORMULÁRIOS:
                </div>
                <article class="w-100 t-align-c">

                <?php
                if(have_rows('download-1') ){
                    ?>
                    <span class="w-100 title-3 m-top-30 main-color">
                        Versão Word:
                    </span>
                    <ul class="list-download f-left w-100 t-align-c">
                        <?php
                            while( have_rows('download-1') ) : the_row();
                            $file = get_sub_field('archive');
                        ?>
                            <li>
                                <a href="<?php echo $file['url']; ?>" target="_blank" title="">
                                    <?php the_sub_field('name_archive'); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php
                    }
                ?>

                <?php
                if(have_rows('download-2') ){
                    ?>
                    <span class="w-100 title-3 m-top-30 main-color">
                    Versão pdf:
                </span>
                    <ul class="list-download f-left w-100 t-align-c">
                        <?php
                        while( have_rows('download-2') ) : the_row();
                            $file = get_sub_field('archive_2');
                            ?>
                            <li>
                                <a class="" href="<?php echo $file['url']; ?>" target="_blank" title="">
                                    <?php the_sub_field('name_archive_2'); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php
                }
                ?>
                </article>
            </div>

        </div>
    </section>

<?php get_footer(); ?>