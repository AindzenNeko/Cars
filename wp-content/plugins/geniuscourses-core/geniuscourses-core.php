<?php 
/*
Plugin Name: Geniuscourses Core
Plugin URI: https://geniuscourses-cars.com
Description: My plagin
Version: 1.0
Author: I
License: GPLv2 or later
Text Domain: geniuscourses-core
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

require_once(__DIR__.'/inc/elementor/elementor.php');
require_once(__DIR__.'/inc/post_types/car.php');