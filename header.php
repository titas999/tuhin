<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body>

<!--
========================================
    Preloader
========================================
-->
<div class="preloader ">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!--
========================================
    Navigation
========================================
-->
<div id="top-nav" class="unveiled-navigation">
    <div class="container">
        <nav id="ev-nav" class="navigation">

            <div class="nav-header">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } ?>
                <div class="nav-toggle"></div>
            </div>

            <div class="nav-menus-wrapper">

                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary_menu',
                        'menu_class'    => 'nav-menu align-to-right'
                    ) );
                    ?>

            </div>

        </nav>
    </div>
</div>