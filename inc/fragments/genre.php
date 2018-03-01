<?php

namespace BinaryJazz\Genrenator\Fragments;

class genre extends fragments {
	const GENRES_SECONDARY = [
		'a capella',
		'abstract',
		'afrikaans',
		'afrobeat',
		'america',
		'americana',
		'anime',
		'arabesque',
		'argentino',
		'ballroom',
		'banda',
		'baroque',
		'bebop',
		'belly dance',
		'bhangra',
		'big band',
		'bluegrass',
		'boogie',
		'boogie-woogie',
		'bolero',
		'bop',
		'bossa nova',
		'breakbeat',
		'breaks',
		'broadway',
		'cabaret',
		'canzone',
		'capoeira',
		'carioca',
		'carnivale',
		'celtic',
		'chanson',
		'chill',
		'chiptune',
		'choir',
		'choral',
		'comedy',
		'composition',
		'contemporary',
		'core',
		'corrosion',
		'crunk',
		'cubaton',
		'cumbia',
		'dancehall',
		'desi',
		'disney',
		'dixieland',
		'doo-wop',
		'doom',
		'doujin',
		'downtempo',
		'dreamo',
		'drift',
		'drill',
		'drone',
		'dub',
		'en español',
		'experimental',
		'exotica',
		'focus',
		'francoton',
		'fusion',
		'gabba',
		'game',
		'gamelan',
		'garage',
		'glitch',
		'go-go',
		'gospel',
		'goth',
		'grime',
		'grupera',
		'guarda',
		'hardstyle',
		'hollywood',
		'honky tonk',
		'hyphy',
		'idol',
		'industrial',
		'improvisation',
		'jungle',
		'kayokyoku',
		'kei',
		'klezmer',
		'kompa',
		'latin',
		'left-field',
		'lilith',
		'lo-fi',
		'mambo',
		'mantra',
		'marching band',
		'mariachi',
		'mashup',
		'meditation',
		'merengue',
		'merseybeat',
		'mexican',
		'minimal',
		'musique concrete',
		'muzak',
		'nerdcore',
		'new romantic',
		'noise',
		'norteño',
		'oi',
		'opera',
		'orchestral',
		'pagode',
		'performance',
		'pixie',
		'polka',
		'polyphony',
		'prank',
		'prog',
		'psychadelic',
		'psych',
		'psychobilly',
		'punjabi',
		'qawwali',
		'ragtime',
		'rai',
		'ranchera',
		'rave',
		'relaxative',
		'renaissance',
		'riddim',
		'riot grrl',
		'rockabilly',
		'romantico',
		'room',
		'rumba',
		'salsa',
		'samba',
		'schlager',
		'scratch',
		'screamo',
		'serialism',
		'shanty',
		'shoegaze',
		'show tunes',
		'sleep',
		'sludge',
		'song poem',
		'strut',
		'swing',
		'talent show',
		'tango',
		'tejano',
		'thrash',
		'throat singing',
		'tin pan alley',
		'timba',
		'trap',
		'tribe',
		'tribal',
		'turntablism',
		'twitch',
		'tzadik',
		'uplift',
		'wave',
		'western',
		'wonky',
		'workout',
		'worship',
		'ye ye',
		'zolo',
		'zydeco',
	];

	const GENRES_MAIN = [
		'2-step',
		'alternative',
		'ambient',
		'blues',
		'classical',
		'country',
		'dance',
		'disco',
		'dubstep',
		'EBM',
		'EDM',
		'electro',
		'electronic',
		'emo',
		'folk',
		'funk',
		'grunge',
		'hip hop',
		'house',
		'indie',
		'jazz',
		'lounge',
		'metal',
		'motown',
		'new age',
		'new wave',
		'pop',
		'punk',
		'R&B',
		'rap',
		'reggae',
		'rock',
		'rock & roll',
		'singer-songwriter',
		'ska',
		'soul',
		'soundtrack',
		'standards',
		'techno',
		'trance',
	];

	public function elements() {
		// 1 in 5 genres is a secondary, more obscure genre.
		if ( 1 === rand( 1, 5 ) ) {
			return self::GENRES_SECONDARY;
		}

		return self::GENRES_MAIN;
	}
}
