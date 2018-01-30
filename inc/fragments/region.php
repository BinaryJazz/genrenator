<?php

namespace BinaryJazz\Genrenator\Fragments;


class region extends fragments {

	const REGIONS = [
		'mexican ',
		'latin ',
		'k-',
		'j-',
		'canadian ',
		'uk ',
		'southern ',
		'euro',
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