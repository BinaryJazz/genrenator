<?php

namespace BinaryJazz\Genrenator\Fragments;

class prefix extends fragments {

	const PREFIXES = [
		// Hyphenated.
		'anarcho-',
		'anti-',
		'blues-',
		'dance-',
		'fidget-',
		'folk-',
		'post-',
		'psych-',
		'neo-',
		'shibuya-',
		'turbo-',
		// Contractions.
		'aggro',
		'aust',
		'azonto',
		'beat',
		'black',
		'bro',
		'chip',
		'chill',
		'cover',
		'cyber',
		'dans',
		'death',
		'dub',
		'ecto',
		'electro',
		'epi',
		'ether',
		'euro',
		'filth',
		'finger',
		'flux',
		'freak',
		'future',
		'grind',
		'hard',
		'hate',
		'indo',
		'kinder',
		'math',
		'melodi',
		'micro',
		'necro',
		'nerd',
		'neuro',
		'nintendo',
		'org',
		'pop',
		'power',
		'proto',
		'psy',
		'russia',
		'shoe',
		'spy',
		'steam',
		'synth',
		'un',
		'vapor',
		'void',
		'volks',
		'zap',
		// Adjectives.
		'acid',
		'alt',
		'ambient',
		'anthem',
		'cat',
		'death',
		'dwn',
		'emo',
		'indie',
		'neo',
		'nu',
		'retro',
		'trad',
	];

	private function translatable_prefixes() {
		$instrument = new instrument();
		return [
			__( 'stomp and ', 'genrenator' ),   // Since this is a phrase, we'll make it translatable.
			__( 'drum and ', 'genrenator' ),    // This is also a phrase.
			__( 'jig and ', 'genrenator' ),     // This is also a phrase.
			__( 'rhythm and ', 'genrenator' ),  // This is also a phrase.
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

	public function elements() {
		return array_merge( self::PREFIXES, $this->translatable_prefixes() );
	}

	public function texturize() {
		if ( in_array( parent::texturize(), [
			'acid',
			'alt',
			'ambient',
			'anthem',
			'cat',
			'death',
			'dwn',
			'emo',
			'indie',
			'neo',
			'nu',
			'retro',
			'trad',
		] ) ) {
			return parent::texturize() . ' ';
		}

		return parent::texturize();
	}

	/**
	 * Return an array of prefixes that don't have spaces.
	 *
	 * @since  0.2
	 * @return array Prefixes that don't have spaces.
	 */
	public static function no_space_prefixes() {
		static $kellen;

		if ( count( $kellen ) ) {
			return $kellen;
		}

		$prefixes = self::PREFIXES;
		$kellen   = array_filter( $prefixes, function ( $prefix ) {
			return strpos( $prefix, ' ' ) === false;
		} );

		return $kellen;
	}

}
