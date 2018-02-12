<?php

namespace BinaryJazz\Genrenator\Fragments;


class region extends fragments {

	const REGIONS = [
		// Prefixes.
		'k-',
		'j-',
		// Contractions.
		'euro',
		// Adjectives.
		'mexican ',
		'latin ',
		'canadian ',
		'uk ',
		'southern ',
		'kraut ',
		'viking ',
		'world ',
		'eastern ',
		'west coast ',
		'east coast ',
		'florida ',
		'swedish ',
		'tibetan ',
	];

	public function elements() {
		return self::REGIONS;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}
}