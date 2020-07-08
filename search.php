<?php 
    /**
     * 
     * This is the page where the blog search will be displayed.
     * 
     * @package WordPress
     * @subpackage MYWPTheme
     * @since MYWP 1.0
     */ 
    get_header(); 
    $search_string = $_GET['s'];
    $news_banner = get_field('b_image_banner', 'options');
?>
    <?php 
        if(have_posts()) :
     ?>
    <?php echo $search_string; ?>

    <?php 
        while(have_posts()) :
            the_post();
        ?>
        <!-- Essentials -->
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php echo get_the_date('Y-m-d' ); ?>
        <?php the_field('post_preview'); echo "..."; ?>
        <?php 
            endwhile;
        ?>
    <?php get_next_posts_link( $label, $max_page ); ?>
    <?php get_previous_posts_link( $label, $max_page ); ?>

    <?php dynamic_sidebar( 'sidebar-1' ); ?>

    <?php 
      else :
     ?>
    <!-- No Results -->
    <?php 
        endif;
     ?>
<?php get_footer(); ?>