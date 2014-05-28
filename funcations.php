<?php

/*
Plugin Name: CB Default Latest JQuery Enabler
Plugin URI: http://wordpress.org/plugins/cb-default-latest-jquery-enabler
Description: This is just Wordpress Default Latest JQuery Enable.
Author: Md Abul Bashar
Version: 1.0
Author URI: http://www.codingbank.com
*/


// wordpress Latest jQurey script

function cb_wordpress_latest_jquery_enabler() {
	wp_enqueue_script('jquery');
}
add_action('init', 'cb_wordpress_latest_jquery_enabler');

	
	

?>