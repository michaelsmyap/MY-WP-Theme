<?php 
    /**
     * index.php 
     * This is the page where the blogroll will be displayed.
     * 
     * @package WordPress
     * @subpackage MYWPTheme
     * @since MYWPTheme 1.0
     */ 
    get_header(); 
    if(have_posts()) :
?>

        <?php 
            while(have_posts()) :
                the_post();
                // $text_preview = get_field('text_preview');
                // $thumb_id = get_post_thumbnail_id();
                // $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                // $post_date = get_the_date( 'j F Y' );
                // echo the_author();
                // echo the_permalink();
                // echo the_post();
            
            endwhile;
        ?>

<?php 
    endif;
    get_footer(); 
?>