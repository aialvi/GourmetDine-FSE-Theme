<?php
/**
 * Block styles.
 *
 * @package gourmetdine
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function gourmetdine_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'gourmetdine-flat-button',
			'label' => __( 'Flat button', 'gourmetdine' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'gourmetdine-list-underline',
			'label' => __( 'Underlined list items', 'gourmetdine' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'gourmetdine-box-shadow',
			'label' => __( 'Box shadow', 'gourmetdine' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'gourmetdine-box-shadow',
			'label' => __( 'Box shadow', 'gourmetdine' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'gourmetdine-box-shadow',
			'label' => __( 'Box shadow', 'gourmetdine' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'gourmetdine-plus',
			'label' => __( 'Plus & minus', 'gourmetdine' ),
		)
	);
}
add_action( 'init', 'gourmetdine_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function gourmetdine_unregister_block_style() {
	wp_enqueue_script(
		'gourmetdine-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GOURMETDINE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'gourmetdine_unregister_block_style' );
