<?php 
/**
 * @package WordPress
 * @subpackage MYWPTheme
 * @since MYWPTheme 1.0
 */ 
get_header();
    if(have_posts()) :
        while(have_posts()) :
            the_post();
?>
        <section id="main-content" class="has-title">
            <div class="page-title-container">
                <div class="container shrinked">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="container shrinked text-content">
                <?php the_content(); ?>
            </div>
        </section>
<?php
        endwhile;
    endif;
    get_footer();
?>