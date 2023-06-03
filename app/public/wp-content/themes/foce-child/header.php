<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"></a>
        <header id="masthead" class="header">
            <nav id="navigation" class="header_nav">
                <div class="header_nav_bar">
                    <div></div>
                    <a class="header_nav_bar_title" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                    <div class="header_nav_bar_cross"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Burger croix.png'; ?>" alt=""></div>
                    <button id="button" class="header_nav_bar_burger" aria-controls="primary-menu" aria-expanded="false">
                        <span class="header_nav_bar_burger_line"></span>
                        <span class="header_nav_bar_burger_line"></span>
                        <span class="header_nav_bar_burger_line"></span>
                    </button>
                </div>
                <div class="header_nav_menu">
                    <img class="header_nav_menu_img" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Image logo en paralax.png'; ?>" alt="logo">
                    <ul>
                        <li class="header_nav_menu_list_item_story"><a href="#story">Histoire</a></li>
                        <li class="header_nav_menu_list_item_characters"><a href="#characters">Personnages</a></li>
                        <li class="header_nav_menu_list_item_place"><a href="#place">Lieu</a></li>
                        <li class="header_nav_menu_list_item_studio"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <p class="header_nav_menu_studio-koukaki">Studio koukaki</p>
                </div>
            </nav>
        </header>