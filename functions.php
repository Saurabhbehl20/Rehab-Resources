<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');


add_filter('nav_menu_link_attributes', 'additional_classes_in_navigation', 10, 4);
function additional_classes_in_navigation($classes, $item, $args, $depth){
    if( $args->theme_location == 'primary_navigation' || $args->theme_location == 'mobile_navigation' ) {
        if ( $depth != 0) {
            $classes['class'] = $args->sub_link_class;
        }else{
            $classes['class'] = $args->link_class;
        }
    }
    if( $args->theme_location == 'footer_navigation') {
        $classes['class'] = $args->link_class;
    }
    return $classes;
}


add_filter( 'nav_menu_css_class', 'custom_nav_class', 10, 3 );
function custom_nav_class( $classes, $item, $args ) {
 
    if( $args->theme_location == 'footer_navigation') {
        $classes[] = $args->li_class;;
    }
 
    return $classes;
 
}

add_filter( 'nav_menu_submenu_css_class', 'wpdocs_custom_dropdown_class' , 10, 2);
function wpdocs_custom_dropdown_class( $classes, $args ) {
    if( $args->theme_location == 'mobile_navigation' ) {
        $classes[] = 'bg-white';
    }
    return $classes;
}
 
add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items( $items, $args ) {
	
	// get menu
	$menu = wp_get_nav_menu_object($args->menu);
	
	
	// modify primary only
	if( $args->theme_location == 'primary_navigation' ) {
		
		$menu_item3 = '<li class="menu-item search-menu relative">
            <form action="'.esc_url( home_url( '/' ) ).'" id="searchform">
                <div class="input_search w-full flex items-center">
                    <img src="'.get_template_directory_uri().'/resources/images/search-icon.svg" class="img-search  pl-3 -mr-7" alt="search-icon" />
                    <input class="form-control pl-6 focus-visible:outline-none italic" value="'.get_search_query().'" type="search" placeholder="Search..." aria-label="Search" name="s" id="search">
                </div>
            </form>
            <button class="close-form relative block" type="button" id="searchbtn">
                <img src="'.get_template_directory_uri().'/resources/images/search-icon.svg" class="img-search" alt="search-icon" />
                <img src="'.get_template_directory_uri().'/resources/images/blue-close-icon.svg" class="img-close hidden" alt="search-icon" />
            </button>
        </li>';
		$items = $items.$menu_item3;
		
	}
	
	
	// return
	return $items;
	
}

function my_login_logo() { ?>
    <style type="text/css">
		body.login {
		    background: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/types.png);
		    background-size: cover;
            background-repeat: no-repeat;
		}
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/logo.svg);
		height: 85px;
        width: 250px;
        background-size: 100%;
	    background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );