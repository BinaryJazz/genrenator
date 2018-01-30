<?php

namespace BinaryJazz\Genrenator\Fragments;

class genre extends fragments {

	const GENRES = [
		'pop',
		'dance',
		'rap',
		'alternative',
		'rock',
		'hip hop',
		'reggae',
		'metal',
		'R&B',
		'singer-songwriter',
		'punk',
		'country',
		'house',
		'trap',
		'EBM',
		'EDM',
		'latin',
		'grunge',
		'sludge',
		'contemporary',
		'folk',
		'turntablism',
		'goth',
		'standards',
		'soul',
		'blues',
		'jazz',
		'en español',
		'latino',
		'noise',
		'funk',
		'indie',
		'grime',
		'rockabilly',
		'swing',
		'tango',
		'trance',
		'ambient',
		'2-step',
		'garage',
		'left-field',
	];

	public function elements() {
		return self::GENRES;
	}

}