<?php
/**
 * Fragments
 *
 * Pieces of possible new genres.
 *
 * @package Genrenator
 */

class Fragments {
	public static $pieces;

	public function __construct() {
		$this->pieces = $this->the_pieces();
	}

	/**
	 * Genre parts.
	 *
	 * @todo         Add parameters for % likelihood for the part to appear at the beginning, middle or end of a genre. E.g.: 'pop' => [ 0, 10, 90 ],
	 * @return array An array of genre pieces.
	 */
	private function the_pieces() {
		return [
			// Common genres/endings.
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
			// Less common genres/endings.
			'house',
			'trap',
			'EBM',
			'EDM',
			'latin',
			'road',
			'gold',
			'goth',
			'grunge',
			'sludge',
			'contemporary',
			'folk',
			'turntablism',
			'wave',
			'future',
			'standards',
			'soul',
			'blues',
			'mexican',
			'jazz',
			'en español',
			'latino',
			'room',
			'noise',
			// Genre qualifiers.
			'adult',
			'experimental',
			'blue eyed',
			'latin',
			'funk',
			'chamber',
			'garage',
			'contemporary',
			'dirty',
			'big',
			'binary',
			'hip',
			'southern',
			'hard',
			'new',
			'permanent',
			'underground',
			'teen',
			'modern',
			'tropical',
			'latin',
			'mellow',
			'black',
			'viral',
			'urban',
			'classic',
			'album',
			'arena',
			'indie',
			'soft',
			'gothic',
			'retro',
			'gangster',
			'roots',
			// Genre prefixes.
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