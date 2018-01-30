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
