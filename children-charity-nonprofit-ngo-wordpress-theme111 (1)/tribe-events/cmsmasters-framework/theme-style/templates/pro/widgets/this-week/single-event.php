<?php
/**
 * @cmsmasters_package 	Children Charity
 * @cmsmasters_version 	1.0.0
 */

?>
<div id="tribe-events-event-<?php echo esc_attr( $event->ID ); ?>" class="<?php tribe_events_event_classes( $event->ID ) ?> tribe-this-week-event" >
	
	<div class="cmsmasters_event_date"><?php echo tribe_get_start_date(null, false, 'F d, Y'); ?></div>
	
	<h5 class="entry-title summary">
		<a href="<?php echo esc_url( tribe_get_event_link( $event->ID ) ); ?>" rel="bookmark"><?php echo esc_html( $event->post_title ); ?></a>
	</h5>

	<div class="duration cmsmasters_theme_icon_time">
	<?php echo tribe_events_event_schedule_details( $event->ID ) ?>

	</div>
	<div class="fn org tribe-venue cmsmasters_theme_icon_user_address">
		<?php echo tribe_get_venue_link( $event->ID ); ?>
	</div>

</div>