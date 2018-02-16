<?php

namespace BinaryJazz\Genrenator\Fragments;


class suffix extends fragments {

	const SUFFIXES = [
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
		'step',
		'coustica',
		'o',
		'style',
		'work',
		'haus',
		'musik',
		'vision',
		'tech',
		'grind',
		'tune',
		'ia',
		'down',
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
			__( ' in the dark', 'genrenator' ), // Since this is a phrase, we'll make it translatable.
			// Translators: %s is a random instrument.
			sprintf( __( ' with hints of %s', 'genrenator' ), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( ' with prominent %s', 'genrenator' ), $instrument->get_element() ),
		];
	}

	public function elements() {
		return array_merge( self::SUFFIXES, $this->translatable_suffixes());
	}

	public function texturize() {
		if ( in_array( parent::texturize(), [
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
			'step',
			'coustica',
			'o',
			'style',
			'work',
			'haus',
			'musik',
			'vision',
			'tech',
			'grind',
			'tune',
			'ia',
			'down',
		] ) ) {
			return parent::texturize();
		}

		return ' ' . parent::texturize();
	}

	/**
	 * Return an array of suffixes that don't have spaces.
	 *
	 * @since  0.2
	 * @return array Array of suffixes that don't have spaces.
	 */
	public static function no_space_suffixes() {
		static $kellen;

		if ( count( $kellen ) ) {
			return $kellen;
		}

		$suffixes = self::SUFFIXES;
		$kellen   = array_filter( $suffixes, function ( $suffix ) {
			return strpos( $suffix, ' ' ) === false;
		} );

		return $kellen;
	}
}
