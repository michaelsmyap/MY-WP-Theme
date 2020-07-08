<?php

// Change number of posts per page
function limit_posts_per_archive_page() {
    $limit = get_option('posts_per_page');


    if (is_archive() && !is_admin()) :
        $limit = 9;
    endif;
    
    if (is_category() && !is_admin()) :
        $limit = 9;
    endif;
    
    if (is_post_type_archive( 'posts' ) && !is_admin()) :
        $limit = 3;
    endif;  

    // if ((is_post_type_archive( 'post-type-id' ) && !is_admin()) || (is_tax( 'taxonomy-id' ) && !is_admin())) :
    //     $limit = 9;
    // endif;

    // if (is_post_type_archive( 'post-type-id' ) && is_admin()) :
    //     $limit = 10;
    // endif;  

    set_query_var('posts_per_archive_page', $limit);
}
add_filter('pre_get_posts', 'limit_posts_per_archive_page');

//Fix for taxonomy archive pages.
function change_posttype() {
  if( is_tax('work-category') && !is_admin() ) {
    set_query_var( 'post_type', array( 'works' ) );
  }
  return;
}
add_action( 'parse_query', 'change_posttype' );

//Change the order of Posts
// add_action( 'pre_get_posts', 'my_change_sort_order'); 
// function my_change_sort_order($query){
//     if((is_post_type_archive( 'portfolio' ) || is_tax('portfolio_category')) && !is_admin()):
//      //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
//        //Set the order ASC or DESC
//        $query->set( 'order', 'ASC' );
//        //Set the orderby 
//        $query->set( 'orderby', 'menu_order' );
//     endif;    
// }
