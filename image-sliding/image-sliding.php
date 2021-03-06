<?php
/*
Plugin Name: 	Image Sliding
Plugin URI: 	
Description: 	Touch enabled wordpress plugin that lets you create beautiful responsive carousel slider.
Version: 		1.4.2
Author: 		Manikandan
Author URI: 	
Text Domain: 	carouselslider
Domain Path: 	/languages/
License: 		GPLv2 or later
License URI:	
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
function activate_carousel_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/Carousel_Slider_Activator.php';
	Carousel_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_carousel_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/Carousel_Slider_Deactivator.php';
	Carousel_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_carousel_slider' );
register_deactivation_hook( __FILE__, 'deactivate_carousel_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/Carousel_Slider.php';

/**
 * Begins execution of the plugin.
 */
function run_carousel_slider() {

	$plugin = new Carousel_Slider();
	$plugin->run();

}
run_carousel_slider();
