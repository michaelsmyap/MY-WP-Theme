<?php

// Add support for Wordpress 3.0's widgets
function hs_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Footer Sidebar 1', 'mywp' ),
        'id' => 'footer-s-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Sidebar 2', 'mywp' ),
        'id' => 'footer-s-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Footer Sidebar 3', 'mywp' ),
        'id' => 'footer-s-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Footer Sidebar 4', 'mywp' ),
        'id' => 'footer-s-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
}

add_action( 'widgets_init', 'hs_widgets_init' );