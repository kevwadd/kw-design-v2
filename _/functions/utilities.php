<?php

	/**
	 * Print a pre formatted array to the browser - very useful for debugging
	 *
	 * @param 	array
	 * @return 	void
	 * @author 	Keir Whitaker
	 **/
	function print_a( $a ) {
		print( '<pre>' );
		print_r( $a );
		print( '</pre>' );
	}
	
	/**
	 * Simple wrapper for native get_template_part()
	 * Allows you to pass in an array of parts and output them in your theme
	 * e.g. <?php get_template_parts(array('part-1', 'part-2')); ?>
	 *
	 * @param 	array 
	 * @return 	void
	 * @author 	Keir Whitaker
	 **/
	function get_template_parts( $parts = array() ) {
		foreach( $parts as $part ) {
			get_template_part( $part );
		};
	}
	
	/**
	 * Append page slugs to the body class
	 * NB: Requires init via add_filter('body_class', 'add_slug_to_body_class');
	 *
	 * @param 	array 
	 * @return 	array
	 * @author 	Keir Whitaker
	 */
	function add_slug_to_body_class( $classes ) {
		global $post;
	   
		if( is_home() ) {			
			$key = array_search( 'blog', $classes );
			if($key > -1) {
				unset( $classes[$key] );
			};
		} elseif( is_page() ) {
			$classes[] = sanitize_html_class( $post->post_name );
		} elseif(is_singular()) {
			$classes[] = sanitize_html_class( $post->post_name );
		};

		return $classes;
	}
?>