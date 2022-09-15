<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.3
 * 
 * Post Default Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || (is_home() && CMSMASTERS_CONTENT_COMPOSER)) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;

$cmsmasters_post_date_color = get_post_meta(get_the_ID(), 'cmsmasters_post_color', true);

$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Post Default Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_cont">
		<?php
		if (class_exists('Cmsmasters_Content_Composer')) {
			$cmsmasters_post_style = "
				#post-" . get_the_ID() . " .cmsmasters_post_date_wrap,
				#post-" . get_the_ID() . " .cmsmasters_post_info {
					background-color:{$cmsmasters_post_date_color};
				}
			";
			
			echo cmsmasters_theme_generate_front_css($cmsmasters_post_style);
		}
		
		echo '<div class="cmsmasters_post_date_img_wrap entry-meta">';
			if ($cmsmasters_post_format == 'image') {
				$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
				
				children_charity_post_type_image(get_the_ID(), $cmsmasters_post_image_link);
			} elseif ($cmsmasters_post_format == 'gallery') {
				$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
				
				children_charity_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'post-thumbnail');
			} elseif ($cmsmasters_post_format == 'video') {
				$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
				$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
				$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
				
				children_charity_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links);
			} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
				children_charity_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
			}
			
			if ($cmsmasters_post_format == 'audio') {
				$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
				
				children_charity_post_type_audio($cmsmasters_post_audio_links);
			}
			
			if ($date) {
				echo '<div class="cmsmasters_post_info entry-meta">';
				
					$date ? children_charity_get_post_date('page', 'default') : '';
					
				echo '</div>';
			}
		echo '</div>';
		
		
		children_charity_post_heading(get_the_ID(), 'h2');
		
		
		if ($author || $categories) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
				if (is_sticky()) {
					echo '<span class="cmsmasters_sticky cmsmasters_theme_icon_sticky">' . esc_html__('Featured Post', 'children-charity') . '</span>';
				}
			
				$author ? children_charity_get_post_author('page') : '';
				
				$categories ? children_charity_get_post_category(get_the_ID(), 'category', 'page') : '';
				
			echo '</div>';
		}
		
		
		children_charity_post_exc_cont();
		
		
		if ($more || $likes || $comments) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				if ($more) {
					echo '<div class="cmsmasters_post_read_more_wrap">';
					
						$more ? children_charity_post_more(get_the_ID()) : '';
						
					echo '</div>';
				}
				
				
				if ($likes || $comments) {
					echo '<div class="cmsmasters_post_meta_info entry-meta">';
					
						$likes ? children_charity_get_post_likes('page') : '';
						
						$comments ? children_charity_get_post_comments('page') : '';
						
					echo '</div>';
				}
				
			echo '</footer>';
		}
		?>
	</div>
</article>
<!--_________________________ Finish Post Default Article _________________________ -->

