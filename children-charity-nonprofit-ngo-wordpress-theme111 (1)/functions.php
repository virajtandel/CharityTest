<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function children_charity_enqueue_styles() {
    wp_enqueue_style('children-charity-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'children_charity_enqueue_styles', 11);
?>