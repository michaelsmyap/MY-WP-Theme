<?php 
    /**
     * archive.php 
     * This is the page where the archive of the blog will be displayed.
     * 
     * @package WordPress
     * @subpackage MYWPTheme
     * @since MYWP 1.0
     */ 
    get_header(); 

        if(have_posts()):
            // if (is_category()) {
            //     single_cat_title();
            // }  elseif( is_tag() ) {
            // } elseif (is_day()) {
            // } elseif (is_month()) {
            // } elseif (is_year()) {
            // } elseif (is_author()) {
            // } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { }
            
        
            while(have_posts()) :
                the_post();

                // the_permalink();
                // the_title();
                // get_the_date('Y-m-d' );
                // the_post_thumbnail();
                // the_field('post_preview');

            endwhile;


            get_next_posts_link( $label, $max_page );
            get_previous_posts_link( $label, $max_page ); 
            dynamic_sidebar( 'sidebar-1' ); 

        endif;
    
    get_footer();
?>