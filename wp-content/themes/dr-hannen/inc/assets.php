<?php
/**
 * Add all assets for theme
 *
 * @package second-mile
 */

if ( ! function_exists( 'dh_scripts' ) ) :

	function dh_scripts() {

		wp_register_script('dh_slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ) );

		wp_enqueue_script('dh_main');

		if ( is_front_page() ) :
			wp_enqueue_script('dh_home');
		endif;

		if ( is_page_template( 'templates/book.php' ) ) :
			wp_enqueue_script('dh_slick');
			wp_enqueue_script('dh_book');
		endif;

		if ( is_page_template( 'templates/tv.php' ) ) :
			wp_enqueue_script('dh_slick');
			wp_enqueue_script('dh_tv');
		endif;

		if ( is_page_template( 'templates/about.php' ) ) :
			wp_enqueue_script('dh_about');
		endif;

		if ( is_page_template( 'templates/media.php' ) ) :
			wp_enqueue_script('dh_slick');
			wp_enqueue_script('dh_media');
		endif;

		if ( is_page_template( 'templates/about.php' ) ) :
			wp_enqueue_script('dh_about');
		endif;

		if ( is_category() ) :
			wp_enqueue_script('dh_category');
		endif;

	}

endif;

add_action('wp_enqueue_scripts', 'dh_scripts');

if ( ! function_exists( 'dh_styles' ) ) :

	function dh_styles() {
		wp_register_style('dh_slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false, 'all');
		
			wp_enqueue_style('dh_fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i,800&display=swap', false, 'all');

			wp_enqueue_style('dh_main');
			
			if ( is_front_page() ) :
				wp_enqueue_style('dh_home');
			endif;

			if ( is_page_template( 'templates/book.php' ) ) :
				wp_enqueue_style('dh_slick');
				wp_enqueue_style('dh_book');
			endif;

			if ( is_page_template( 'templates/tv.php' ) ) :
				wp_enqueue_style('dh_slick');
				wp_enqueue_style('dh_tv');
			endif;

			if ( is_page_template( 'templates/about.php' ) ) :
				wp_enqueue_style('dh_about');
			endif;

			if ( is_page_template( 'templates/clinics.php' ) ) :
				wp_enqueue_style('dh_clinics');
			endif;

			if ( is_page_template( 'templates/contact.php' ) ) :
				wp_enqueue_style('dh_contact');
			endif;

			if ( is_page_template( 'templates/media.php' ) ) :
				wp_enqueue_style('dh_slick');
				wp_enqueue_style('dh_media');
			endif;

			if ( is_page_template( 'templates/about.php' ) ) :
				wp_enqueue_style('dh_about');
			endif;

			if ( is_home() ) :
				wp_enqueue_style('dh_blog');
			endif;

			if ( is_category() ) :
				wp_enqueue_style('dh_category');
			endif;

			if ( is_page() && ! is_page_template() ) {
				wp_enqueue_style('dh_page');
			}
	}

endif;

add_action('wp_enqueue_scripts', 'dh_styles');
