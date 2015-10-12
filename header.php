<?php 
/**
 * The template for the header part of the site theme.
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since HS 1.0
 */ 
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en" ><!--<![endif]-->
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title><?php wp_title(); ?></title>

        <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?php echo THEME_DIR; ?>/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_DIR; ?>/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_DIR; ?>/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_DIR; ?>/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_DIR; ?>/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_DIR; ?>/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_DIR; ?>/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_DIR; ?>/apple-touch-icon-152x152.png" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <!-- Favicons -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php
            wp_head();
        ?>

    </head>
    <body <?php body_class(); ?>>
        <!--[if lte IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?php 
            $site_logo = get_field('site_logo', 'options');
            $header_contact_number = get_field('header_contact_number', 'options');
            $facebook_page_url = get_field('facebook_page_url', 'options');
            $twitter_page_url = get_field('twitter_page_url', 'options');
         ?>
        <div id="wrap">
        
            <div id="header" class="ie-dropdown-fix">
            
            <!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="row">
                    <div class="span4">
                        <!-- // Logo // -->
                        <a href="<?php bloginfo('url'); ?>" id="logo">
                            <img src="<?php echo $site_logo['url']; ?>" class="responsive-img" alt="<?php bloginfo( 'title' ); ?>">
                        </a>
                    </div><!-- end .span3 -->
                    <div class="span8">
                        <div class="quick-contact-details-container clearfix">
                            <!-- // Social Media // -->
                            <?php 
                                if($facebook_page_url || $twitter_page_url) :
                             ?>
                            <ul id="social-media" class="fixed">
                                <li><a href="<?php echo $facebook_page_url; ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $twitter_page_url; ?>"><i class="fa fa-twitter"></i></a></li>
                            </ul><!-- end #social-media -->
                            <?php 
                                endif;
                             ?>
                            <p>Call Us Now at <a href="tel:<?php echo $header_contact_number;  ?>"><strong><?php echo $header_contact_number; ?></strong></a></p>
                        </div>
                        <div class="main-menu-container clearfix">                      
                            <!-- // Menu // -->
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location'  => 'main-menu',
                                    'container'       => false, 
                                    'echo'            => true,
                                    'menu_class'      => 'fixed',
                                    'menu_id'         => 'menu',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul id="%1$s" class="%2s">%3$s</ul>',
                                    'depth'           => 2
                                ));
                             ?>
                             <!-- end #menu -->
                        </div>
        
                    </div><!-- end .span9 -->
                </div><!-- end .row -->

            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            </div><!-- end #header -->

