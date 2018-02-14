<?php
/**
 * Genrenator REST API
 *
 * Adds public API endpoints for the Genrenator.
 *
 * @author  Chris Reynolds <me@chrisreynolds.io> Blame me for everything.
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator\API;

use BinaryJazz\Genrenator;
use BinaryJazz\Genrenator\Storynator as Storynator;

/**
 * Register the Genrenator REST API routes.
 *
 * @since 0.3
 */
function register_routes() {
	// Genre endpoints.
	register_rest_route( 'genrenator/v1', 'genre', [
		'methods'  => 'GET',
		'callback' => '\\BinaryJazz\\Genrenator\\get_genre',
	] );

	register_rest_route( 'genrenator/v1', 'genre/(?P<count>\d+)', [
		'methods'  => 'GET',
		'callback' => __NAMESPACE__ . '\\get_genre_api',
		'args'     => [
			'count' => [
				'validate_callback' => function( $param, $request, $key ) {
					return is_numeric( $param );
				},
			],
		],
	] );

	// Story endpoints.
	register_rest_route( 'genrenator/v1', 'story', [
		'methods'  => 'GET',
		'callback' => '\\BinaryJazz\\Genrenator\\Storynator\\generate_story',
	] );

	register_rest_route( 'genrenator/v1', 'story/(?P<count>\d+)', [
		'methods'  => 'GET',
		'callback' => __NAMESPACE__ . '\\get_genre_story_api',
		'args'     => [
			'count' => [
				'validate_callback' => function( $param, $request, $key ) {
					return is_numeric( $param );
				},
			],
		],
	] );
}

/**
 * Returns multiple genres when a number is passed to the endpoint.
 *
 * @since  0.3
 * @param  array $data Array of query arguments.
 * @return array       Array of data to pass to the REST endpoint.
 */
function get_genre_api( $data ) {
	$count = absint( $data['count'] );

	if ( 1 === $count || ! $count ) {
		return Genrenator\get_genre();
	}

	$genres = [];

	for ( $i = 0; $i < $count; $i++ ) {
		$genres[ $i ] = filter_extra_spaces( Genrenator\get_genre() );
	}

	return $genres;
}

function get_genre_story_api( $data ) {
	$count = absint( $data['count'] );

	if ( 1 === $count || ! $count ) {
		return Storynator\generate_story();
	}

	$stories = [];

	for ( $i = 0; $i < $count; $i++ ) {
		$stories[ $i ] = filter_extra_spaces( Storynator\generate_story() );
	}

	return $stories;
}

/**
 * Removes extra spaces from a string.
 *
 * @since  0.3
 * @todo                  I feel like we're doing this a couple different places so maybe make one generic function for this.
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
