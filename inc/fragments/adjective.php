<?php

namespace BinaryJazz\Genrenator\Fragments;


class adjective extends fragments {

	const ADJECTIVES = [
		// A.
		'abstract',
		'acoustic',
		'adult',
		'aggressive',
		'album',
		'arena',
		// B.
		'baroque',
		'bass',
		'bebop',
		'big',
		'binary',
		'black',
		'blue eyed',
		'bop',
		'bubble',
		// C.
		'calming',
		'chamber',
		'christian',
		'classic',
		'contemporary',
		// D.
		'dad',
		'dancy',
		'deep',
		'dirty',
		'doo wop',
		'dream',
		'drone',
		// E.
		'ethereal',
		'experimental',
		// F.
		'flutter',
		// G.
		'gangster',
		'garage',
		'glam',
		'gothic',
		'grim',
		// H.
		'happy',
		'hard',
		'heavy',
		'hip',
		// I.
		'indie',
		'intelligent',
		// J.
		'jesus',
		// K.
		// L.
		// M.
		'mellow',
		'modern',
		// N.
		'nasty',
		'new',
		// O.
		'orchestral',
		// P.
		'permanent',
		'pounding',
		'power',
		'pulsing',
		// Q.
		// R.
		'religious',
		'rippling',
		'roots',
		// S.
		'shiver',
		'smooth',
		'soft',
		'southern',
		'swirl',
		// T.
		'technical',
		'teen',
		'terror',
		'thrash',
		'traditional',
		'tribal',
		'tribute',
		'tropical',
		'turbo',
		'twee',
		// U.
		'underground',
		'urban',
		// V.
		'vintage',
		'viral',
		'vocal',
		// W.
		// X.
		// Y.
		// Z.
		'zolo',
	];

	public function elements() {
		return self::ADJECTIVES;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}

}