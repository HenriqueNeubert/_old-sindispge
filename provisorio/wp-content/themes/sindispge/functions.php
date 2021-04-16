<?php

add_action( 'after_setup_theme', 'axel_register_menus' );
function axel_register_menus() {
    register_nav_menus( array(
        'menu-desktop' => 'Menu Principal',
        'menu-footer'  => 'Menu Rodapé',
        'menu-informativo'  => 'Menu Informativo'
    ) );
}

add_image_size('post-blog', 800, 533, true);
add_image_size('post-blog-galeria', 1200, 800, true);
add_image_size('post-convenios', "", 100, true);
add_image_size('post-banner', 1440, 550, true);

add_theme_support('post-thumbnails');
add_theme_support('menus');

add_action('wp_enqueue_scripts', 'axel_enqueue_scripts');
function axel_enqueue_scripts() {
    wp_enqueue_style('estilo', get_stylesheet_directory_uri() . '/assets/css/style.css?'.date('ydms'));

    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'));
    wp_enqueue_script('masked', get_stylesheet_directory_uri() . '/assets/js/plugins/masked.js', array('jquery'));
    wp_enqueue_script('html5lightbox', get_stylesheet_directory_uri() . '/assets/js/plugins/lightbox/html5lightbox.js', array('jquery'));
    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/js/plugins/slick/slick.min.js', array('jquery'));
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/plugins/slick/scripts.js', array('jquery'));
}
function wordpress_pagination() {
    global $wp_query;

    $big = 999999999;

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
}
add_action('init', 'axel_init');
function axel_init() {
    axel_register_post_types();
}function axel_register_post_types()
{
    register_post_type('banner', array(
            'labels' => array(
                'name' => 'Banner',
                'singular_name' => 'Banner',
                'add_new' => 'Adicionar Banner',
                'edit_item' => 'Editar Banner'
            ),
            'public' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail')
        )
    );
    register_post_type('convenios', array(
            'labels' => array(
                'name' => 'Convênios',
                'singular_name' => 'Convênio',
                'add_new' => 'Adicionar Convênio',
                'edit_item' => 'Editar Convênio'
            ),
            'public' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'supports' => array('title')
        )
    );
}


add_action('customize_register', 'axel_customize_register');

function axel_customize_register($wp_customize) {


    $wp_customize->add_section(
        'social_media', array(
            'title' => 'Links de contato e redes',
            'capability' => 'edit_theme_options',
            'priority' => 45,
            'description' => 'Permite você configurar os link para as redes sociais'
        )
    );


    $wp_customize->add_setting(
        'social_media_facebook', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_facebook', array(
            'label' => 'Link para Facebook',
            'section' => 'social_media',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'social_media_instagram', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_instagram', array(
            'label' => 'Link para Instagram',
            'section' => 'social_media',
            'type' => 'text'
        )
    );


    $wp_customize->add_setting(
        'social_media_email', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_email', array(
            'label' => 'Link para E-mail',
            'section' => 'social_media',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'social_media_whats', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_whats', array(
            'label' => 'Link para Whatsapp',
            'section' => 'social_media',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'social_media_telefones', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_telefones', array(
            'label' => 'Telefones',
            'section' => 'social_media',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'social_media_endereco', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'social_media_endereco', array(
            'label' => 'Endereço',
            'section' => 'social_media',
            'type' => 'text'
        )
    );

}
