<?php 
/**
 * single.php 
 * This is the page where the blog post will be displayed.
 * 
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header(); 
        if(have_posts()) :
     ?>
        <div id="content">
        
        <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <?php 
                while(have_posts()) :
                    the_post();
                    $text_preview = get_field('text_preview');
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                    $post_date = get_the_date( 'j F Y' );

            ?>
            <!-- // Page Header // -->
            
            <div class="page-header">

                <div class="row">
                    <div class="span6">
                    
                        <h1><?php the_title(); ?></h1>
                    
                    </div><!-- end .span6 -->
                    <div class="span6">
                        <div class="blog-post-info-full text-right">
                            Posted by <strong><?php the_author(); ?></strong><br /> <em><?php echo $post_date; ?></em>
                        </div>
                    </div><!-- end .span6 -->
                </div><!-- end .row -->

            </div><!-- end .page-header -->
            <div class="row">
                <div class="span8">
                    <div class="clearfix">
                        <?php 
                            if($thumb_url) :
                         ?>
                        <div class="post-thumb">

                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url[0]; ?>" alt="" class="blog-post-thumb" /></a>

                        </div>
                        <?php 
                            endif;
                         ?>
                        
                        <div class="blog-post-excerpt">
                            <?php the_content(); ?>
                        </div>
                         
                        <h5 class="text-right mute"> <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Go Back to News &raquo;</a></h5>
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