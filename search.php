<?php 
/**
 * 
 * This is the page where the blog search will be displayed.
 * 
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header(); 
$search_string = $_GET['s'];
$news_banner = get_field('b_image_banner', 'options');
?>
    <div class="row" id="top">
        <div class="sixcol">
              <img src="<?php echo $news_banner['url']; ?>">
         </div>
         <div class="sixcol last title-img top" style="margin-top: -20px;">
              <h2 class="bigtitle"><?php the_field('blog_page_top_title', 'options'); ?></h2>
              <div class="doodle"><img src="http://italiannis.com/wp-content/themes/constellation/img/title-doodle.png"></div>  
         </div>
    </div>
    <?php 
        if(have_posts()) :
     ?>
    <div id="blogroll" class="row archive">
        <div class="ninecol">
            <h2>Search results for "<?php echo $search_string; ?>" keyword.</h2>
            <?php 
                while(have_posts()) :
                    the_post();
             ?>
            <article class="newspost">
                <header>
                    <h2 class="menuitem_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p><time datetime="<?php echo get_the_date('Y-m-d' ); ?>"><?php echo get_the_date('F j, Y' ); ?></time></p>
                </header>
                <div class="row">
                    <div class="threecol post-featured-image">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>  
                        </a>         
                    </div>
                    <div class="ninecol last post-content">
                        <p><?php the_field('post_preview'); echo "..."; ?></p>
                    </div>
                </div>
                <footer class="clearfix">
                    <a href="<?php the_permalink(); ?>" class="read-m-permalink">Read More</a>
                </footer>
                <div class="clear" style="padding-top: 30px; padding-bottom: 10px;"><img src="http://italiannis.com/wp-content/themes/constellation/img/divider.png"></div>
            </article>
            <?php 
                endwhile;
             ?>
             <div class="clearfix">
                 <?php get_next_posts_link( $label, $max_page ); ?>
                 <?php get_previous_posts_link( $label, $max_page ); ?>
             </div>
        </div>
        <aside id="sidebar" class="threecol last">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside>
    </div>
    <?php 
      else :
     ?>
    <div id="blogroll" class="row archive">
        <div class="ninecol">
            <h2>Your search "<?php echo $search_string; ?>" has returned 0 results. <br>Please use the search form on the sidebar to try again.</h2>
        </div>
        <aside id="sidebar" class="threecol last">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside>
    </div>

    <?php 
        endif;
     ?>
<?php get_footer(); ?>