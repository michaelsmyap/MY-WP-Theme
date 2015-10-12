<?php 
/**
 * single-services.php 
 * This is the page where the blog post will be displayed.
 * 
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header(); 
        if(have_posts()) :
     ?>
        <div id="content" class="service-details">
        
        <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <?php 
                while(have_posts()) :
                    the_post();
                    $text_preview = get_field('text_preview');
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                    $post_date = get_the_date( 'j F Y' );
                    $services_url = get_bloginfo('url') . "/services";

            ?>
            <div class="row">
                <div class="span8">
                    <div class="clearfix">
                        <div class="service-header clearfix">
                            <div class="thumb-container">
                                <?php 
                                    if($thumb_url) :
                                 ?>
                                <div class="post-thumb">

                                    <img src="<?php echo $thumb_url[0]; ?>" alt="" class="blog-post-thumb" />

                                </div>
                                <?php 
                                    endif;
                                 ?>
                            </div>
                            <div class="service-title-container">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="blog-post-excerpt">
                            <?php the_content(); ?>
                        </div>
                         
                        <h5 class="text-right mute"> <a href="<?php echo $services_url; ?>">Go Back to Services &raquo;</a></h5>
                    </div>
                </div>
                <div class="span4 side-bar">

                    <?php get_template_part( "layout/layout", "side-form" ); ?>

                </div><!-- end .span12 -->
                
            </div>
            <?php 
                endwhile;
                get_template_part( "layout/layout", "call-to-action" );
             ?>
        </div><!-- end #content -->  
<?php 
    endif;
    get_footer(); 
?>