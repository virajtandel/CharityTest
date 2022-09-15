<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.1.1
 * 
 * Website Header Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = children_charity_get_global_options();


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="cmsmasters_html">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('cmsmasters_before_body', $cmsmasters_option); ?>

<?php children_charity_get_header_search_form($cmsmasters_option); ?>

<!-- _________________________ Start Page _________________________ -->
<div id="page" class="<?php children_charity_get_page_classes($cmsmasters_option); ?>hfeed site">
<?php do_action('cmsmasters_before_page', $cmsmasters_option); ?>

<!-- _________________________ Start Main _________________________ -->
<div id="main">
	
<!-- _________________________ Start Header _________________________ -->
<header id="header">
	<?php 
	do_action('cmsmasters_before_header', $cmsmasters_option);
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-top');
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-mid');
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-bot');
	
	do_action('cmsmasters_after_header', $cmsmasters_option);
	?>
</header>
<!-- _________________________ Finish Header _________________________ -->

	
<!-- _________________________ Start Middle _________________________ -->
<div id="middle">
<?php 

children_charity_page_heading();


list($cmsmasters_layout, $cmsmasters_page_scheme) = children_charity_theme_page_layout_scheme();


echo '<div class="middle_inner' . (($cmsmasters_page_scheme != 'default') ? ' cmsmasters_color_scheme_' . $cmsmasters_page_scheme : '') . '">' . "\n" . 
	'<div class="content_wrap ' . $cmsmasters_layout . '">' . "\n\n";


