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
		$genres[ $i ] = Genrenator\get_genre();
	}

	return $genres;
}

/**
 * Returns multiple stories when a number is passed to the endpoint.
 *
 * @since  0.3
 * @param  array $data Array of query arguments.
 * @return array       Array of data to pass to the REST endpoint.
 */
function get_genre_story_api( $data ) {
	$count = absint( $data['count'] );

	if ( 1 === $count || ! $count ) {
		return Storynator\generate_story();
	}

	$stories = [];

	for ( $i = 0; $i < $count; $i++ ) {
		$stories[ $i ] = Storynator\generate_story();
	}

	return $stories;
}
