<?php
/*
    Plugin Name: Divi Mobile Column Classes
    Plugin URI: http://www.kerjemtec.com
    Description: Keep All Divi Desktop layouts on Moble View
    Author: Kerwin Thompson
    Author URI: http://www.kerjemtec.com
    Version: 0.9.5
*/

require 'plugin-update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://gitlab.com/kerjemtec/divi-mobile-columns/',
	__FILE__, //Full path to the main plugin file or functions.php.
	'divi-mobile-columns'
);


//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('N5waYpiy49EFG6ii3pS2');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');


// it inserts the entry in the admin menu
add_action('admin_menu', 'class_plugin_create_menu_entry');

// creating the menu entries
function class_plugin_create_menu_entry() {
	// icon image path that will appear in the menu
	$icon = plugins_url('/images/css-plugin-icon-16.png', __FILE__);
	// adding the main manu entry
	add_menu_page('Divi Class Names', 'Class Names', 'edit_posts', 'main-page', 'class_plugin_show_main_page', $icon);
	
}

// function triggered in add_menu_page
function class_plugin_show_main_page() {
	include('main-page.php');
}



//add script to add css
function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style', $plugin_url . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );