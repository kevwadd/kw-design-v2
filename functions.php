<?php

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( '_/functions/utilities.php' );
	
	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );
	
	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */
	
	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function kw_widgets_init() {
	
		register_sidebar( array(
			'name' => 'Home blog feed',
			'id' => 'home-blog-feed',
			'before_widget' => '<div class="blog-feed">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'kw_widgets_init' );

	add_theme_support('post-thumbnails');
	
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'main_menu' => 'Main menu',
			  'footer_menu_work' => 'Footer menu work',
			  'footer_menu_info' => 'Footer menu info',
			  'footer_menu_legal' => 'Footer menu legal'
			)
		);
	}
	
	/* ========================================================================================================================
	
	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/_/js/site.js', array( 'jquery' ), 1.0, true );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_template_directory_uri().'/_/css/styles.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	
	
	if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	}
	
	if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
	}
	
	if( function_exists('acf_add_options_sub_page') ) {
   	 acf_add_options_sub_page( 'Home page' );
     acf_add_options_sub_page( 'Footer' );
    }
    
    function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
	}
	
?>