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
		'%adjective%# #%genre%',
		'%adjective%# #%region%# #%genre%',
		'%prefix%#%genre%',
		'%region%# #%prefix%# #%genre%#%suffix%',
		'%region%# #%genre%#%suffix%',
		'%genre%#%suffix%',
		'%prefix%#%genre%#/#%genre%#%suffix%',
		'%region%# #%genre%',
		'the #%beat%# of #%genre%',
		'%instrument%# #%beat%',
		'%adjective%# #%adjective%# #%genre%',
		'%prefix%#%suffix%',
		'%adjective%# #%prefix%#%suffix%',
		'%adjective%# #%prefix%#%genre%',
		'%adjective%# #%region%# #%genre%',
		'%instrument%# #%genre%',
		'%region%#%suffix%',
		'%genre%# #%instrument%',
		'%adjective%# #%suffix%# #%post%',
		'%genre%# #%genre%',
		'%region%# #%instrument%',
		'%region%# #%instrument%#%suffix%',
		'%adjective%# #%instrument%#%suffix%',
		'%adjective%# #%instrument%',
		'%prefix%#%genre%# #%post%',
		'%region%# #%prefix%# #%genre%# #%post%',
		'%region%# #%genre%# #%post%',
		'%genre%# #%post%',
		'%prefix%#%genre%#/#%genre%# #%post%',
		'%prefix%#%post%',
		'%adjective%# #%prefix%#%post%',
		'%region%# #%post%',
		'%region%# #%instrument%# #%post%',
		'%adjective%# #%instrument%# #%post%',
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

	/**
	 * Fires the action to update the genre count when a genre is created.
	 *
	 * @param int $count The current total of genres.
	 */
	do_action( 'genrenator_increment_genre_count', get_option( 'generate_genre', 0 ) );

	return concat_fragments( $patterns[ $index ] );
}

/**
 * Increment the running total of genres.
 *
 * @since  1.2
 * @param  int $count The genre count.
 */
function increment_genre_count( $count ) {
	update_option( 'generate_genre', $count + 1, false );
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
		$shards[ $i ] = trim( $shard );
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
