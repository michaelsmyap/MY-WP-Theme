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
        <div id="content">
        
        <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


              <!-- // Page Header // -->
              
              <div class="page-header">

                <div class="row">
                  <div class="span12">
                  
                    <h1 class="text-center"> News </h1>
                  
                  </div><!-- end .span6 -->
                  <div class="span12">
                  
                    <p class="text-center mute">Morbi id nisl nec odio pretium placerat. Nullam pulvinar neque eu nulla euismod, ac tempor mauris molestie. Vestibulum sollicitudin facilisis magna sed blandit. In ut justo ipsum. </p>
                  
                  </div><!-- end .span6 -->
                </div><!-- end .row -->

              </div><!-- end .page-header -->
            <div class="row">
                <div class="span8">
                <?php 
                    while(have_posts()) :
                        the_post();
                        $text_preview = get_field('text_preview');
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                        $post_date = get_the_date( 'j F Y' );

                ?>
                    <div class="clearfix blog-post">
                            <?php 
                                if($thumb_url) :
                             ?>
                            <div class="post-thumb">

                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url[0]; ?>" alt="" class="blog-post-thumb" /></a>

                            </div>
                            <?php 
                                endif;
                             ?>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="blog-post-info">
                                Posted by <strong><?php the_author(); ?></strong><br /> <em><?php echo $post_date; ?></em>
                            </div>
                            
                            <div class="blog-post-excerpt">
                                <p><?php echo $text_preview; ?> [...]</p>
                                <p class="blog-post-readmore"><a href="<?php the_permalink(); ?>">Read Full Article →</a></p>
                            </div>
                             
                    </div>
                <?php 
                    endwhile;
                 ?>
                    <div class="pagination">
                        <?php echo hs_page_navi(); ?>
                    </div>
                </div>
                <div class="span4 side-bar">

                    <div class="side-contact-form">
                        <div class="side-contact-form-container">
                            <h3><strong>Let's Talk!</strong></h3>
                            <p>To receive an accurate quote for your project please leave your details below and one of our friendly and experienced consultants will be in contact with you very shortly.</p>
                            <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
                        </div>
                    </div>

                </div><!-- end .span12 -->
                
            </div>

            <!-- Call to Action -->
            <?php get_template_part( "layout/layout", "call-to-action" ); ?>

        </div><!-- end #content -->  
<?php 
    endif;
    get_footer(); 
?>