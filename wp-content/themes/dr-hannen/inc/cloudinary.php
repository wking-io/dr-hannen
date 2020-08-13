<?php

add_action( 'init', 'setup_cloudinary' );

function setup_cloudinary() {
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

  if ( is_plugin_active( 'cloudinary-image-management-and-manipulation-in-the-cloud-cdn/cloudinary.php' ) ) :

    require_once( get_template_directory() . '/inc/cloudinary/autoload.php' );
    require_once( get_template_directory() . '/inc/cloudinary/src/Helpers.php' );

    $cloudinary_url_raw = get_option( 'cloudinary_url' );

    if ( false === $cloudinary_url_raw ) :
      error_log( 'No Cloudinary URL found in Options table.');
      return;
    endif;

    if ( ! empty( $cloudinary_url_raw ) && class_exists('Cloudinary') ) :

      \Cloudinary::config_from_url( $cloudinary_url_raw );
      error_log( print_r( function_exists( 'cl_video_tag' ), true ) );

    else :
      error_log( print_r( $secret, true ) );

      error_log( 'Failed to parse Cloudinary URL.' );

    endif;
  endif;
}