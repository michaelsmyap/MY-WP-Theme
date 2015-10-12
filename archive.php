<?php 
/**
 * archive.php 
 * This is the page where the archive of the blog will be displayed.
 * 
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header(); 
$news_banner = get_field('b_image_banner', 'options');
?>
    <div class="row" id="top">
        <div class="sixcol">
              <img src="<?php echo $news_banner['url']; ?>">
         </div>
         <div class="sixcol last title-img top" style="margin-top: -20px;">
              <h2 class="bigtitle"><?php the_field('blog_page_top_title', 'options'); ?></h2>
         </div>
    </div>
    <?php 
        if(have_posts()) :
     ?>
    <div id="blogroll" class="row archive">
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="page-title">Archive for the ‘<?php single_cat_title(); ?>’ Category</h2>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 class="page-title">Posts Tagged ‘<?php single_tag_title(); ?>’</h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 class="page-title">Archive for <?php the_time('F jS, Y'); ?></h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 class="page-title">Archive for <?php the_time('F, Y'); ?></h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 class="page-title">Archive for <?php the_time('Y'); ?></h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 class="page-title">Author Archive</h2>
       <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="page-title">Blog</h2>
       <?php } ?>
        <div class="ninecol">
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
        endif;
     ?>
<?php get_footer(); ?>