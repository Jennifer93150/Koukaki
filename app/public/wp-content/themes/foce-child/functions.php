<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    /** Script JS */
    wp_enqueue_script( 'animation-script', get_stylesheet_directory_uri() . '/js/animation.js');
    wp_enqueue_script( 'navigation-script', get_stylesheet_directory_uri() . '/js/navigation-bar.js');
    /** SWIPER */
    wp_enqueue_style( 'swiperjs-style', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    wp_enqueue_script( 'swiperjs-script', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'slider-swiper-script', get_stylesheet_directory_uri() . '/js/slider-swiper.js', array(), null, true );
    
    wp_enqueue_script( 'parallax-script', get_stylesheet_directory_uri() . '/js/parallax.js');
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}