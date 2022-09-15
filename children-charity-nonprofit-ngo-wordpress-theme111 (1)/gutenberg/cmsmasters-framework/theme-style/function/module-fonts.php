<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.1.1
 * 
 * Gutenberg Module Fonts Rules
 * Created by CMSMasters
 * 
 */


function children_charity_gutenberg_module_fonts($custom_css = '', $is_editor = false) {
	$cmsmasters_option = children_charity_get_global_options();
	
	$editor = ($is_editor ? '.editor-styles-wrapper' : '');
	
	$custom_css .= "
/***************** Start Gutenberg Module Custom Font Styles ******************/

	/* Start Content Font */
	{$editor} .wp-block-table thead th,
	{$editor} .wp-block-table thead td,
	{$editor} .wp-block-freeform.mce-content-body > table thead th,
	{$editor} .wp-block-freeform.mce-content-body > table thead td,
	body table thead th,
	body table thead td {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_content_font_google_font']) . $cmsmasters_option['children-charity' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_content_font_font_style'] . ";
	}
	/* Finish Content Font */

/***************** Finish Gutenberg Module Custom Font Styles ******************/





/***************** Start Gutenberg Module General Font Styles ******************/

	/* Start Content Font */
	body .editor-styles-wrapper,
	body .editor-styles-wrapper p,
	{$editor} p.has-drop-cap:not(:focus)::first-letter,
	{$editor} .wp-block-image figcaption,
	{$editor} .wp-block-gallery .blocks-gallery-image figcaption,
	{$editor} .wp-block-gallery .blocks-gallery-item figcaption,
	{$editor} .wp-block-gallery .gallery-item .gallery-caption,
	{$editor} .wp-block-audio figcaption,
	{$editor} .wp-block-video figcaption,
	{$editor} .wp-caption dd,
	{$editor} div.wp-block ul,
	{$editor} div.wp-block ul > li,
	{$editor} div.wp-block ol,
	{$editor} div.wp-block ol > li,
	{$editor} .wp-block-latest-comments.has-avatars .wp-block-latest-comments__comment-meta, 
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-meta,
	{$editor} .wp-block-latest-comments.has-avatars .wp-block-latest-comments__comment-excerpt p, 
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-excerpt p,
	{$editor} .wp-block-freeform,
	{$editor} .wp-block-freeform p {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_content_font_google_font']) . $cmsmasters_option['children-charity' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_content_font_font_style'] . ";
	}
	
	{$editor} p.has-drop-cap:not(:focus)::first-letter {
		font-size:3em;
		line-height:1.2em;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	.editor-styles-wrapper a,
	.editor-styles-wrapper .wp-block-file .wp-block-file__textlink .editor-rich-text__tinymce {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_link_font_google_font']) . $cmsmasters_option['children-charity' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	body .editor-styles-wrapper h1,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h1,
	.editor-post-title__block .editor-post-title__input {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	body .editor-styles-wrapper h2,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h2,
	{$editor} h2.editor-rich-text__tinymce,
	{$editor} .wp-block-cover h2, 
	{$editor} .wp-block-cover .wp-block-cover-image-text, 
	{$editor} .wp-block-cover-image h2, 
	{$editor} .wp-block-cover-image .wp-block-cover-image-text {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h2_font_google_font']) . $cmsmasters_option['children-charity' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	body .editor-styles-wrapper h3,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h3 {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h3_font_google_font']) . $cmsmasters_option['children-charity' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	body .editor-styles-wrapper h4,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h4 {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h4_font_google_font']) . $cmsmasters_option['children-charity' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	body .editor-styles-wrapper h5,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h5 {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h5_font_google_font']) . $cmsmasters_option['children-charity' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	body .editor-styles-wrapper h6,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce h6 {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h6_font_google_font']) . $cmsmasters_option['children-charity' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	{$editor} .wp-block-button .wp-block-button__link,
	{$editor} .wp-block-file .wp-block-file__button {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_button_font_google_font']) . $cmsmasters_option['children-charity' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	{$editor} small,
	{$editor} .wp-block-latest-posts .wp-block-latest-posts__post-date,
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-date {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_small_font_google_font']) . $cmsmasters_option['children-charity' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */
	
	
	/* Start Text Fields Font */
	.editor-styles-wrapper select,
	.editor-styles-wrapper option,
	{$editor} .wp-block-search .wp-block-search__input {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_input_font_google_font']) . $cmsmasters_option['children-charity' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_input_font_font_style'] . ";
	}
	
	.editor-styles-wrapper select {
		line-height:1em;
	}
	/* Finish Text Fields Font */
	
	
	/* Start Blockquote Font */
	{$editor} .wp-block-quote,
	{$editor} .wp-block-quote.is-large,
	{$editor} .wp-block-quote.is-style-large,
	{$editor} .wp-block-pullquote,
	.editor-styles-wrapper .wp-block-freeform blockquote p,
	.editor-styles-wrapper .wp-block-freeform blockquote {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_quote_font_google_font']) . $cmsmasters_option['children-charity' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_quote_font_font_style'] . ";
	}
	
	{$editor} .wp-block-quote.is-large,
	{$editor} .wp-block-quote.is-style-large {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_quote_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_quote_font_line_height'] + 4) . "px;
	}
	
	{$editor} .wp-block-pullquote {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_quote_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_quote_font_line_height'] - 4) . "px;
	}
	
	.editor-styles-wrapper q {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_quote_font_google_font']) . $cmsmasters_option['children-charity' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['children-charity' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Gutenberg Module General Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('children_charity_theme_fonts_filter', 'children_charity_gutenberg_module_fonts');

