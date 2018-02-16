<?php
/**
 * Genrenator.
 *
 * Assembles the fragments into genres.
 *
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator;

use BinaryJazz\Genrenator\Fragments;
use BinaryJazz\Genrenator\Storynator;

/**
 * An array of genre patterns for building new genres.
 *
 * @since  0.1
 * @return array Array of patterns.
 */
function patterns() {
	return [
		'%beat%# #%genre%',
		'%prefix%#%genre%#%suffix%',
		'%adjective%#%genre%',
		'%adjective%#%region%#%genre%',
		'%prefix%#%genre%',
		'%region%#%prefix%#%genre%#%suffix%',
		'%region%#%genre%#%suffix%',
		'%genre%#%suffix%',
		'%prefix%#%genre%#/#%genre%#%suffix%',
		'%region%#%genre%',
		'the #%beat%# of #%genre%',
		'%instrument%# #%beat%',
		'%adjective%#%adjective%#%genre%',
		'%prefix%#%suffix%',
		'%adjective%#%prefix%#%suffix%',
		'%prefix%#%prefix%#%genre%',
		'%adjective%#%region%#%genre%',
		'%instrument%#%genre%',
		'%region%#%suffix%',
		'%genre%# #%instrument%',
		'%adjective%#%suffix%#%suffix%',
		'%genre%# #%genre%',
		'%region%#%instrument%',
		'%region%#%instrument%#%suffix%',
		'%adjective%#%instrument%#%suffix%',
		'%adjective%#%instrument%',
	];
}

/**
 * Builds a random genre.
 *
 * @since  0.1
 * @return string A single randomized genre string.
 */
function generate_genre() {
	$patterns = patterns();
	$index    = array_rand( $patterns );

	return concat_fragments( $patterns[ $index ] );
}

/**
 * Get and combine the pieces (fragments) of a genre pattern based on the components of the pattern.
 *
 * @since  0.1
 * @see    patterns()
 * @param  string $pattern A single pattern.
 * @return string          A single, randomized genre based on the pattern that was passed.
 */
function concat_fragments( $pattern ) {
	$pieces = explode( '#', $pattern );
	$shards = [];
	$i      = 0;
	foreach ( $pieces as $piece ) {

		$fragment = str_replace( '%', '', $piece );
		if ( in_array( $fragment, FRAGMENT_PIECES ) ) {
			$class_name = __NAMESPACE__ . "\\Fragments\\$fragment";
			$vector     = new $class_name();

			$shards[ $i ] = str_replace( $fragment, $vector->texturize(), $fragment );
		} else {
			$shards[ $i ] = $piece;
		}

		$i++;
	}

	// No spaces before no-space suffixes or prefixes and other fixes.
	return filter_string( $shards );
}

/**
 * Return a single genre.
 *
 * @since  0.1
 * @return string A random genre.
 */
function get_genre() {
	return filter_extra_spaces( generate_genre() );
}

/**
 * Gets a random _pattern_ for a genre story.
 *
 * This does not get the actual story.
 *
 * @see           Storynator\generate_story
 * @return string Story pattern from which to generate a story.
 */
function get_genre_story() {
	$story_ideas = Storynator\story_ideas( get_genre() );
	$index       = array_rand( $story_ideas );

	return $story_ideas[ $index ];
}

/**
 * Remove spaces from things that shouldn't have spaces.
 *
 * @since  0.2
 * @param  array $shards An array of fragment shards.
 * @todo                 Maybe rewrite this as an actual filter.
 * @return string        Filtered string.
 */
function filter_string( $shards ) {
	$string = str_replace( [ '- ', ' -' ], '-', implode( '', $shards ) );

	$i = 0;
	foreach ( $shards as $shard ) {
		if ( in_array( $shard, Fragments\suffix::no_space_suffixes() ) || in_array( $shard, Fragments\prefix::no_space_prefixes() ) ) {
			$shards[ $i ] = trim( $shard );
		}
		$i++;
	}

	// Filter spaces before/after slashes.
	if ( in_array( '/', $shards ) ) {
		$string = str_replace( [ ' /', '/ ' ], '/', $string );
	}

	// Let's not have any accidental rapism or rapia.
	if ( strpos( $string, 'rapism' ) || strpos( $string, 'rapia' ) ) {
		$string = str_replace( [ 'rapism', 'rapia' ], 'rap', $string );
	}

	return filter_extra_spaces( $string );
}
