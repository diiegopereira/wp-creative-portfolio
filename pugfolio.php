<?php
/*
Plugin Name: Creative Portfolio
Plugin URI: http://wppug.com
Description: Creative portfolio for creative people. The plugin Registers a custom post type for portfolio items and display them on a creative grid. Also works with Elementor and King Composer Page Builders.
Author: WpPug
Version: 1.2
Author URI: http://themebear.co
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
 * PandoWP: Plugins
 */
require ('pando-plugins/pando-plugins.php');
/*
 * Plugin Options
 */
require ('panel.php');