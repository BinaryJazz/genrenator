<?php
/**
 * Genrenator
 *
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator;

use BinaryJazz\Genrenator\Storynator;

/**
 * Bootstrap the plugin.
 *
 * Registers actions and filter required to run the plugin.
 */
function bootstrap() {
	// Shortcodes.
	add_shortcode( 'genrenator-genre', __NAMESPACE__ . '\\shortcode_genre' );
	add_shortcode( 'genrenator-story', __NAMESPACE__ . '\\shortcode_story' );

	// API.
	add_action( 'rest_api_init', __NAMESPACE__ . '\\API\\register_routes' );
}

function shortcode_genre() {
	return generate_genre();
}

function shortcode_story() {
	return Storynator\generate_story();
}

function get_thing( $things ) {
	$index = array_rand( $things );
	return $things[ $index ];
}
