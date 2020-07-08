<?php 
    /**
     * Template Name: Homepage
     *
     * @package WordPress
     * @subpackage MYWPTheme
     * @since MYWP 1.0
     */ 
    get_header();
    

    if(have_posts()) :
        while(have_posts()) :
            the_post();
        endwhile;
    endif;

    get_footer();
?>