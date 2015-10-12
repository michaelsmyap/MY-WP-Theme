<?php 
/**
 * Template Name: About Layout
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header();

    if(have_posts()) :
        while(have_posts()) :
            the_post();
	        $thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			$top_description = get_field('top_description');
			$featured_image_short_description = get_field('featured_image_short_description');
?>

		<div id="content">
		      <!-- // Page Header // -->
		      
		      <div class="page-header">

		        <div class="row">
		          <div class="span12">
		          
		            <h1 class="text-center"> <?php the_title(); ?> </h1>
		            <?php echo $top_description; ?>
		          
		          </div><!-- end .span6 -->
		          <div class="span12">
		          
		          
		          </div><!-- end .span6 -->
		        </div><!-- end .row -->

		      </div><!-- end .page-header -->
			
			
			<!-- // Page Boxed // -->
			
			<div class="page-boxed">
			
				<div class="row">
					<div class="span12">

						<!-- FlexSlider -->
						<div class="flexslider">
							<ul class="slides">
								
								<li>
									<img src="<?php echo $thumb_url[0]; ?>" alt="About" />
									<div class="slidetext left">
										<h2><?php echo $featured_image_short_description; ?></h2>
									</div>
								</li>
								
							</ul><!-- end .slides -->
						</div><!-- end .flexslider -->
						
						<div class="row">
		            		<?php the_content(); ?>
						</div><!-- end .row -->
					
					</div><!-- end .span12 -->
				</div><!-- end .row -->
			
			</div><!-- end .page-boxed -->
			
			
			
			<?php get_template_part( "layout/layout", "call-to-action" ); ?>
			
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
<?php
        endwhile;
    endif;
    get_footer();
?>
