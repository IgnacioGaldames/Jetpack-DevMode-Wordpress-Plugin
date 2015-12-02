<?php
/*
Plugin Name: Jetpack Dev Mode
Plugin URI:
Description: Turn Jetpack Development on or off again, simply by activating this plugin
Author: Ignacio Galdames
Author URI: http://ignaciogaldames.tk
Version: 1.0.0
*/


add_filter( 'jetpack_development_mode', '__return_true' );
?>
