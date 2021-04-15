<?php
/*
  Template Name: Página Contato
 */
get_header();
?>


    <section class="w-100 relative main-banner">
        <div class="w-100 h-100 absolute z-index-2 top-0 left-0 d_flex wrap direction-column justify-end">
            <article class="w-100">
                <div class="center container">
                    <div class="w-100 m-bottom-80">
                        <strong strong class="w-100">
                            Contato
                        </strong>
                    </div>
                </div>
            </article>
        </div>
        <img class="w-100 relative z-index-1" src="<?php echo get_template_directory_uri(); ?>/uploads/banner/banner-page.jpg" title="Notícias" alt="Notícias" />
    </section>
    <section class="w-100 list-contact">
        <div class="center">
            <section class="w-100 p-top-80 p-bottom-80">
                <article class="w-100 d_flex wrap justify-center">
                    <figure class="self-center">
                        <img class="f-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="CONTATO">
                    </figure>
                    <span class="self-center title-3 p-left-5-px secondary-color ">
                        CONTATO
                    </span>
                </article>
                <section class="w-100 m-top-40 d_flex wrap justify-center m-top-800-20">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.9768332801436!2d-51.23001418472991!3d-30.037522481884782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197903b939dae7%3A0x504bf443cb164aa2!2sAv.%20Borges%20de%20Medeiros%2C%201224%20-%201202%20-%20Centro%20Hist%C3%B3rico%2C%20Porto%20Alegre%20-%20RS%2C%2090020-024!5e0!3m2!1spt-BR!2sbr!4v1598553189378!5m2!1spt-BR!2sbr" width="440px" height="190px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <ul class="self-center c-left p-left-40-px d_flex wrap direction-column w-1024-100 m-top-1024-30">
                        <li class="d_flex wrap justify-1024-center">
                            <figure class="self-center w-600-100 d_flex wrap justify-600-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-phone.png" alt="TELEFONE" title="TELEFONE">
                            </figure>
                            <div class="self-center text text-4 grey p-left-10-px w-600-100 m-top-600-10 t-align-600-c">
                                <p>
                                    (51) 3211-1044 e (51) 99856-0406
                                </p>
                            </div>
                        </li>
                        <li class="m-top-30 d_flex wrap justify-1024-center">
                            <figure class="self-center w-600-100 d_flex wrap justify-600-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-email-2.png" alt="E-MAIL" title="E-MAIL">
                            </figure>
                            <a class="self-center" href="" title="E-mail">
                                <div class="text text-4 grey p-left-10-px w-600-100 m-top-600-10 t-align-600-c">
                                    <p>
                                        sindispge@sindispge.org.br
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="m-top-30 d_flex wrap justify-1024-center">
                            <figure class="self-center w-600-100 d_flex wrap justify-600-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-pin.png" alt="ENDEREÇO" title="ENDEREÇO">
                            </figure>
                            <div class="self-center text text-4 grey p-left-10-px w-600-100 m-top-600-10 t-align-600-c">
                                <p>
                                    Avenida Borges de Medeiros, 1224, Cj. 1303- Centro Histórico
                                    <br>
                                    Porto Alegre RS - CEP 90020-025
                                </p>
                            </div>
                        </li>
                    </ul>
                </section>
                <article class="w-100 m-top-50 d_flex justify-center box-form">
                    <?php if (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </article>
            </section>
        </div>
    </section>

<?php get_footer(); ?>