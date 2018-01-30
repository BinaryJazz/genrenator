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

abstract class fragments {

	abstract public function elements();

	public function get_element() {
		return Genrenator\get_thing( $this->elements() );
	}

	public function texturize() {
		return $this->get_element();
	}
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
		'aggressive',
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
		'calming',
		'chamber',
		'christian',
		'classic',
		'contemporary',
		// D.
		'dad',
		'dancy',
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
		'heavy',
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
		'pounding',
		'power',
		'pulsing',
		// Q.
		// R.
		'religious',
		'rippling',
		'roots',
		// S.
		'shiver',
		'smooth',
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
	$instrument = new instrument();
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
		sprintf( __( '%s-driven ', 'genrenator' ), $instrument->get_element() ),
		// Translators: %s is a random instrument.
		sprintf( __( '%s-heavy ', 'genrenator' ), $instrument->get_element() ),
		// Translators: %s is a random instrument.
		sprintf( __( '%s-based ', 'genrenator' ), $instrument->get_element() ),
		// Translators: %s is a random instrument.
		sprintf( __( '%s-centric ', 'genrenator' ), $instrument->get_element() ),
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
	$instrument = new instrument();
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
		sprintf( __( ' with hints of %s', 'genrenator' ), $instrument->get_element() ),
		// Translators: %s is a random instrument.
		sprintf( __( ' with prominent %s', 'genrenator' ), $instrument->get_element() ),

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
		'eastern ',
		'west coast ',
		'east coast ',
		'florida ',
		'swedish ',
		'tibetan ',
	];
}

function get_region() {
	return Genrenator\get_thing( regions() );
}

function beats() {
	$instrument = new instrument();
	return [
		// Translators: %s is a random adjective.
		sprintf( __( '%s beat', 'genrenator' ), get_adjective() ),
		// Translators: %s is a random adjective.
		sprintf( __( '%s bass', 'genrenator' ), get_adjective() ),
		sprintf( '%1$s %2$s', get_adjective(), $instrument->get_element() ),
	];
}

function get_beat() {
	return Genrenator\get_thing( beats() );
}
