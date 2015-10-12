<?php 
/**
 * taxonomy-work-category.php 
 * This is the page where the blogroll will be displayed.
 * 
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header(); 
$post_count = $wp_query->post_count;
$tax_title = get_queried_object()->name;
?>
    <div id="content">

      <!-- // Page Header // -->
      
      <div class="page-header">

        <div class="row">
          <div class="span12">
          
            <h1 class="text-center"> <?php echo $tax_title; ?> </h1>
          
          </div><!-- end .span6 -->
          <div class="span12">
          
            <?php the_field('our_works_subtitle', 'options'); ?>
          
          </div><!-- end .span6 -->
        </div><!-- end .row -->

      </div><!-- end .page-header -->
      
      <?php 
        if(have_posts()) :
      ?>
      <!-- // Page Boxed // -->
      
      <div class="page-boxed works-list-container">

          <?php 
            $count = 1;
            while(have_posts()) :
              the_post();
              $id = $post->ID;
              $tax = wp_get_post_terms( $id, 'work-category');
              $tax_name = $tax[0]->name;
              $tax_url = get_term_link($tax[0], 'work-category');
              $thumb_id = get_post_thumbnail_id();
              $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

              if($count == 1 || (($count - 1) % 3 == 0)) :
          ?>
          <div class="row works-list">
          <?php 
              endif;
           ?>
            <div class="span4 work">
            
                <div class="portfolio-item" data-mfp-src="<?php echo $thumb_url[0]; ?>" data-project-src="#" data-project-title="<?php the_title(); ?>" data-project-tax="<?php echo $tax_name; ?>" data-project-tax-url="<?php echo $tax_url; ?>">
                    <a class="thumb-link" href="#">
                      <img src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />
                    </a>
                    <div class="portfolio-item-description">
                    
                        <h6><?php echo $tax_name; ?></h6>
                        <h4> <a href="#"><?php the_title(); ?></a> </h4>
                        
                        
                    </div><!-- end .portfolio-item-description -->
                </div><!-- end .portfolio-item -->  
            
            </div><!-- end .span4 -->
          <?php 
            if(($count % 3) == 0 || $count == $post_count) :
           ?>
          </div><!-- end .row -->
          <?php 
            endif;
              $count++;
            endwhile;
          ?>
        
        <?php hs_page_navi(); ?>
      
      </div><!-- end .page-boxed -->
      
      <?php 
        endif;
       ?>
      
      <?php get_template_part( "layout/layout", "call-to-action" ); ?>

    </div><!-- end #content -->
<?php get_footer(); ?>