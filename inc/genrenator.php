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
		'%prefix%#%genre%#%suffix%',
		'%adjective%#%genre%',
		'%adjective%#%region%#%genre%',
		'%prefix%#%genre%',
		'%region%#%prefix%#%genre%#%suffix%',
		'%region%#%genre%#%suffix%',
		'%genre%#%suffix%',
		'%prefix%#%genre%#/#%genre%#%suffix%',
		'%region%#%genre%',
		'%beat%# of #%genre%',
		'%instrument%# #%beat%',
	];
}

function generate_genre() {
	$patterns = patterns();
	$index = array_rand( $patterns );
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
			case '%genre%':
				$shards[ $i ] = replace_placeholders( 'genre' ) . ' ';
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
				break;
		}

		$i++;
	}
	return str_replace( [ '- ', ' -' ], '-', implode( '', $shards ) );
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
