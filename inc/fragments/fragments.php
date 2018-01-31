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
