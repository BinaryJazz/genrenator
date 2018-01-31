<?php

namespace BinaryJazz\Genrenator\Fragments;


class instrument extends fragments {

	const INSTRUMENTS = [
		'banjo',
		'flute',
		'gong',
		'drum',
		'lute',
		'theremin',
		'triangle',
		'cowbell',
		'percussion',
		'trombone',
		'vocal',
		'zither',
		'synth',
		'bass',
		'guitar',
	];

	public function elements() {
		return self::INSTRUMENTS;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}
}