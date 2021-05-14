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
		// Regional hyphenated.
		'c-',
		'k-',
		'j-',
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
		'hetero',
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
		// Regional contractions.
		'afro',
		'aussie',
		'austro',
		'euro',
	];

	public function elements() {
		return self::PREFIXES;
	}
}
