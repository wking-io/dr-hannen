<?php
/**
 * Add all assets for theme
 *
 * @package second-mile
 */

if ( ! function_exists( 'dh_scripts' ) ) :

	function dh_scripts() {
		wp_enqueue_script('dh_main');

		if ( is_front_page() ) :
			wp_enqueue_script('dh_home');
		endif;

		if ( is_page_template( 'templates/about.php' ) ) :
			wp_enqueue_script('dh_about');
		endif;

	}

endif;

add_action('wp_enqueue_scripts', 'dh_scripts');

if ( ! function_exists( 'dh_styles' ) ) :

	function dh_styles() {
			wp_enqueue_style('dh_fonts', 'https://use.typekit.net/zpg4miq.css', false, 'all');
			wp_enqueue_style('dh_main');
			
			if ( is_front_page() ) :
				wp_enqueue_style('dh_home');
			endif;

			if ( is_page_template( 'templates/book.php' ) ) :
				wp_enqueue_style('dh_book');
			endif;

			if ( is_page_template( 'templates/about.php' ) ) :
				wp_enqueue_style('dh_about');
			endif;
	}

endif;

add_action('wp_enqueue_scripts', 'dh_styles');
