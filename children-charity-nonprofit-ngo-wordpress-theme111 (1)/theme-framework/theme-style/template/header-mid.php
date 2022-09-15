<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.6
 * 
 * Header Middle Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = children_charity_get_global_options();


echo '<div class="header_mid" data-height="' . esc_attr($cmsmasters_option['children-charity' . '_header_mid_height']) . '">' . 
	'<div class="header_mid_outer">' . 
		'<div class="header_mid_inner">';
			do_action('cmsmasters_before_header_mid', $cmsmasters_option);
			
			do_action('cmsmasters_before_logo', $cmsmasters_option);
			echo '<div class="logo_wrap">';
				
				children_charity_logo_custom();
				
			echo '</div>';
			do_action('cmsmasters_after_logo', $cmsmasters_option);
			
			
			if ($cmsmasters_option['children-charity' . '_header_styles'] == 'default') {
				echo '<div class="resp_mid_nav_wrap">' . 
					'<div class="resp_mid_nav_outer">' . 
						'<a class="responsive_nav resp_mid_nav" href="' . esc_js("javascript:void(0)") . '">' . 
							'<span></span>' . 
						'</a>' . 
					'</div>' . 
				'</div>';
			}
			
			
			if ($cmsmasters_option['children-charity' . '_header_styles'] == 'c_nav') { 
				echo '<div class="slogan_social_wrap">';
				
					if (
						$cmsmasters_option['children-charity' . '_header_add_cont'] == 'cust_html' && 
						$cmsmasters_option['children-charity' . '_header_add_cont_cust_html'] !== ''
					) {
						echo '<div class="slogan_wrap">' . 
							'<div class="slogan_wrap_inner">' . 
								'<div class="slogan_wrap_text">' . 
									stripslashes($cmsmasters_option['children-charity' . '_header_add_cont_cust_html']) . 
								'</div>' . 
							'</div>' . 
						'</div>';
					} elseif (
						$cmsmasters_option['children-charity' . '_header_add_cont'] == 'social' && 
						isset($cmsmasters_option['children-charity' . '_social_icons'])
					) {
						children_charity_social_icons();
					}
					
				echo '</div>';
			}
			
			if ($cmsmasters_option['children-charity' . '_header_styles'] == 'c_nav') {
				echo '<div class="search_shop_wrap">';
			}
			
				if ($cmsmasters_option['children-charity' . '_header_search']) {
					echo '<div class="mid_search_but_wrap">' . 
						'<a href="' . esc_js("javascript:void(0)") . '" class="mid_search_but cmsmasters_header_search_but cmsmasters_theme_icon_search"></a>' . 
					'</div>';
				}
				
				
				if (CMSMASTERS_WOOCOMMERCE) {
					echo '<div class="cmsmasters_dynamic_cart_wrap">';
						
						children_charity_woocommerce_cart_dropdown(); 
						
					echo '</div>';
				}
				
			if ($cmsmasters_option['children-charity' . '_header_styles'] == 'c_nav') {
				echo '</div>';
			}
			
			if (
				$cmsmasters_option['children-charity' . '_header_styles'] != 'default' && 
				$cmsmasters_option['children-charity' . '_header_styles'] != 'c_nav'
			) { 
				if (
					$cmsmasters_option['children-charity' . '_header_add_cont'] == 'cust_html' && 
					$cmsmasters_option['children-charity' . '_header_add_cont_cust_html'] !== ''
				) {
					echo '<div class="slogan_wrap">' . 
						'<div class="slogan_wrap_inner">' . 
							'<div class="slogan_wrap_text">' . 
								stripslashes($cmsmasters_option['children-charity' . '_header_add_cont_cust_html']) . 
							'</div>' . 
						'</div>' . 
					'</div>';
				} elseif (
					$cmsmasters_option['children-charity' . '_header_add_cont'] == 'social' && 
					isset($cmsmasters_option['children-charity' . '_social_icons'])
				) {
					children_charity_social_icons();
				}
			}
			
			
			if ($cmsmasters_option['children-charity' . '_header_styles'] == 'default') {
				echo '<!-- _________________________ Start Navigation _________________________ -->' . 
				'<div class="mid_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'mid_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		false 
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!-- _________________________ Finish Navigation _________________________ -->';
			}
			
			
			do_action('cmsmasters_after_header_mid', $cmsmasters_option);
		echo '</div>' . 
	'</div>' . 
'</div>';

