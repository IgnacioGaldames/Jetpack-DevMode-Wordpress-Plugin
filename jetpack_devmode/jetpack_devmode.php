<?php
/*
Plugin Name: Jetpack Dev Mode
Plugin URI: 
Description: Activar o desactivar el wordpress de jetpack
Author: Ignacio Galdames
Author URI: http://ignaciogaldames.tk
Version: 0.1.1
*/


add_filter( 'jetpack_development_mode', '__return_true' );
?>