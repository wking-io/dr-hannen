<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @since      1.0.0
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 */
class DhCore {

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      DhCoreLoader   $loader    Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function __construct() {

        $this->plugin_name = 'dh-core';
        $this->version = '1.0.0';

        $this->load_dependencies();
        $this->register_admin_hooks();
        $this->register_public_hooks();

    }

    /**
     * Load the required dependencies for this plugin.
     *
     * Create an instance of the loader which will be used to register the hooks
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function load_dependencies()
    {
        /**
         * The class responsible for orchestrating the actions and filters of the
         * core plugin.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'dh-core/inc/dh-core-loader.php';

        /**
         * The class responsible for orchestrating the actions and filters of the
         * core plugin.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'dh-core/ui/ui.php';

        $this->loader = new DhCoreLoader();

    }

    private function get_asset_url( $path ) {
      return plugin_dir_url( dirname( __FILE__ ) ) . 'dh-core/build/' . $path;
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    public function register_admin_styles() {
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    public function register_admin_scripts() {
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    public function register_public_styles() {
      wp_register_style('dh_main', $this->get_asset_url( 'css/main.css' ), array(), '1.0.0' );
      wp_register_style('dh_home', $this->get_asset_url( 'css/home.css' ), array(), '1.0.0' );
      wp_register_style('dh_book', $this->get_asset_url( 'css/book.css' ), array(), '1.0.0' );
      wp_register_style('dh_tv', $this->get_asset_url( 'css/tv.css' ), array(), '1.0.0' );
      wp_register_style('dh_clinics', $this->get_asset_url( 'css/clinics.css' ), array(), '1.0.0' );
      wp_register_style('dh_contact', $this->get_asset_url( 'css/contact.css' ), array(), '1.0.0' );
      wp_register_style('dh_media', $this->get_asset_url( 'css/media.css' ), array(), '1.0.0' );
      wp_register_style('dh_page', $this->get_asset_url( 'css/page.css' ), array(), '1.0.0' );
      wp_register_style('dh_about', $this->get_asset_url( 'css/about.css' ), array(), '1.0.0' );
      wp_register_style('dh_blog', $this->get_asset_url( 'css/blog.css' ), array(), '1.0.0' );
      wp_register_style('dh_category', $this->get_asset_url( 'css/category.css' ), array(), '1.0.0' );
      wp_register_style('dh_single', $this->get_asset_url( 'css/single.css' ), array(), '1.0.0' );
      wp_register_style('dh_search', $this->get_asset_url( 'css/search.css' ), array(), '1.0.0' );
      wp_register_style('dh_shop', $this->get_asset_url( 'css/shop.css' ), array(), '1.1.0' );
      wp_register_style('dh_product', $this->get_asset_url( 'css/product.css' ), array(), '1.1.0' );
      wp_register_style('dh_cart', $this->get_asset_url( 'css/cart.css' ), array(), '1.0.0' );
      wp_register_style('dh_checkout', $this->get_asset_url( 'css/checkout.css' ), array(), '1.0.0' );
      wp_register_style('dh_order_received', $this->get_asset_url( 'css/order-received.css' ), array(), '1.0.0' );
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    public function register_public_scripts() {
      wp_register_script('dh_main', $this->get_asset_url( 'js/main.js' ), array(), '1.0.0', true );
      wp_register_script('dh_home', $this->get_asset_url( 'js/home.js' ), array(), '1.0.0', true );
      wp_register_script('dh_book', $this->get_asset_url( 'js/book.js' ), array( 'jquery' ), '1.0.0', true );
      wp_register_script('dh_tv', $this->get_asset_url( 'js/tv.js' ), array( 'jquery' ), '1.0.0', true );
      wp_register_script('dh_media', $this->get_asset_url( 'js/media.js' ), array( 'jquery' ), '1.0.0', true );
      wp_register_script('dh_about', $this->get_asset_url( 'js/about.js' ), array( 'jquery' ), '1.0.0', true );
      wp_register_script('dh_category', $this->get_asset_url( 'js/category.js' ), array(), '1.0.0', true );
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function register_admin_hooks() {
      $this->loader->add_action( 'admin_enqueue_scripts', $this, 'register_admin_styles', 0 );
      $this->loader->add_action( 'admin_enqueue_scripts', $this, 'register_admin_scripts', 0 );
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function register_public_hooks() {
      $this->loader->add_action( 'wp_enqueue_scripts', $this, 'register_public_styles', 0 );
      $this->loader->add_action( 'wp_enqueue_scripts', $this, 'register_public_scripts', 0 );
    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    1.0.0
     */
    public function run() {
        $this->loader->run();
    }

    /**
     * The name of the plugin used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since     1.0.0
     * @return    string    The name of the plugin.
     */
    public function get_plugin_name() {
        return $this->plugin_name;
    }

    /**
     * The reference to the class that orchestrates the hooks with the plugin.
     *
     * @since     1.0.0
     * @return    DhCoreLoader    Orchestrates the hooks of the plugin.
     */
    public function get_loader() {
        return $this->loader;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since     1.0.0
     * @return    string    The version number of the plugin.
     */
    public function get_version() {
        return $this->version;
    }

}
