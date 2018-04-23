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
		'trumpet',
		'french horn',
		'fiddle',
		'mandolin',
		'banjolin',
		'cuatro',
		'euphonium',
		'xylophone',
		'viola',
		'cornet',
		'flugelhorn',
		'tuba',
		'sousaphone',
	];

	public function elements() {
		return self::INSTRUMENTS;
	}
}