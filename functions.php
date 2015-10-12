<?php
/**
 * Functions.php for MYWPTheme Theme by Michael Yap of michaelsmyap.com
 * This file will include functions that will be used by the MYWPTheme Theme
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since MYWPTheme 1.0
 * 
 * === Default Functions ===
 * The Following functions will be used to add useful functionalities
 * to the italiannis Theme.
 *
 */
// For Security Purposes
define( 'DISALLOW_FILE_EDIT', true );



define('THEME_DIR', get_stylesheet_directory_uri());

// Enable post thumbnails
add_theme_support('post-thumbnails');
// Add Image Sizes - DISABLED
// add_image_size( 'thumb_size_here', 600, 9999);

//Add support for Wordpress 3.0's navigation menu
function register_hs_menu() {
    register_nav_menus( array(
        'main-menu'     =>  'Main Menu',
        'footer-menu'   =>  'Footer Menu'
    ) );
}
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_hs_menu' );


// Initiate Widgets
require_once('inc/widgets_init.php');
// Initiate Theme Scripts and Style Queue
require_once('inc/scripts_styles.php');
// Post Type and Taxonomy Overrides
require_once('inc/post_tax.php');
// Pagination Function
require_once('inc/pagination.php');
// Duplicate Post Content
require_once('inc/duplicate_post.php');
// Include Timthumb
require_once('inc/timthumb_extension.php');
// Include Custom Functions
require_once('inc/custom_functions.php');
// Include Custom Filters
require_once('inc/custom_filters_actions.php');
// ACF Custom Methods
require_once('inc/acf_extension.php');


// Disable Single Post Page
add_action( 'template_redirect', 'wpse_128636_redirect_post' );

function wpse_128636_redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'works' ==  $queried_post_type ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}

