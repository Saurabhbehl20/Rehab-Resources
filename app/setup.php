<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    // <link rel="preconnect" href="https://fonts.googleapis.com">
    // <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    // <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lato:wght@400;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

    wp_enqueue_style( 'fonts-rehab', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lato:wght@400;;500;700;800;900&family=Montserrat:wght@600;700&display=swap', null, false);

    wp_enqueue_style( 'fontawesome-rehab', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', null, false);
    wp_enqueue_style( 'slick-min-rehab', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', null, false);
    wp_enqueue_style( 'slick-rehab', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', null, false);

    wp_enqueue_style( 'rehab-style', get_template_directory_uri() . '/resources/styles/style.css', null, false);

    wp_enqueue_script("cookie_js", 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js', array('jquery'), null, true);
    wp_enqueue_script("slick_js", 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script("rehab_js", get_template_directory_uri() . '/resources/scripts/custom.js', array('jquery'), null, true);
    bundle('app')->enqueue();
}, 100);

add_action('init', function () {
    // var_dump(get_template_directory_uri());
    // filemtime( get_template_directory_uri().'/assets/css/app.css');
    // echo  date("F d Y H:i:s.", filemtime($filename));
    // $filename = get_template_directory_uri().'/resources/styles/style.css' ;
    // echo date('F d Y H:i:s',filemtime($filename));
    
    // var_dump(filemtime( get_template_directory_uri().'/assets/css/app.css'));
    
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);
    
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'mobile_navigation' => __('Mobile Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size( 'blog-thumb', 325, 275, true ); 

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});