<?php 
/**
 * archive-works.php 
 * This is the page where the works will be displayed.
 * 
 * @package WordPress
 * @subpackage MYWPTheme
 * @since MYWP 1.0
 */ 
  get_header(); 
  
  $post_count = $wp_query->post_count;
  
  if(have_posts()) :
      $count = 1;
      while(have_posts()) :
        the_post();
        $id = $post->ID;
        $tax = wp_get_post_terms( $id, 'taxonomy-type');
        $tax_name = $tax[0]->name;
        $tax_url = get_term_link($tax[0], 'taxonomy-type');
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

      endwhile;
  endif;
  mywp_page_navi();
  get_template_part( "layout/layout", "call-to-action" );

  get_footer(); 
?>