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

/**
 * Callback for genre shortcode.
 *
 * @since  0.1
 * @return string A single genre.
 */
function shortcode_genre() {
	return generate_genre();
}

/**
 * Callback for genre-story shortcode.
 *
 * @since  0.1
 * @return string A single genre story.
 */
function shortcode_story() {
	return Storynator\generate_story();
}

/**
 * Check if a query param (either ?story= or ?genre= respectively) exists. Return the relevant context or all.
 *
 * @param  string $context The relevant context (either genre or story).
 * @return mixed           An array that includes story and genre if no context is passed. If a context is passed, return that content as a string.
 */
function get_sanitized_query_param( $context = '' ) {
	if ( ! isset( $_GET['story'] ) && ! isset( $_GET['genre'] ) ) {
		return false;
	}

	$query = [
		'story' => isset( $_GET['story'] ) ? sanitize_text_field( wp_unslash( $_GET['story'] ) ) : false,
		'genre' => isset( $_GET['genre'] ) ? sanitize_text_field( wp_unslash( $_GET['genre'] ) ) : false,
	];

	// If no context was passed or the context is neither a story nor a genre return everything.
	if ( '' === $context || ! in_array( $context, [ 'genre', 'story' ] ) ) {
		return $query;
	}

	return $query[ $context ];
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

/**
 * Removes extra spaces from a string.
 *
 * @since  0.3
 * @param  string $string The string to filter.
 * @return string         The string without extra spaces.
 */
function filter_extra_spaces( $string ) {
	// Replace double spaces with a single space, if there are any.
	if ( strpos( $string, '  ' ) ) {
		$string = str_replace( '  ', ' ', $string );
	}

	// Also trim off any extra spaces at the beginning/end of the string.
	return trim( $string );
}
