<?php

/*
 * === Advanced Custom Fields Functions ===
 * The Following functions will be used to add certain functionalities
 * to advanced custom fields plugin
 */

// Register Global Options Page for Advanced Custom Fields
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Global Settings',
		'menu_title'	=> 'MYWP Global Settings',
		'menu_slug' 	=> 'mywp-global-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}