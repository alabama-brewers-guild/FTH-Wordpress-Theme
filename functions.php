<?php 

function fth_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'fth_theme_enqueue_styles' );

// Add Adsene to wp_head()
function add_adsense_head() {
	echo '<script data-ad-client="ca-pub-4181055555594581" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
}
add_action( 'wp_head', 'add_adsense_head' );

add_filter('evoapi_event_data', 'evoapi_add_moredata', 10, 3);
function evoapi_add_moredata($event_data, $event_id, $event_pmv){
	if(!empty($event_pmv['evcal_srow'])){
		$event_data['start_timestamp_seconds'] = intval($event_pmv['evcal_srow'][0]);
	}
	if(!empty($event_pmv['evcal_erow'])){
		$event_data['end_timestamp_seconds'] = intval($event_pmv['evcal_erow'][0]);
	}
	if(!empty($event_pmv['evo_hide_endtime'])){
		$event_data['hide_endtime'] = $event_pmv['evo_hide_endtime'][0];
	}
	$location_tax = 'event_location';
	$event_terms = wp_get_post_terms($event_id, $location_tax);
	if( $event_terms && !is_wp_error($event_terms)) {
		$term_id = $event_terms[0]->term_id;
		$event_data['location_city'] = get_option('evo_tax_meta')[$location_tax][$term_id]['location_city'];
		$event_data['location_state'] = get_option('evo_tax_meta')[$location_tax][$term_id]['location_state'];
	}

	return $event_data;
}