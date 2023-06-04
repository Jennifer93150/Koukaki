<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    /** Script JS */
    wp_enqueue_script( 'animation-script', get_stylesheet_directory_uri() . '/js/animation.js');
    wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
    wp_enqueue_script( 'slider-swiper-script', get_stylesheet_directory_uri() . '/js/slider-swiper.js');
    wp_enqueue_script( 'navigation-script', get_stylesheet_directory_uri() . '/js/navigation-bar.js');
    //wp_deregister_script('foce-navigation');
    
    // Déclarer jQuery
     //wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    // wp_enqueue_script( // On déclare une version plus moderne
    //     'jquery', 
    //     'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
    //     false, 
    //     '3.3.1', 
    //     true 
    // );
 
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