<?php

namespace BinaryJazz\Genrenator\Fragments;

class genre extends fragments {

	const GENRES = [
		'2-step',
		'alternative',
		'ambient',
		'blues',
		'contemporary',
		'country',
		'dance',
		'EBM',
		'EDM',
		'en español',
		'folk',
		'funk',
		'garage',
		'goth',
		'grime',
		'grunge',
		'hip hop',
		'house',
		'indie',
		'jazz',
		'latin',
		'left-field',
		'metal',
		'mexican',
		'noise',
		'pop',
		'punk',
		'R&B',
		'rap',
		'reggae',
		'rock',
		'rockabilly',
		'singer-songwriter',
		'sludge',
		'soul',
		'standards',
		'swing',
		'tango',
		'trap',
		'trance',
		'turntablism',
	];

	public function elements() {
		return self::GENRES;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}

}