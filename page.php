<?php 
/**
 * @package WordPress
 * @subpackage MYWPTheme
 * @since MYWPTheme 1.0
 */ 
get_header();
if(have_posts()) :
    while(have_posts()) :
        the_post();
?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php
    endwhile;
endif;
get_footer();
?>