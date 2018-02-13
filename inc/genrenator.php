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
		'%genre%#%genre%',
		'%region%#%instrument%',
		'%region%#%instrument%#%suffix%',
		'%adjective%#%instrument%#%suffix%',
		'%adjective%#%instrument%',
	];
}

function generate_genre() {
	$patterns = patterns();
	$index    = array_rand( $patterns );

	return concat_fragments( $patterns[ $index ] );
}

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
	return filter_string( $shards, $string );
}

function get_genre() {
	return generate_genre();
}

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

	// Let's not have any accidental rapism.
	if ( strpos( $string, 'rapism' ) ) {
		$string = str_replace( 'rapism', 'rap', $string );
	}

	return $string;
}
