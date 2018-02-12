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
		'art',
		'artistic',
		// B.
		'baroque',
		'bass',
		'bebop',
		'big',
		'binary',
		'black',
		'blue eyed',
		'bop',
		'bow',
		'bubble',
		'bubblegum',
		// C.
		'candy',
		'calming',
		'chamber',
		'christian',
		'classic',
		'compositional',
		'contemporary',
		'cool',
		// D.
		'dad',
		'dancy',
		'deep',
		'dirty',
		'doo wop',
		'dream',
		'drone',
		// E.
		'easy',
		'escape',
		'ethereal',
		'experimental',
		// F.
		'flutter',
		'filter',
		'folk',
		'freak',
		'funk',
		'funky',
		// G.
		'gangster',
		'garage',
		'glam',
		'gothic',
		'grim',
		'groove',
		// H.
		'happy',
		'hard',
		'hardcore',
		'heavy',
		'hip',
		// I.
		'idol',
		'indie',
		'industrial',
		'intelligent',
		// J.
		'jam',
		'jesus',
		// K.
		// L.
		'lo-fi',
		// M.
		'mellow',
		'minimal',
		'modern',
		// N.
		'nasty',
		'new',
		'ninja',
		// O.
		'orchestral',
		'outlaw',
		// P.
		'permanent',
		'pop',
		'pounding',
		'power',
		'progressive',
		'psychadelic',
		'pulsing',
		// Q.
		'quiet',
		// R.
		'reggaeton',
		'regional',
		'religious',
		'rippling',
		'riot',
		'romantic',
		'roots',
		// S.
		'shiver',
		'show',
		'skate',
		'slow',
		'smooth',
		'speed',
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
		'vapor',
		'video game',
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