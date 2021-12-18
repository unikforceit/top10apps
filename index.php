<?php
/**
 * Plugin Name:       Top10apps Addons
 * Plugin URI:        https://unikforce.com
 * Description:       Simple elementor addons
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            UnikForce IT
 * Author URI:        https://unikforce.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       top10apps
 * Elementor tested up to:     3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'Top10apps_PLUG_DIR', dirname(__FILE__).'/' );
define('Top10apps_PLUG_URL', plugin_dir_url(__FILE__));

function top10apps_addon() {

    // Load plugin file
    require_once( __DIR__ . '/includes/index.php' );

    // Run the plugin
    \Top10apps_Addon\Top10appsPlugin::instance();

}
add_action( 'plugins_loaded', 'top10apps_addon' );