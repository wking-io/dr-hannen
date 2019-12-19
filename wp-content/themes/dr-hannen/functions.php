<?php
/**
 * Custom Theme Functions
 *
 * @package second-mile
 */

define( 'THEME_VERSION', '1.0.0' );
define( 'THEME_NAME', 'pft' );

// Setup
include 'inc/setup.php';

// Favicons
include 'inc/favicons.php';

// Assets.
include 'inc/assets.php';

// Disable Comments.
include 'inc/remove-comments.php';

// Add option pages for custom post types
include 'inc/option-pages.php';

// Add helper functions
include 'inc/helpers.php';

// Auto copyright
include 'inc/copyright.php';

// Template functions
include 'inc/templates.php';

// Menu functions
include 'inc/menu.php';

// Cloudinary functions
include 'inc/cloudinary.php';