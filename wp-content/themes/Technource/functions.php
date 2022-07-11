<?php

/**
 * Technource functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Technource
 * @since Technource 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


// Register Javascript in footer
function theme_scripts()
{
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js');
    wp_register_script('slider-js', get_template_directory_uri() . '/assets/js/slider.js', array(), null, true);
    wp_enqueue_script('slider-js');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Register Style in Header

function theme_styles()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    // wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css');
}
add_action('wp_enqueue_scripts', 'theme_styles', 1);

// Create widgets sidebar

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => "Footer Logo",
        'id' => 'footer-logo'
    ));

    register_sidebar(array(
        'name' => "Footer Widgets 1",
        'id' => 'footer-menu-1'
    ));

    register_sidebar(array(
        'name' => "Footer Widgets 2",
        'id' => 'footer-menu-2'
    ));

    register_sidebar(array(
        'name' => "Footer Widgets 3",
        'id' => 'footer-menu-3'
    ));
}

// Logo Footer
add_theme_support('custom-logo');

// All Menu's

function wpb_custom_new_menu()
{
    register_nav_menu('primary', __('Header Menu'));
    register_nav_menu('footer-menu-1', __('Footer Widgets 1'));
    register_nav_menu('footer-menu-2', __('Footer Widgets 2'));
    register_nav_menu('footer-menu-3', __('Footer Widgets 3'));
    register_nav_menu('mobile-menu', __('Mobile Menu'));
}
add_action('init', 'wpb_custom_new_menu');


// Testimonial Custom Post Type

function Testimonial_init()
{
    // set up Testimonial labels
    $labels = array(
        'name' => 'Testimonial',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'all_items' => 'All Testimonial',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonial',
        'not_found' =>  'No Testimonial Found',
        'not_found_in_trash' => 'No Testimonial found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Testimonial',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'testimonial'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type('Testimonial', $args);

    // register taxonomy
    register_taxonomy('testimonial_category', 'testimonial', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array('slug' => 'testimonial-category')));
}
add_action('init', 'Testimonial_init');


function prefix_nav_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);
