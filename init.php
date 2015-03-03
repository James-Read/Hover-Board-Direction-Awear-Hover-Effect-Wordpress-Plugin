<?php

/*
Plugin Name: HoverBoard
Plugin URI: http://www.jamesreadwebtech.com/resources/hover-board //coming soon!
Description: The best hover board since back to the future
Version: 1.0
Author: James Read
Author URI: http://www.fmsftw.com/
License: GPLv2
*/

//	Assign global variables
$plugin_url = WP_PLUGIN_URL . '/hover-board';
$options = array();
$display_json = false;

//	Add a link to plugin in the admin menu
function hover_board_menu() {
	add_options_page(
		'Hover Board Plugin',
		'Hover Board',
		'manage_options',
		'hover-board',
		'hover_board_options_page'
	);
}
add_action( 'admin_menu', 'hover_board_menu' );

function hover_board_options_page() {

	if( !current_user_can( 'manage_options' ) ) {

		wp_die( 'You do not have sufficient permissions to access this page.' );

	}

	global $plugin_url;
	global $options;
	global $display_json;

	if( isset( $_POST['hover_board_form_submitted'] ) ) {

		$hidden_field = esc_html( $_POST['hover_board_form_submitted'] );

		if( $hidden_field == 'Y' ) {

			$hover_board_inner_class_name = esc_html( $_POST['hover_board_inner_class_name'] );
			$hover_board_outer_class_name = esc_html( $_POST['hover_board_outer_class_name'] );

			$options['hover_board_inner_class_name']	= $hover_board_inner_class_name;
			$options['hover_board_outer_class_name']    = $hover_board_outer_class_name;
			$options['last_updated'] = time();

			update_option( 'hover_board', $options );

		}

	}

	$options = get_option( 'hover_board' );

	if( $options != '' ) {

		$hover_board_inner_class_name = $options['hover_board_inner_class_name'];
		$hover_board_outer_class_name =	$options['hover_board_outer_class_name'];

	}

	require( 'inc/options-page-wrapper.php' );

	require( 'inc/demo-code.php' );


}

// Populate the variables bellow from options page:
function hover_board_css_js() {
	$options = get_option( 'hover_board' );
	$hover_board_container_one = $options['hover_board_inner_class_name'];
	$hover_board_container_two = $options['hover_board_outer_class_name'];
	$type_of_container = ".";
	$hover_board_combined_containers = $type_of_container . $hover_board_container_one . "> ." . $hover_board_container_two;

    //Add the stylesheet into the header
	wp_enqueue_style("hover-board.css",WP_PLUGIN_URL."/Hover-Board-Direction-Awear-Hover-Effect-Wordpress-Plugin-master/css/style.css",false,null);
	wp_enqueue_style("hover-board.css",WP_PLUGIN_URL."/Hover-Board-Direction-Awear-Hover-Effect-Wordpress-Plugin-master/css/noJS.css",false,null);

	//Add the scripts in the footer
	wp_enqueue_script("jquery");
	wp_enqueue_script(
		"hover-board", WP_PLUGIN_URL."/Hover-Board-Direction-Awear-Hover-Effect-Wordpress-Plugin-master/js/jquery.hoverdir.js",
		array("jquery"), "1",1);
	wp_enqueue_script(
		"hover-board-modernizr", WP_PLUGIN_URL."/Hover-Board-Direction-Awear-Hover-Effect-Wordpress-Plugin-master/js/modernizr.custom.97074.js",
		array("jquery"), "",1);
	wp_enqueue_script(
		"hover-board-single", WP_PLUGIN_URL."/Hover-Board-Direction-Awear-Hover-Effect-Wordpress-Plugin-master/js/hover-board.js",
		array("jquery"), "",1);

wp_localize_script('hover-board-single', 'script_vars', array(
			'alert' => __($hover_board_combined_containers, 'pippin')
		)
	);
}
add_action( 'wp_enqueue_scripts', 'hover_board_css_js');

?>