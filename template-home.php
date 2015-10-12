<?php 
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
get_header();
    

    if(have_posts()) :
        while(have_posts()) :
            the_post();
            $services_list_1 = get_field('services_list_1');
            $services_list_2 = get_field('services_list_2');
            $featured_works = get_field('featured_works');
            $works = get_bloginfo('url') . "/works";
            $services_obj = get_field('select_services_page', 'options');
            $services = get_field('services', $services_obj->ID);
?>      
        <div id="slider-container"> 
            <?php 
                echo do_shortcode( '[layerslider id="1"]' ); 
            ?>
        </div>
        <div id="services-showcase">
            <h2 class="text-center heading"><?php the_field('featured_services_heading', 'options'); ?></h2>
            <div class="row featured-services">
                <?php 
                    if($services) :
                ?>
                <!-- // Page Boxed // -->
                
                <div class="services-list-container">
                    <div class="row" id="services-list-horz">
                        <?php 
                            foreach($services as $service) :
                                $id = $service->ID;
                                $url = get_permalink( $id );
                                $title = $service->post_title;
                                $preview_text = get_field('preview_text', $id);
                                $thumb_id = get_post_thumbnail_id($id);
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                         ?>
                        <div class="service">
                            <div class="service-icon-container">
                                <a href="<?php echo $url; ?>">
                                    <img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo $title; ?>">
                                </a>
                            </div>
                            <div class="service-details-preview-container">
                                <h2 class="text-center"><a href="<?php echo $url; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></h2>
                            </div>
                        </div>
                        <?php 
                            endforeach;
                        ?>
                    </div><!-- end .row -->
                
                </div><!-- end .page-boxed -->
                
                <?php 
                    endif;
                 ?>
            </div>
        </div>
        <div id="content">
            <div class="row home-intro">
                <div class="span8 home-intro-text">
                    <?php the_content(); ?>
                    <?php 
                        if($services_list_1 || $services_list_2) :
                     ?>
                    <ul class="featured-services clearfix unstyled">
                        <?php 
                            if($services_list_1) :
                         ?>
                        <div class="featured-services-group">
                            <?php 
                                foreach($services_list_1 as $service) :
                                    $id = $service->ID;
                                    $title = get_the_title( $id );
                                    $url = get_permalink( $id );
                                    $thumb_id = get_post_thumbnail_id($id);
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                             ?>
                            <li><a href="<?php echo $url; ?>"><div class="icon-container"><img src="<?php hs_resize_image($thumb_url[0], 20, 20); ?>" alt="<?php echo $title; ?>"></div> <?php echo $title; ?></a></li>
                            <?php 
                                endforeach;
                             ?>
                        </div>
                        <?php 
                            endif;
                            if($services_list_2) :
                         ?>
                        <div class="featured-services-group">
                            <?php 
                                foreach($services_list_2 as $service) :
                                    $id = $service->ID;
                                    $title = get_the_title( $id );
                                    $url = get_permalink( $id );
                                    $thumb_id = get_post_thumbnail_id($id);
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                             ?>
                            <li><a href="<?php echo $id; ?>"><div class="icon-container"><img src="<?php hs_resize_image($thumb_url[0], 20, 20); ?>" alt="<?php echo $title; ?>"></div> <?php echo $title; ?></a></li>
                            <?php 
                                endforeach;
                             ?>
                        </div>
                        <?php 
                            endif;
                         ?>
                    </ul>
                    <?php 
                        endif;
                     ?>
                </div>
                <div class="span4 side-bar">
                
                    <?php get_template_part( "layout/layout", "side-form" ); ?>

                </div><!-- end .span12 -->
            </div><!-- end .row -->


            <div class="hr"></div>

            <?php 
                if($featured_works) :
             ?>
            <div class="row">
                <div class="span12">
                    
                    <div class="section-title">
                        <h2 class="text-center text-uppercase last"><?php the_field('feature_works_main_title'); ?></h2>
                        <h3 class="mute text-center last"><?php the_field('featured_works_sub_title'); ?></h3>
                    </div>

                    <div class="portfolio-items">

                        <div class="row works-list-container clearfix">
                            <?php 
                                foreach($featured_works as $work) :
                                  $id = $work->ID;
                                  $title = $work->post_title;
                                  $tax = wp_get_post_terms( $id, 'work-category');
                                  $tax_name = $tax[0]->name;
                                  $tax_url = get_term_link($tax[0], 'work-category');
                                  $thumb_id = get_post_thumbnail_id($id);
                                  $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                            ?>
                            <div class="span4 work">
                            
                                <div class="portfolio-item" data-mfp-src="<?php echo $thumb_url[0]; ?>" data-project-src="#" data-project-title="<?php echo $title; ?>" data-project-tax="<?php echo $tax_name; ?>" data-project-tax-url="<?php echo $tax_url; ?>">
                                    <a class="thumb-link" href="#">
                                      <img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo $title; ?>" />
                                    </a>
                                    <div class="portfolio-item-description">
                                    
                                        <h6><?php echo $tax_name; ?></h6>
                                        <h4> <a href="#"><?php echo $title; ?></a> </h4>
                                        
                                        
                                    </div><!-- end .portfolio-item-description -->
                                </div><!-- end .portfolio-item -->  
                            
                            </div><!-- end .span4 -->
                            <?php 
                                endforeach;
                             ?>
                        </div><!-- end .row -->
                    
                    </div><!-- end .portfolio-items -->

                    <div class="text-center clearfix">
                        <a href="<?php echo $works_url; ?>" class="belize-hole-flat-btn">See More of our Works</a>
                    </div>

                </div>
            </div><!-- end .row -->
            <?php 
                endif;
             ?>

        </div><!-- end #content -->
<?php
        endwhile;
    endif;
    get_footer();
?>