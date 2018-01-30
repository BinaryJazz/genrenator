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
			break;
		}
		$shards [ $i ] = $piece;

		$i ++;
	}

	$string = str_replace( [ '- ', ' -' ], '-', implode( '', $shards ) );

	// No space before 'ism'.
	if ( in_array( 'ism', $shards ) ) {
		$string = str_replace( ' ism', 'ism', $string );
	}

	// Also no space before 'timism'.
	if ( in_array( 'timism', $shards ) ) {
		$string = str_replace( ' timism', 'timism', $string );
	}

	// Also tronica.
	if ( in_array( 'tronica', $shards ) ) {
		$string = str_replace( ' tronica', 'tronica', $string );
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

function get_genre() {
	return generate_genre();
}

function get_genre_story() {
	$story_ideas = Storynator\story_ideas( get_genre() );
	$index       = array_rand( $story_ideas );

	return $story_ideas[ $index ];
}
