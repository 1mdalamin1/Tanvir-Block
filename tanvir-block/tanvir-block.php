<?php
/**
 * Plugin Name:       Tanvir Block
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.2
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            1mdalamin1
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tanvir-block
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block using a `blocks-manifest.php` file, which improves the performance of block type registration.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function create_block_tanvir_block_block_init() {
	$build_dir = __DIR__ . '/build/blocks';

	// Scan build directory for block folders
	foreach ( glob( $build_dir . '/*', GLOB_ONLYDIR ) as $block_dir ) {
		$block_json = $block_dir . '/block.json';
		if ( file_exists( $block_json ) ) {
			register_block_type( $block_dir );
		}
	}
}
add_action( 'init', 'create_block_tanvir_block_block_init' );

/**
 * Register custom block category for Tanvir Blocks.
 */
function tanvir_block_register_category( $categories, $post ) {
	// Add custom category to the beginning of the categories array.
	return array_merge(
		array(
			array(
				'slug'  => 'tanvirblocks',
				'title' => __( 'Tanvir Blocks', 'tanvir-block' ),
				'icon'  => null,
			),
		),
		$categories
	);
}
add_filter( 'block_categories_all', 'tanvir_block_register_category', 10, 2 );

require_once plugin_dir_path( __FILE__ ) . 'wp-backend/dashboard.php';
require_once plugin_dir_path( __FILE__ ) . 'others/others.php';

/*
* Plugin Option Page Style
*/
function tblock_add_wp_admin_plugin_css(){
    wp_enqueue_style( 'tblock-admin-style', plugins_url( 'assets/tblock-admin-style.css', __FILE__ ), false, "1.0.0");
    
}
add_action('admin_enqueue_scripts', 'tblock_add_wp_admin_plugin_css');

// === >>>> Dashboard Left side menu <<<< === \\

add_action("admin_menu", "tblock_wp_admin_dashboard_menu_reg");
function tblock_wp_admin_dashboard_menu_reg() {
    add_menu_page(
        __('Trava Soft','tanvir-block'), 
        __('Trava Soft','tanvir-block'), // menu title
        'manage_options', // capability
        'travasoft', // sluge
        'tblock_setting_fun', // function for page
        'dashicons-editor-outdent',
        10
        // plugins_url('/img/icon.png',__DIR__) // icon url
    );

    //add submenu 2
    // add_submenu_page(
    //     'travasoft', // parent menu slug
    //     __('Slider Text ','tanvir-block'), // Page title
    //     'Text Slider', // Menu title
    //     'manage_options',  // Capability
    //     'textSlider', // sub menu slug
    //     'tblock_text_slider_setting_fun' // sub meun funciton for page
    // );

}

// Including CSS
function tblock_enqueue_style(){
    wp_enqueue_style('tblock-style', plugins_url('assets/tblock-style.css', __FILE__));
}
add_action( "wp_enqueue_scripts", "tblock_enqueue_style" );
