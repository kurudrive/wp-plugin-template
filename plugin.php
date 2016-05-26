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
/*  Load pluginName js
/*-------------------------------------------*/
add_action( 'wp_head','pluginName_addJs' );
function pluginName_addJs() {
	wp_register_script( 'pluginName-js' , PLUGINNAME_URL.'js/pluginName.min.js', array( 'jquery' ), PLUGINNAME_VERSION );
	wp_enqueue_script( 'pluginName-js' );
}

/*-------------------------------------------*/
/*  Load pluginName admin js
/*-------------------------------------------*/
add_action( 'admin_print_scripts-pluginName_****', 'pluginName_admin_add_js' );
function pluginName_admin_add_js( $hook_suffix ) {
	wp_register_script( 'pluginName-admin-js', PLUGINNAME_URL.'js/pluginName_admin.min.js', array( 'jquery' ), PLUGINNAME_VERSION );
	wp_enqueue_script( 'pluginName-admin-js' );
}

/*-------------------------------------------*/
/*  Load pluginName css
/*-------------------------------------------*/
add_action( 'wp_enqueue_scripts', 'pluginName_style_enq' );
function pluginName_style_enq() {
	wp_enqueue_style( 'pluginName-style-css', PLUGINNAME_URL.'css/pluginName_style.css', array(), PLUGINNAME_VERSION, 'all' );
}

/*-------------------------------------------*/
/*  Load pluginName admin css
/*-------------------------------------------*/
add_action( 'admin_print_styles-pluginName_****', 'pluginName_style_admin_enq' );
function pluginName_style_admin_enq() {
	wp_enqueue_style( 'pluginName-admin-css', PLUGINNAME_URL.'css/pluginName_admin.css', array(), PLUGINNAME_VERSION, 'all' );
}
