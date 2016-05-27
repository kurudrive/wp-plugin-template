<?php
/**
 * Plugin Name: VK PLUGIN NAME
 * Plugin URI:
 * Version: 0.0.1
 * Author: Vektor,Inc.
 * Author URI: http://www.vektor-inc.co.jp
 * Description:
 * Text Domain: plugins-text-domain
 * Domain Path: /languages
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

$data = get_file_data( __FILE__, array( 'version' => 'Version','textdomain' => 'Text Domain' ) );
define( 'PLUGINNAME_VERSION', $data['version'] );
define( 'PLUGINNAME_TEXTDOMAIN', $data['textdomain'] );
define( 'PLUGINNAME_BASENAME', plugin_basename( __FILE__ ) );
define( 'PLUGINNAME_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGINNAME_DIR', plugin_dir_path( __FILE__ ) );

// require_once( PLUGINNAME_DIR . 'class.pluginname-common.php' );

/*-------------------------------------------*/
/*  Load plugin_name js
/*-------------------------------------------*/
add_action( 'wp_head','plugin_name_addJs' );
function plugin_name_addJs() {
	wp_register_script( 'plugin_name-js' , PLUGINNAME_URL.'js/plugin_name.min.js', array( 'jquery' ), PLUGINNAME_VERSION );
	wp_enqueue_script( 'plugin_name-js' );
}

/*-------------------------------------------*/
/*  Load plugin_name admin js
/*-------------------------------------------*/
add_action( 'admin_print_scripts-plugin_name_****', 'plugin_name_admin_add_js' );
function plugin_name_admin_add_js( $hook_suffix ) {
	wp_register_script( 'plugin_name-admin-js', PLUGINNAME_URL.'js/plugin_name_admin.min.js', array( 'jquery' ), PLUGINNAME_VERSION );
	wp_enqueue_script( 'plugin_name-admin-js' );
}

/*-------------------------------------------*/
/*  Load plugin_name css
/*-------------------------------------------*/
add_action( 'wp_enqueue_scripts', 'plugin_name_style_enq' );
function plugin_name_style_enq() {
	wp_enqueue_style( 'plugin_name-style-css', PLUGINNAME_URL.'css/plugin_name_style.css', array(), PLUGINNAME_VERSION, 'all' );
}

/*-------------------------------------------*/
/*  Load plugin_name admin css
/*-------------------------------------------*/
add_action( 'admin_print_styles-plugin_name_****', 'plugin_name_style_admin_enq' );
function plugin_name_style_admin_enq() {
	wp_enqueue_style( 'plugin_name-admin-css', PLUGINNAME_URL.'css/plugin_name_admin.css', array(), PLUGINNAME_VERSION, 'all' );
}
