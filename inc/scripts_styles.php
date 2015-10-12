<?php

//Making jQuery Google API
add_action('init', 'modify_jquery'); 
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        // wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
        wp_register_script('jquery', THEME_DIR . '/js/vendor/jquery-1.10.2.min.js', false, '1.10.2', true);
        wp_enqueue_script('jquery');
    }
}

/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 * This will enqueue stylesheets and scripts to be used on various templates for the italiannis Theme.
 */
add_action( 'wp_enqueue_scripts', 'add_hs_stylesheet_scripts' );
function add_hs_stylesheet_scripts() {
    // Respects SSL, Style.css is relative to the current file
    if(!is_admin()) {
        wp_register_style( 'normalize-css' , THEME_DIR . '/css/normalize.css' , '' , array() , $media = 'all' );
        wp_register_style( 'main-css' , THEME_DIR . '/css/main.css' , '' , array() , $media = 'all' );
        wp_enqueue_style( 'normalize-css' );
        wp_enqueue_style( 'main-css' );

              
        wp_register_script( 'modernizr-js' , THEME_DIR . '/js/vendor/modernizr-2.6.2.min.js', '' , '', false );
        wp_register_script( 'plugins-js' , THEME_DIR . '/js/plugins.js', array( 'jquery' )  , '', true );
        wp_register_script( 'main-js' , THEME_DIR . '/js/main.js', array( 'jquery' )  , '', true );
        wp_enqueue_script( 'modernizr-js' );
        wp_enqueue_script( 'plugins-js' );
        wp_enqueue_script( 'main-js' );
        

        /*
        if(is_front_page()) {
            wp_register_script( 'home-js' , THEME_DIR . '/js/home.init.js', array( 'jquery' )  , '', true );
            wp_enqueue_script( 'home-js' );
        }

        if(is_singular( 'your-post-type here' )) {
    
        }


        if(is_page_template( 'your-template-file-here' )) {
        }

        if(is_post_type_archive( 'portfolio' ) || is_tax( 'portfolio_category'))  {
        }
        */
    }

    if(is_admin()) {
        wp_dequeue_style( 'normalize-css' );
        wp_dequeue_style( 'main-css' );
        wp_dequeue_script( 'main-js' );
        wp_dequeue_script( 'plugins-js' );
        wp_dequeue_script( 'main-js' );
    }


    if(is_login_page()) {
        wp_dequeue_style( 'normalize-css' );
        wp_dequeue_style( 'main-css' );
        wp_dequeue_script( 'main-js' );
        wp_dequeue_script( 'plugins-js' );
        wp_dequeue_script( 'main-js' );
    }
}
