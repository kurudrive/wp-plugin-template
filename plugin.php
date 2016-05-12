<?php
/*
Plugin Name: PLUGIN NAME
Version: 0.0.1
Author: Vektor,Inc.
Author URI: http://www.vektor-inc.co.jp
Plugin URI:
Description:
Text Domain: plugins-text-domain
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


$data = get_file_data( __FILE__, array( 'version' => 'Version' ) );
define( 'PLUGINNAME_VERSION', $data['version'] );

define( 'PLUGINNAME_BASENAME', plugin_basename( __FILE__ ) );
define( 'PLUGINNAME_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGINNAME_DIR', plugin_dir_path( __FILE__ ) );


require_once( PLUGINNAME_DIR . 'class.pluginname-common.php' );
