<?php
namespace BinaryJazz\Genrenator\Fragments;

class post extends fragments {
	const POST = [
		'punk',
		'star',
		'trip',
		'polo',
		'whittle',
		'house',
		'party',
		'steady',
		'chileno',
		'chill',
		'road',
		'music',
		'gold',
		'wave',
		'room',
		'dirt',
		'electronica',
		'ensembles',
		'fusion',
		'holler',
		'reel',
		'remix',
		'product',
		'grrl',
		'storm',
		'flow',
		'français',
		'gaucho',
		'sonidera',
		'urbano',
		'international',
		'trio',
		'quartet',
		'quintet',
		'sextet',
		'napoletana',
		'revival',
		'catala',
	];

	public function translatable_suffixes() {
		$instrument = new instrument();
		return [
			__( 'in the dark', 'genrenator' ), // Since this is a phrase, we'll make it translatable.
			// Translators: %s is a random instrument.
			sprintf( __( 'with hints of %s', 'genrenator' ), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( 'with prominent %s', 'genrenator' ), $instrument->get_element() ),
		];
	}

	public function elements() {
		return array_merge( self::POST, $this->translatable_suffixes());
	}
}