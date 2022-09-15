<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.1.1
 * 
 * Gutenberg Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/module-colors.php');
require_once(get_template_directory() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/module-fonts.php');


/* Register CSS Styles and Scripts */
function children_charity_gutenberg_support() {
	$color_palettes = children_charity_gutenberg_editor_color_palettes_styles();

	add_theme_support('editor-color-palette', $color_palettes);
}

add_action('after_setup_theme', 'children_charity_gutenberg_support');


/* Block Editor Color Palettes and Styles */
function children_charity_gutenberg_editor_color_palettes_styles( $get_styles = false ) {
	$colors = cmsmasters_color_picker_palettes();

	$color_palettes = array();
	$styles_out = '';

	$index = 1;

	foreach ($colors as $color) {
		$color_palettes[] = array(
            'slug' => 'color-' . $index,
			'color' => $color,
		);

		if ( $get_styles ) {
			$styles_out .= "
			.has-color-{$index}-color {
				color: {$color};
			}

			.has-color-{$index}-background-color {
				background-color: {$color};
			}
			";
		}

		$index += 1;
	}

	if ( $get_styles && '' !== $styles_out ) {
		return $styles_out;
	}

	return $color_palettes;
}


/* Enqueue Block Editor Styles */
function children_charity_gutenberg_editor_styles() {
	wp_deregister_style('wp-block-library-theme');
	wp_register_style('wp-block-library-theme', '');
	
    wp_enqueue_style('children-charity-gutenberg-editor-style', get_theme_file_uri( '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/editor-style.css' ), false, '1.0', 'all');
	
	
	if (is_rtl()) {
		wp_enqueue_style('children-charity-gutenberg-editor-style-rtl', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/module-rtl.css', array(), '1.0.0', 'screen');
	}
	
	// Scripts
	wp_enqueue_script('children-charity-gutenberg-editor-options-script', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/editor-options.js', array('jquery'), '1.0.0', true);
	
	$gutenberg_module_styles = children_charity_gutenberg_module_colors('', true);
	$gutenberg_module_styles .= children_charity_gutenberg_module_fonts('', true);
	
	wp_add_inline_style('children-charity-gutenberg-editor-style', $gutenberg_module_styles);
}

add_action('enqueue_block_editor_assets', 'children_charity_gutenberg_editor_styles');


/* Enqueue Frontend Styles */
function children_charity_gutenberg_frontend_styles() {
	wp_enqueue_style('children-charity-gutenberg-frontend-style', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/frontend-style.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('children-charity-gutenberg-frontend-rtl', get_template_directory_uri() . '/gutenberg/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/module-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'children_charity_gutenberg_frontend_styles');

