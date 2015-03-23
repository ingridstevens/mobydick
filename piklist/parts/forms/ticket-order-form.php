<?php
/*
Title: Ticket Order Form
Method: post
Message: Data saved as a post of type ticket.
Redirect: /contribute/
*/

/**
 * The shortcode for this form is:
 * [piklist_form form="ticket-order" add_on="theme"]
 */

/**
 *	The fields in this metabox map to the fields in {theme}/piklist/parts/meta-boxes/ticket-info.php
 *	Make sure they are kept in sync!
 */

// pick up information fields
//$event_settings = get_option( 'mcw_event_settings' );
//extract( $event_settings );

// Set where to save this form
piklist('field', array(
	'type' => 'hidden'
	,'scope' => 'post'
	,'field' => 'post_type'
	,'value' => 'member'
));

piklist('field', array(
	'type' => 'hidden'
	,'scope' => 'post'
	,'field' => 'post_status'
	,'value' => 'draft'
));

piklist('field', array(
	'type' => 'text'
	,'scope' => 'post' // post_title is in the wp_posts table
	,'field' => 'post_title'
	,'label' => 'Name'
	,'columns' => 10
	,'required' => true
));

piklist('field', array(
	'type' => 'text'
	,'scope' => 'post_meta'
	,'field' => 'phone'
	,'label' => 'Phone'
	,'columns' => 10
	,'required' => true
));

piklist('field', array(
	'type' => 'text'
	,'field' => 'email'
	,'scope' => 'post_meta'
	,'label' => 'Email address'
	,'columns' => 10
	,'validate' => array(
		array(
			'type' => 'email'
		)
	)
	,'required' => true
));
?>
<?php
//echo wpautop( $purchase_instructions );
//date_default_timezone_set( 'America/Los_Angeles' );

// season tickets field
// piklist('field', array(
// 	'type' => 'text'
// 	,'field' => 'tickets_season'
// 	,'scope' => 'post_meta'
// 	,'value' => 0
// 	,'template' => 'mcw_quantity'
// 	,'label' => 'Season Tickets: all 3 concerts $'.$price_season_ticket
// 	,'attributes' => array(
// 	)
// 	,'required' => false
// ));

// collect event information
// $args = array(
// 	'posts_per_page' => 12,
// 	'orderby' => 'meta_value',
// 	'order' => 'ASC',
// 	'meta_key' => 'event_start_sortable',
// 	'post_type' => 'event',
// 	'event_cat' => 'steinway',
// );
// $concerts = get_posts( $args );

// $concert_order = 0;
// foreach ( $concerts as $concert ) {
// 	$postmeta = mcw_get_simple_post_custom( $concert->ID, true );
// 	extract( $postmeta );
// 	$title = mcw_get_anchor( get_the_permalink( $concert->ID ), $concert->post_title );
// 	$concert_time = strtotime( $event_start_date .' '. $event_start_time );
// 	$nice_date = date( 'l, F j, Y \a\t g:i A', $concert_time );
//
// 	// establish cut-off points
// 	$now = time();
// 	$sales_cut_off = $now > strtotime( '- 2 hours', $concert_time );
// 	$event_past = $now > strtotime( '+ 30 minutes', $concert_time );
//
// 	$concert_order++;
// 	if ( !$sales_cut_off ) {
// 		piklist('field', array(
// 			'type' => 'text'
// 			,'field' => "tickets_c$concert_order"
// 			,'scope' => 'post_meta'
// 			,'value' => 0
// 			,'template' => 'mcw_quantity'
// 			,'label' => "$title: $nice_date - \$$price_advance_ticket"
// 			,'attributes' => array(
// 				'type' => 'number'
// 			)
// 			,'required' => false
// 		));
// 	} else {
// 		$last_minute_message = $event_past ? '' : " Tickets are still available at the door.";
// 		$event_status_class = $event_past ? ' prior-event sales-cutoff' : ' sales-cutoff';
?>
<?php
//	} // else past ticket sales cut-off
//} // foreach concert
?>

<h2>Mailing Address</h2>
<?php
//echo wpautop( $address_instructions );

piklist('field', array(
	'type' => 'text'
	,'scope' => 'post_meta'
	,'field' => 'address_one'
	,'label' => ''
	,'columns' => 10
	,'attributes' => array(
		'placeholder' => 'address line 1 *'
	)
	,'required' => true
));

piklist('field', array(
	'type' => 'text'
	,'scope' => 'post_meta'
	,'field' => 'address_two'
	,'label' => ''
	,'columns' => 10
	,'attributes' => array(
		'placeholder' => 'address line 2'
	)
	,'required' => false
));

piklist('field', array(
	'type' => 'text'
	,'scope' => 'post_meta'
	,'field' => 'city_state'
	,'label' => ''
	,'columns' => 10
	,'attributes' => array(
		'placeholder' => 'city, state, zip *'
	)
	,'required' => true
));

// these two fields will be filled in later
piklist('field', array(
	'type' => 'hidden'
	,'field' => 'total_due'
	,'scope' => 'post_meta'
	,'value' => 0
	,'required' => false
));
piklist('field', array(
	'type' => 'hidden'
	,'field' => 'total_paid'
	,'scope' => 'post_meta'
	,'value' => 0
	,'required' => false
));

piklist('field', array(
	'type' => 'hidden'
	,'field' => 'ID'
	,'scope' => 'post'
	,'required' => false
));


// Submit button
piklist('field', array(
	'type' => 'submit'
	,'field' => 'submit'
	,'value' => 'Review Order'
	,'attributes' => array(
		'class' => 'btn btn-cbc'
	)
));
