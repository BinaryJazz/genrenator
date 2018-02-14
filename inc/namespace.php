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

/**
 * In an array of "things", get a random "thing".
 *
 * @since  0.1
 * @param  array $things An array of things.
 * @return string        A single thing in that array.
 */
function get_thing( $things ) {
	$index = array_rand( $things );
	return $things[ $index ];
}
