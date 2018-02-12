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
		'avant-garde',
		// B.
		'baroque',
		'bass',
		'bebop',
		'big',
		'binary',
		'black',
		'blue eyed',
		'bop',
		'bouncy',
		'bow',
		'brass',
		'brutal',
		'bubble',
		'bubblegum',
		// C.
		'candy',
		'calming',
		'chamber',
		'chaotic',
		'children\'s',
		'christian',
		'city',
		'classic',
		'compositional',
		'contemporary',
		'cool',
		'cowboy',
		'crossover',
		// D.
		'dad',
		'dancy',
		'dark',
		'death',
		'deep',
		'destroy',
		'dirty',
		'doo wop',
		'doom',
		'dream',
		'drone',
		// E.
		'early',
		'easy',
		'escape',
		'ethereal',
		'experimental',
		// F.
		'filter',
		'first wave',
		'float',
		'flutter',
		'folk',
		'folklore',
		'freak',
		'free',
		'funk',
		'funky',
		// G.
		'gangster',
		'garage',
		'gauze',
		'girl',
		'glam',
		'gore',
		'gothic',
		'grave',
		'grim',
		'groove',
		// H.
		'hands up',
		'happy',
		'hard',
		'hardcore',
		'heavy',
		'healing',
		'hip',
		// I.
		'idol',
		'indie',
		'industrial',
		'intelligent',
		'improvisational',
		// J.
		'jangle',
		'jam',
		'jesus',
		'jump',
		// K.
		'kids',
		// L.
		'liquid',
		'lo-fi',
		'lovers',
		// M.
		'math',
		'mellow',
		'melodic',
		'minimal',
		'modern',
		'movie',
		// N.
		'nasty',
		'new',
		'ninja',
		'no',
		// O.
		'ok',
		'operatic',
		'orchestral',
		'outlaw',
		'outsider',
		// P.
		'p',
		'pagan',
		'permanent',
		'pop',
		'pounding',
		'power',
		'progressive',
		'psychadelic',
		'pub',
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
		'second wave',
		'shimmer',
		'shiver',
		'show',
		'skate',
		'sky',
		'sleaze',
		'slow',
		'smooth',
		'speed',
		'soft',
		'southern',
		'stoner',
		'suomi',
		'surf',
		'swirl',
		'symphonic',
		// T.
		'technical',
		'teen',
		'terror',
		'third wave',
		'thrash',
		'traditional',
		'tribal',
		'tribute',
		'tropical',
		'turbo',
		'twee',
		// U.
		'underground',
		'uplifting',
		'urban',
		// V.
		'vapor',
		'velha',
		'video game',
		'vintage',
		'viral',
		'visual',
		'vocal',
		// W.
		'warm',
		'weird',
		'witch',
		// X.
		// Y.
		// Z.
		'zolo',
		'zouk',
	];

	public function elements() {
		return self::ADJECTIVES;
	}

	public function texturize() {
		return parent::texturize() . ' ';
	}

}