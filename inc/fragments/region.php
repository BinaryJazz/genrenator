<?php

namespace BinaryJazz\Genrenator\Fragments;


class region extends fragments {

	const REGIONS = [
		// Prefixes.
		'c-',
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
		'dirty south ',
		'spanish ',
		'tropical ',
		'french ',
		'german ',
		'detroit ',
		'hollywood ',
		'british ',
		'memphis ',
		'argentine ',
		'italian ',
		'vegas ',
		'dutch ',
		'new jack ',
		'korean ',
		'chicago ',
		'australian ',
		'texas ',
		'turkish ',
		'nashville ',
		'taiwanese ',
		'danish ',
		'brazilian ',
		'irish ',
		'chilean ',
		'italian ',
		'finnish ',
		'brooklyn ',
		'indonesian ',
	];

	public function elements() {
		return self::REGIONS;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}
}