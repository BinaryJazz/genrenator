<?php

namespace BinaryJazz\Genrenator\Fragments;


class beat extends fragments {

	private function beats() {
		$adjective  = new adjective();
		$instrument = new instrument();
		$region     = new region();
		return [
			// Translators: %s is a random adjective.
			sprintf( __( 'deep %s', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s beat', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s bass', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s tone', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s listening', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s band', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s tunes', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s era', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s dawn', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random region.
			sprintf( __( '%s sound', 'genrenator' ), $region->get_element() ),
			// Translators: %s is a random region.
			sprintf( __( '%sinvasion', 'genrenator' ), $region->get_element() ),
			// Translators: %s is a random region.
			sprintf( __( '%s scene', 'genrenator' ), $region->get_element() ),
			sprintf( '%1$s %2$s', $adjective->get_element(), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( '%s and bass', 'genrenator' ), $instrument->get_element() ),
		];
	}

	public function elements() {
		return $this->beats();
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}
}