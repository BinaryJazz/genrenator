<?php

namespace BinaryJazz\Genrenator\Fragments;

class prefix extends fragments {

	const PREFIXES = [
		// Hyphenated.
		'post-',
		'folk-',
		'fidget-',
		'turbo-',
		'blues-',
		'dance-',
		'psych-',
		'anti-',
		'neo-',
		'shibuya-',
		// Contractions.
		'cyber',
		'electro',
		'synth',
		'shoe',
		'chip',
		'hard',
		'neuro',
		'dub',
		'grind',
		'bro',
		'proto',
		'ether',
		'dans',
		'epi',
		'micro',
		'chill',
		'zap',
		'azonto',
		'vapor',
		'flux',
		'cover',
		'power',
		'finger',
		'math',
		'neuro',
		'aust',
		'ecto',
		'kinder',
		'org',
		'russia',
		'volks',
		'nintendo',
		'void',
		'steam',
		'melodi',
		'future',
		'psy',
		'freak',
		'aggro',
		// Adjectives.
		'retro ',
		'cat ',
		'trad ',
		'neo ',
		'dwn ',
		'nu ',
		'alt ',
		'acid ',
		'ambient ',
		'emo ',
		'anthem ',
		'indie ',
	];

	private function translatable_prefixes() {
		$instrument = new instrument();
		return [
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

	public function elements() {
		return array_merge( self::PREFIXES, $this->translatable_prefixes() );
	}

}