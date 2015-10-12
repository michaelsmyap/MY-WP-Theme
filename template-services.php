<?php 
/**
 * Template Name: Services Layout
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header();

    if(have_posts()) :
        while(have_posts()) :
            the_post();
        	$services = get_field('services');
        	$services = array_chunk($services, 4);
?>

		<div id="content">

			<!-- // Page Header // -->
			
			<div class="page-header">

				<div class="row">
					<div class="span12">
					
						<h1 class="text-center"> <?php the_title(); ?> </h1>
						
					</div><!-- end .span6 -->
					<div class="span12">
					
						<p class="text-center"><?php the_content(); ?></p>
					
					</div><!-- end .span6 -->
				</div><!-- end .row -->

			</div><!-- end .page-header -->
			
			<?php 
				if($services) :
			?>
			<!-- // Page Boxed // -->
			
			<div class="page-boxed services-list-container">
				<?php 
					foreach($services as $services_row) :
				 ?>
				<div class="row services-list">
					<?php 
						foreach($services_row as $service) :
							$id = $service->ID;
							$url = get_permalink( $id );
							$title = $service->post_title;
							$preview_text = get_field('preview_text', $id);
							$thumb_id = get_post_thumbnail_id($id);
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
					 ?>
					<div class="span3 service">
						<div class="service-icon-container">
							<a href="<?php echo $url; ?>">
								<img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo $title; ?>">
							</a>
						</div>
						<div class="service-details-preview-container">
							<h2 class="text-center"><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></h2>
							<p class="text-center"><?php echo $preview_text; ?></p>
						</div>
					</div>
					<?php 
						endforeach;
					?>
				</div><!-- end .row -->
				<?php 
					endforeach;
				 ?>
			
			</div><!-- end .page-boxed -->
			
			<?php 
				endif;
			 ?>
			
			<?php get_template_part( "layout/layout", "call-to-action" ); ?>

		</div><!-- end #content -->
<?php
        endwhile;
    endif;
    get_footer();
?>
