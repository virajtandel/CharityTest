<?php 
/**
 * @cmsmasters_package 	Children Charity
 * @cmsmasters_version 	1.0.8
 */


$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

?>

<div class="updated published time-details cmsmasters_events_start_date">
	<span class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'd'); ?></span>
	<span class="cmsmasters_event_month_week">
		<span class="cmsmasters_event_month"><?php echo tribe_get_end_date(null, false, 'F'); ?></span>
		<span class="cmsmasters_event_week"><?php echo tribe_get_end_date(null, false, 'l'); ?></span>
	</span>
</div>

<div class="cmsmasters_events_list_event_info">
	<!-- Event Title -->
	<?php do_action( 'tribe_events_before_the_event_title' ) ?>
	<h2 class="tribe-events-list-event-title entry-title summary">
		<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			<?php the_title() ?>
		</a>
	</h2>
	<?php do_action( 'tribe_events_after_the_event_title' ) ?>
	
	<!-- Event Meta -->
	<?php do_action( 'tribe_events_before_the_meta' ) ?>
	<div class="tribe-events-event-meta vcard">
		<div class="author <?php echo esc_attr( $has_venue_address ); ?>">
			
			<!-- Schedule & Recurrence Details -->
			<div class="updated published time-details cmsmasters_events_start_end_date">
				<span class="cmsmasters_event_start"><?php echo tribe_get_start_date(null, false, 'd F Y, H:i'); ?></span>
				<span class="cmsmasters_event_end"> - <?php echo tribe_get_end_date(null, false, 'd F Y, H:i'); ?></span>
			</div>

			<?php if ( $venue_details && isset($venue_details['linked_name']) ) : ?>
				<!-- Venue Display Info -->
				<div class="tribe-events-venue-details">
					<?php echo implode( ', ', $venue_details ); ?>
				</div> <!-- .tribe-events-venue-details -->
			<?php endif; ?>
			
		</div>
	</div><!-- .tribe-events-event-meta -->
	<?php do_action( 'tribe_events_after_the_meta' ) ?>
</div>

<div class="tribe-events-read-more-wrap">
	<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more button" rel="bookmark"><?php esc_html_e( 'Learn more', 'children-charity' ) ?></a>
</div>
