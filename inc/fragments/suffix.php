<?php

namespace BinaryJazz\Genrenator\Fragments;


class suffix extends fragments {

	const SUFFIXES = [
		'-step',
		'-grind',
		'-fox',
		'future',
		'tronica',
		'timism',
		'gaze',
		'ism',
		'bop',
		'core',
		' road',
		' music',
		' gold',
		' wave',
		' room',
		' dirt',
		' electronica',
		' ensembles',
		' fusion',
		' punk',
		' holler',
	];

	public function translatable_suffixes() {
		$instrument = new instrument();
		return [
			__( ' in the dark', 'genrenator' ), // Since this is a phrase, we'll make it translatable.
			// Translators: %s is a random instrument.
			sprintf( __( ' with hints of %s', 'genrenator' ), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( ' with prominent %s', 'genrenator' ), $instrument->get_element() ),
		];
	}

	public function elements() {
		return array_merge( self::SUFFIXES, $this->translatable_suffixes());
	}
}