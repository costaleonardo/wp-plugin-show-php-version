<?php 
/*
Plugin Name: Show PHP Version
Description: Show current PHP version in the admin page.
Version: 1.0
Author: Leonardo da Costa
Author URI: https://github.com/costaleonardo
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once( plugin_dir_path( __FILE__ ) . '/includes/show-php-scripts.php' );

?>