<?php 
/**
 * The template for the header part of the site theme.
 *
 * @package WordPress
 * @subpackage MYWPTheme
 * @since MYWP 1.0
 */ 
?>
<!DOCTYPE html>
<html class="no-js" lang="en" >
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

    <?php 
        // bloginfo('url');
        // bloginfo( 'title' );
        // wp_nav_menu( array(
        //     'theme_location'  => 'main-menu',
        //     'container'       => false, 
        //     'echo'            => true,
        //     'menu_class'      => 'fixed',
        //     'menu_id'         => 'menu',
        //     'link_before'     => '',
        //     'link_after'      => '',
        //     'fallback_cb'     => 'wp_page_menu',
        //     'items_wrap'      => '<ul id="%1$s" class="%2s">%3$s</ul>',
        //     'depth'           => 2
        // ));
    ?>
