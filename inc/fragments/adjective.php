<?php

namespace BinaryJazz\Genrenator\Fragments;


class adjective extends fragments {

	const ADJECTIVES = [
		// 0-9.
		'21st century',
		// A.
		'abstract',
		'acid',
		'acoustic',
		'adult',
		'aggressive',
		'album',
		'alt',
		'ambient',
		'anthem',
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
		'broken',
		'brutal',
		'bubble',
		'bubblegum',
		// C.
		'candy',
		'calming',
		'cat',
		'chamber',
		'chaotic',
		'charred',
		'children\'s',
		'chillout',
		'christian',
		'cinematic',
		'city',
		'classic',
		'classical',
		'college',
		'compositional',
		'contemporary',
		'cool',
		'cowboy',
		'crossover',
		'crust',
		'cryptic',
		// D.
		'dad',
		'dancy',
		'dark',
		'death',
		'deep',
		'demo',
		'depressive',
		'desert',
		'destroy',
		'digital',
		'dirty',
		'doo wop',
		'doom',
		'dream',
		'drone',
		'dwn',
		// E.
		'early',
		'easy',
		'electroacoustic',
		'emo',
		'escape',
		'ethereal',
		'experimental',
		// F.
		'fast',
		'filter',
		'first wave',
		'float',
		'flutter',
		'folk',
		'folklore',
		'freak',
		'free',
		'full on',
		'funeral',
		'funk',
		'funky',
		// G.
		'game',
		'gangsta',
		'gangster',
		'garage',
		'gauze',
		'geek',
		'ghetto',
		'girl',
		'glam',
		'glitter',
		'gore',
		'gothic',
		'grave',
		'grim',
		'grisly',
		'groove',
		// H.
		'halloween',
		'hands up',
		'happy',
		'hard',
		'hardcore',
		'heavy',
		'healing',
		'hip',
		'honky tonk',
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
		'library',
		'light',
		'liquid',
		'lo-fi',
		'lovers',
		// M.
		'math',
		'medieval',
		'mellow',
		'melodic',
		'microtonal',
		'military',
		'minimal',
		'modern',
		'movie',
		// N.
		'nasty',
		'neo',
		'new',
		'ninja',
		'no',
		'noise',
		'nu',
		// O.
		'ok',
		'operatic',
		'orchestral',
		'outer ',
		'outlaw',
		'outsider',
		// P.
		'p',
		'pagan',
		'permanent',
		'pop',
		'pounding',
		'power',
		'prog',
		'progressive',
		'psychadelic',
		'pub',
		'pulsing',
		// Q.
		'quiet',
		// R.
		'ragga',
		'raw',
		'reggaeton',
		'regional',
		'religious',
		'retro',
		'rippling',
		'riot',
		'romantic',
		'roots',
		// S.
		'second wave',
		'serial',
		'shimmer',
		'shiver',
		'show',
		'skate',
		'skinhead',
		'sky',
		'slam',
		'slash',
		'sleaze',
		'slow',
		'smooth',
		'soda',
		'space',
		'speed',
		'spy',
		'soft',
		'southern',
		'stoner',
		'street',
		'sunset',
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
		'trad',
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
		'vegan',
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
		'yaght',
		// Z.
		'zolo',
		'zouk',
	];

	private function translatable_prefixes() {
		$instrument = new instrument();
		return [
			__( 'stomp and', 'genrenator' ),   // Since this is a phrase, we'll make it translatable.
			__( 'drum and', 'genrenator' ),    // This is also a phrase.
			__( 'jig and', 'genrenator' ),     // This is also a phrase.
			__( 'rhythm and', 'genrenator' ),  // This is also a phrase.
			// Translators: %s is a random instrument.
			sprintf( __( '%s-driven', 'genrenator' ), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( '%s-heavy', 'genrenator' ), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( '%s-based', 'genrenator' ), $instrument->get_element() ),
			// Translators: %s is a random instrument.
			sprintf( __( '%s-centric', 'genrenator' ), $instrument->get_element() ),
		];
	}

	public function elements() {
		return array_merge( self::ADJECTIVES, $this->translatable_prefixes() );
	}

}