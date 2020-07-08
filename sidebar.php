<?php
/**
 * The template for the sidebar of the blog of the site theme.
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since MYWP 1.0
 */ 
?>
<aside>
	<?php 
	    if ( !is_single() && !is_archive() && !is_home() ) : 
	        dynamic_sidebar( 'sidebar-1' );
	    else :
	        dynamic_sidebar( 'sidebar-2' );
	    endif;
	 ?>
</aside> 

