<?php

/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage Technource
 * @since Technource 1.0
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="mobile-menu">
        <div class="navbar_mobile_area new-header fixed-top">
            <div class="logo me-auto">
                <a href="https://www.technource.com/" class="technource-top-logo">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </a>

                <span class="dashboard_openNav position-absolute" onclick="dashboardopenNav()"><i class="fa fa-bars"></i></span>
            </div>
            <div id="navbar_mobile" class="navbar_mobile" style="">
                <a href="javascript:void(0)" class="closebtn position-absolute" onclick="dashboardcloseNav()"><i class="fa fa-close"></i></a>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobile-menu',
                    'container_class' => 'custom-menu-class'
                ));
                ?>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-section desktop-header">
        <div class="container">

            <!-- Header Logo -->
            <div class="header-logo">

                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>

            <!-- Header Menu -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container_class' => 'custom-menu-class'
                ));
                ?>

            </div>
        </div>

    </nav>