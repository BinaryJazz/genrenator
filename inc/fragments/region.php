<?php

namespace BinaryJazz\Genrenator\Fragments;


class region extends fragments {

	const REGIONS = [
		// Prefixes.
		'c-',
		'k-',
		'j-',
		// Contractions.
		'aussie',
		'euro',
		// Regions.
		'eastern ',
		'southern ',
		'tropical ',
		'world ',
		// Countries.
		'argentine ',
		'australian ',
		'brazilian ',
		'canadian ',
		'chilean ',
		'danish ',
		'dutch ',
		'finnish ',
		'french ',
		'german ',
		'indonesian ',
		'irish ',
		'italian ',
		'japanese ',
		'korean ',
		'mexican ',
		'norwegian ',
		'spanish ',
		'swedish ',
		'taiwanese ',
		'tibetan ',
		'turkish ',
		'uk ',
		// United States.
		'east coast ',
		'west coast ',
		'dirty south ',
		'florida ',
		'texas ',
		// Cultures.
		'british ',
		'celtic ',
		'kraut ',
		'latin ',
		'pinoy ',
		'viking ',
		// Cities.
		'brooklyn ',
		'chicago ',
		'detroit ',
		'hollywood ',
		'memphis ',
		'nashville ',
		'new jack ',
		'sheffield ',
		'vegas ',
	];

	public function elements() {
		return self::REGIONS;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}
}