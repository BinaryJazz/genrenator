<?php
/**
 * Fragments
 *
 * Pieces of possible new genres.
 *
 * @package Genrenator
 */

/**
 * Main Fragments class.
 */
class Fragments {

	public function __construct() {
	}

	/**
	 * The list of genres.
	 *
	 * @return array A list of genres.
	 */
	private function genres() {
		return [
			'pop',
			'dance',
			'rap',
			'alternative',
			'rock',
			'hip hop',
			'reggae',
			'metal',
			'R&B',
			'singer-songwriter',
			'punk',
			'country',
			'house',
			'trap',
			'EBM',
			'EDM',
			'latin',
			'grunge',
			'sludge',
			'contemporary',
			'folk',
			'turntablism',
			'goth',
			'standards',
			'soul',
			'blues',
			'jazz',
			'en español',
			'latino',
			'noise',
			'funk',
			'indie',
			'grime',
			'rockabilly',
			'swing',
			'tango',
			'trance',
			'ambient',
			'2-step',
			'garage',
			'left-field',
		];
	}

	/**
	 * List of Adjectives.
	 *
	 * @return array Qualifiers for genres.
	 */
	private function adjectives() {
		return [
			// A.
			'abstract',
			'acoustic',
			'adult',
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
			'chamber',
			'christian',
			'classic',
			'contemporary',
			// D.
			'dad',
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
			'power',
			// Q.
			// R.
			'religious',
			'roots',
			// S.
			'shiver',
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
	}
			'post-',
			'neo',
			'dwn',
			'folk-',
			'nu',
			'cyber',
			'electro',
			'euro',
			'synth',
			'kraut',
			'stomp and',
			// Genre suffixes.
			'tronica',
			'timism',
			// Regions.
			'k-',
			'j-',
			'canadian',
			'uk',
		];
	}
}