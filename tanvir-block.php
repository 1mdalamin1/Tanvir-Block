<?php
/**
 * Plugin Name:       Tanvir Block
 * Description:       Adds three Gutenberg blocks: an SVG Icon/Image block with 296+ WordPress icons, a Call To Action block, and a Contact block. All blocks are fully compatible with the Site Editor.
 * Version:           0.1.0
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Author:            1mdalamin1
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tanvir-block
 * Author URI:        https://profiles.wordpress.org/1mdalamin1/
 * Plugin URI:        https://github.com/1mdalamin1/Tanvir-Block
 *
 * @package TanvirBlock
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
