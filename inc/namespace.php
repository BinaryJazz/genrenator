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
	// Add all your plugin hooks here.
	add_shortcode( 'genrenator-genre', __NAMESPACE__ . '\\shortcode_genre' );
	add_shortcode( 'genrenator-story', __NAMESPACE__ . '\\shortcode_story' );
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
