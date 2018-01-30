<?php

namespace BinaryJazz\Genrenator\Fragments;


class beat extends fragments {

	private function beats() {
		$adjective = new adjective();
		$instrument = new instrument();
		return [
			// Translators: %s is a random adjective.
			sprintf( __( '%s beat', 'genrenator' ), $adjective->get_element() ),
			// Translators: %s is a random adjective.
			sprintf( __( '%s bass', 'genrenator' ), $adjective->get_element() ),
			sprintf( '%1$s %2$s', $adjective->get_element(), $instrument->get_element() ),
		];
	}

	public function elements() {
		return $this->beats();
	}
}