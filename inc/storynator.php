<?php
/**
 * Storynator.
 *
 * Adds a story to the genres.
 *
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator\Storynator;

use BinaryJazz\Genrenator;

function story_ideas() {
	return [
		// Prompts.
		__( 'That was the year I first listened to %s.', 'genrenator' ),
		__( 'What was that? I can\'t hear you over the %s.', 'genrenator' ),
		__( 'You probably haven\'t heard of %s.', 'genrenator' ),
		__( '%s is where it\'s at.', 'genrenator' ),
		// Decades.
		__( 'My twenties were all about listening to %s.', 'genrenator' ),
		__( 'You\'re never too old to listen to %s.', 'genrenator' ),
		__( 'I\'ll never forget the time we listened to %s.', 'genrenator' ),
		__( 'That was the road trip we listened to way too much %s.', 'genrenator' ),
		// Questions.
		__( 'Have you heard of %s?', 'genrenator' ),
		__( 'You haven\'t heard of %s?', 'genrenator' ),
		__( 'Is it really living if you\'ve never seen %s live?', 'genrenator' ),
		// Preferances.
		__( 'I\'m really into %s right now.', 'genrenator' ),
		__( 'I only listen to %s.', 'genrenator' ),
		__( 'Nothing calms me down more than %s.', 'genrenator' ),
	];
}

function generate_story() {
	$story = Genrenator\get_thing( story_ideas() );
	$genre = Genrenator\generate_genre();
	return Genrenator\filter_extra_spaces( ucfirst( filter_punctuation( sprintf( $story, $genre ) ) ) );
}

function filter_punctuation( $string ) {
	// Filter out spaces before periods.
	$string = str_replace( ' .', '.', $string );

	// Filter out spaces before question marks.
	$string = str_replace( ' ?', '?', $string );

	return $string;
}
