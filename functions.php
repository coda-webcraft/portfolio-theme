<?php

function portfolio_theme_enqueue_styles()
{
    wp_enqueue_style('portfolio-theme-style', get_stylesheet_uri());
    wp_enqueue_script('header-nav', get_template_directory_uri() . '/assets/js/header-nav.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_styles');