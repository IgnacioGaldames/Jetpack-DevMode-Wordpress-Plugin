<?php
/*
Plugin Name: Jetpack Dev Mode
Plugin URI: https://wordpress.org/plugins/jetpack-dev-mode/
Description: Turn Jetpack Development on or off again, simply by activating this plugin
Author: Ignacio Galdames
Author URI: http://ignaciogaldames.com
Version: 1.0.1
*/


add_filter( 'jetpack_development_mode', '__return_true' );
?>
