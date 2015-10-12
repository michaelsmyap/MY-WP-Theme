<?php 
/**
 * Template Name: Contact Layout
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header();

    if(have_posts()) :
        while(have_posts()) :
            the_post();
?>
        <div id="content">
        

            <div class="row home-intro">
                <div class="span8 home-intro-text">
                    <h1>Contact Us!</h1>
                    <?php the_content(); ?>
                    
                    
                </div>
                <div class="span4 side-bar">
                
                    <!-- Get Side Contact Form -->
                    <?php get_template_part( "layout/layout", "side-form" ); ?>

                </div><!-- end .span12 -->
            </div><!-- end .row -->

        </div><!-- end #content -->
<?php
        endwhile;
    endif;
    get_footer();
?>
