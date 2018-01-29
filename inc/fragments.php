<?php
/**
 * Fragments
 *
 * Pieces of possible new genres.
 *
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator\Fragments;

use BinaryJazz\Genrenator;

/**
 * The list of genres.
 *
 * @return array A list of genres.
 */
function genres() {
	return [
		'pop',
		'dance',
		'rap',
		'alternative',
		'rock',
		'hip hop',
		'reggae',
		'metal',
		'R&B',
		'singer-songwriter',
		'punk',
		'country',
		'house',
		'trap',
		'EBM',
		'EDM',
		'latin',
		'grunge',
		'sludge',
		'contemporary',
		'folk',
		'turntablism',
		'goth',
		'standards',
		'soul',
		'blues',
		'jazz',
		'en español',
		'latino',
		'noise',
		'funk',
		'indie',
		'grime',
		'rockabilly',
		'swing',
		'tango',
		'trance',
		'ambient',
		'2-step',
		'garage',
		'left-field',
	];
}

function get_genre() {
	return Genrenator\get_thing( genres() );
}

/**
 * List of Adjectives.
 *
 * @return array Qualifiers for genres.
 */
function adjectives() {
	return [
		// A.
		'abstract',
		'acoustic',
		'adult',
		'album',
		'arena',
		// B.
		'baroque',
		'bass',
		'bebop',
		'big',
		'binary',
		'black',
		'blue eyed',
		'bop',
		'bubble',
		// C.
		'chamber',
		'christian',
		'classic',
		'contemporary',
		// D.
		'dad',
		'deep',
		'dirty',
		'doo wop',
		'dream',
		'drone',
		// E.
		'ethereal',
		'experimental',
		// F.
		'flutter',
		// G.
		'gangster',
		'garage',
		'glam',
		'gothic',
		'grim',
		// H.
		'happy',
		'hard',
		'hip',
		// I.
		'indie',
		'intelligent',
		// J.
		'jesus',
		// K.
		// L.
		// M.
		'mellow',
		'modern',
		// N.
		'nasty',
		'new',
		// O.
		'orchestral',
		// P.
		'permanent',
		'power',
		// Q.
		// R.
		'religious',
		'roots',
		// S.
		'shiver',
		'soft',
		'southern',
		'swirl',
		// T.
		'technical',
		'teen',
		'terror',
		'thrash',
		'traditional',
		'tribal',
		'tribute',
		'tropical',
		'turbo',
		'twee',
		// U.
		'underground',
		'urban',
		// V.
		'vintage',
		'viral',
		'vocal',
		// W.
		// X.
		// Y.
		// Z.
		'zolo',
	];
}

function get_adjective() {
	return Genrenator\get_thing( adjectives() );
}

/**
 * List of prefixes.
 *
 * @return array Genre prefixes.
 */
function prefixes() {
	return [
		'post-',
		'folk-',
		'fidget-',
		'turbo-',
		'cyber',
		'electro',
		'synth',
		'shoe',
		'hard',
		'neuro',
		'dub',
		'grind',
		'retro ',
		'cat ',
		'neo ',
		'dwn ',
		'nu ',
		'alt ',
		'acid ',
		'ambient ',
		__( 'stomp and ', 'genrenator' ), // Since this is a phrase, we'll make it translatable.
		__( 'drum and ', 'genrenator' ), // This is also a phrase.
		// Translators: %s is a random instrument.
		sprintf( __( '%s-driven ', 'genrenator' ), get_instrument() ),
		// Translators: %s is a random instrument.
		sprintf( __( '%s-heavy ', 'genrenator' ), get_instrument() ),
		// Translators: %s is a random instrument.
		sprintf( __( '%s-based ', 'genrenator' ), get_instrument() ),
		// Translators: %s is a random instrument.
		sprintf( __( '%s-centric ', 'genrenator' ), get_instrument() ),
	];
}

function get_prefix() {
	return Genrenator\get_thing( prefixes() );
}

/**
 * List of suffixes.
 *
 * @return array Genre suffixes.
 */
function suffixes() {
	return [
		'-step',
		'-grind',
		'-fox',
		'future',
		'tronica',
		'timism',
		'gaze',
		'ism',
		'bop',
		'core',
		' road',
		' music',
		' gold',
		' wave',
		' room',
		' dirt',
		' electronica',
		' ensembles',
		' fusion',
		' punk',
		' holler',
		__( ' in the dark', 'genrenator' ), // Since this is a phrase, we'll make it translatable.
		// Translators: %s is a random instrument.
		sprintf( __( ' with hints of %s', 'genrenator' ), get_instrument() ),
		// Translators: %s is a random instrument.
		sprintf( __( ' with prominent %s', 'genrenator' ), get_instrument() ),

	];
}

function get_suffix() {
	return Genrenator\get_thing( suffixes() );
}

/**
 * List of regions.
 *
 * @return array Places genres might come from.
 */
function regions() {
	return [
		'mexican ',
		'latin ',
		'k-',
		'j-',
		'canadian ',
		'uk ',
		'southern ',
		'euro',
		'kraut ',
		'viking ',
		'world ',
	];
}

function get_region() {
	return Genrenator\get_thing( regions() );
}

/**
 * List of instruments.
 *
 * @return array Various instruments.
 */
function instruments() {
	return [
		'banjo',
		'flute',
		'gong',
		'drum',
		'lute',
		'theremin',
		'triangle',
		'cowbell',
		'percussion',
		'trombone',
		'vocal',
		'zither',
		'synth',
		'bass',
		'guitar',
	];
}

/**
 * Returns a random instrument from instruments().
 *
 * @return string An instrument.
 */
function get_instrument() {
	return Genrenator\get_thing( instruments() );
}
