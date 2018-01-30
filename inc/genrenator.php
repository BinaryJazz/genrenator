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
		'%genre%',
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
	$count  = count( $pieces );
	$i      = 0;
	foreach ( $pieces as $piece ) {

		switch ( $piece ) {
			case '%prefix%':
				$shards[ $i ] = replace_placeholders( 'prefix' );
				break;
			case '%adjective%':
				$shards[ $i ] = replace_placeholders( 'adjective' ) . ' ';
				break;
			case '%region%':
				$shards[ $i ] = replace_placeholders( 'region' ) . ' ';
				break;
			case '%suffix%':
				$shards[ $i ] = replace_placeholders( 'suffix' );
				break;
			case '%beat%':
				$shards[ $i ] = replace_placeholders( 'beat' );
				break;
			case '%instrument%':
				$shards[ $i ] = replace_placeholders( 'instrument' );
				break;
			default:
				$fragment = str_replace( '%', '', $piece );
				$class_name = '\BinaryJazz\Genrenator\Fragments\\' . $fragment;
				$vector    = new $class_name();

				$shards[ $i ] = str_replace( $fragment, $vector->texturize(), $fragment );
				break;
		}

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

function replace_placeholders( $fragment ) {
	return str_replace( "$fragment", call_user_func( __NAMESPACE__ . "\\Fragments\\get_$fragment" ), $fragment );
}

function get_genre() {
	return generate_genre();
}

function get_genre_story() {
	$story_ideas = Storynator\story_ideas( get_genre() );
	$index       = array_rand( $story_ideas );

	return $story_ideas[ $index ];
}
