<?php 
/**
 * Template Name: Our Works Layout
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header();

?>
    <div id="content">

      <!-- // Page Header // -->
      
      <div class="page-header">

        <div class="row">
          <div class="span12">
          
            <h1 class="text-center"> <?php the_title(); ?> </h1>
          
          </div><!-- end .span6 -->
          <div class="span12">
          
            <p class="text-center mute"><?php the_content(); ?></p>
          
          </div><!-- end .span6 -->
        </div><!-- end .row -->

      </div><!-- end .page-header -->
      
      <?php 
      		// Define custom query parameters
			$custom_query_args = array( 
										'post_type' => 'works',
										'posts_per_page' => 3
									);

			// Get current page and append to custom query parameters array
			$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

			// Instantiate custom query
			$custom_query = new WP_Query( $custom_query_args );
			// Pagination fix
	?>

      <pre>
      	<?php 
			var_dump($custom_query); ?>
      </pre>
	<?php
			$temp_query = $wp_query;
			$wp_query   = NULL;
			$wp_query   = $custom_query;
			if ( $custom_query->have_posts() ) :
      ?>
      <!-- // Page Boxed // -->
      <div class="page-boxed services-list-container">

        <div class="row works-list">
          <?php 
		    while ( $custom_query->have_posts() ) :
		        $custom_query->the_post();
          ?>
          <div class="span4 work">
          
              <div class="portfolio-item">
                  <img src="<?php echo THEME_DIR; ?>/img/pics/300x200-1.png" alt="" />
                  <div class="portfolio-item-description">
                  
                      <h6> imperdiet eu </h6>
                      <h4> <a href="work-single-item.html">Etiam vel eros</a> </h4>
                      
                      
                  </div><!-- end .portfolio-item-description -->
              </div><!-- end .portfolio-item -->  
          
          </div><!-- end .span4 -->
          <?php 
    		endwhile;
          ?>
        </div><!-- end .row -->

      
      </div><!-- end .page-boxed -->
      
      <?php 
        endif;

		// Reset postdata
		wp_reset_postdata();
		// Reset main query object
		
		$wp_query = NULL;
		$wp_query = $temp_query;


        // Using WP Page Navi 
        wp_pagenavi( array( 'query' => $custom_query ) );

       ?>
      
      <?php get_template_part( "layout/layout", "call-to-action" ); ?>

    </div><!-- end #content -->
<?php
    get_footer();
?>
