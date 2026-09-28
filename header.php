<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>

        <button type="button" class="site-header__menu-btn" aria-expanded="false" aria-controls="header-nav">
            <span class="site-header__menu-icon"></span>
            <span class="u-visually-hidden">メニューを開く</span>
        </button>

        <nav class="header-nav" id="header-nav">
            <ul class="header-nav__list">
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>