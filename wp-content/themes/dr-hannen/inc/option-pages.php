<?php

function add_option_pages() {

	if( function_exists( 'acf_add_options_page' ) ) {
		// add sub page
		acf_add_options_page( array(
			'page_title' => 'Website Settings',
			'menu_slug'	 => 'website-settings',
			'icon_url' 	 => 'dashicons-building',
			'position'	 => 75
		) );
	
	}

}

add_action( 'acf/init', 'add_option_pages' );