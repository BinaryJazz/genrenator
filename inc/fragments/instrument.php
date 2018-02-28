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
		'piano',
		'harmonica',
		'cello',
		'ukulele',
		'violin',
		'didgeridoo',
		'mallet',
		'timpani',
		'kodo drum',
		'harpsichord',
		'panpipe',
		'wind',
		'harp',
		'brass',
		'pipe',
		'accordion',
		'organ',
		'clarinet',
		'saxophone',
	];

	public function elements() {
		return self::INSTRUMENTS;
	}
}