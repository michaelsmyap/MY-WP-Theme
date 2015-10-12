<?php 
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header();
?>

<div class="row formpage-top center" id="top">
    <h2 class="sidebysidetitle">404 - Page Not Found</h2>
</div>
<div class="row clearfix">
    <div class="twelvecol not-found-container">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" alt="404 Page Not Found">
    </div>
</div>
<?php 
	get_footer();
?>