<?php 
/**
 * The template for footer part of the site's theme.
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
$terms_of_use_url = get_field('terms_of_use_url', 'options');
$privacy_policy_url = get_field('privacy_policy_url', 'options');
 ?>
        <div id="footer">
        
        <!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="row">
                <div class="span3">

                     <?php dynamic_sidebar( 'footer-s-1' ); ?>
                
                </div><!-- end .span3 -->
                <div class="span3">

                     <?php dynamic_sidebar( 'footer-s-2' ); ?>

                </div><!-- end .span3 -->
                <div class="span3">
                    

                     <?php dynamic_sidebar( 'footer-s-3' ); ?>

                </div><!-- end .span3 -->
                <div class="span3">

                    <?php dynamic_sidebar( 'footer-s-4' ); ?>
                
                </div><!-- end .span3 -->
            </div><!-- end .row -->
            
            <div class="hr"></div>
            
            <div class="row">
                <div class="span9">
                
                    <p class="last"><?php the_field('copyright_text', 'options'); ?></p>
                
                </div><!-- end .span9 -->
                <div class="span3">
                
                    <p class="last"> <?php if($terms_of_use_url) : ?><a href="<?php echo $terms_of_use_url; ?>">Terms of Use</a> <?php endif; ?> / <?php if($privacy_policy_url) : ?><a href="<?php echo $privacy_policy_url; ?>">Privacy Policy</a><?php endif; ?></p>
                
                </div><!-- end .span3 -->
            </div><!-- end .row -->
            
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        </div><!-- end #footer -->
        
    </div><!-- end #wrap -->
    <?php 
        wp_footer(); 
    ?>
</body>
</html>