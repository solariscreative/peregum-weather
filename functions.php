<?php 
defined( 'ABSPATH' ) or die( 'Unauthorized Access' );

// Theme configs
function solaris_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'solaris_setup', 0 );

function getInfo($token, $id) {
    $options = ['headers' => ['access_token' => $token]];
    $request = wp_remote_get('<API_URL>'.$id, $options);
    $result = json_decode($request['body']);
    $results = $result->currentWeatherList;
    return $results;
}
$results1 = getInfo('<access_token>', '<deviceId>');
$results2 = getInfo('<acess_token>', '<deviceId>');