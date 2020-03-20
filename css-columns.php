<?php
/*
    Plugin Name: Divi Mobile CSS Columns
    Plugin URI: http://www.kerjemtec.com
    Description: Keep All Divi Desktop layouts on Moble Column Layout 
    Author: Kerwin Thompson
    Author URI: http://www.kerjemtec.com
    Version: 1.3.0
*/

// it inserts the entry in the admin menu
add_action('admin_menu', 'css_columns_create_menu_entry');

// creating the menu entries
function css_columns_create_menu_entry() {
	// icon image path that will appear in the menu
	$icon = plugins_url('/images/css-plugin-icon-16.png', __FILE__);
	// adding the main manu entry
	add_menu_page('CSS Columns', 'Class Names', 'edit_posts', 'main-page-css-columns', 'css_columns_show_main_page', $icon);
	// adding the sub menu entry
	add_submenu_page( 'main-page-css-columns', 'Support', 'Support', 'edit_posts', 'support', 'css_columns_add_another_page' );
}

// function triggered in add_menu_page
function css_columns_show_main_page() {
	include('main-page-css-columns.php');
}

// function triggered in add_submenu_page
function css_columns_add_another_page() {
	include('thankyou.php');
}


//add script to add css
function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style', $plugin_url . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );





require 'path/to/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://example.com/path/to/details.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'unique-plugin-or-theme-slug'
);