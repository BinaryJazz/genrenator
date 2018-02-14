<?php
/**
 * Plugin Name: Binary Jazz Genrenator
 * Plugin URI: https://binaryjazz.us
 * Description: Random genre creation API.
 * Version: 0.2
 * Author: The folks at Binary Jazz
 * Author URI: https://binaryjazz.us
 * License: GPLv3
 *
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator;

require_once __DIR__ . '/inc/namespace.php';
require_once __DIR__ . '/inc/genrenator.php';
require_once __DIR__ . '/inc/storynator.php';
require_once __DIR__ . '/inc/api.php';

const FRAGMENT_PIECES = [
	'fragments',
	'genre',
	'instrument',
	'prefix',
	'suffix',
	'adjective',
	'beat',
	'region',
];
foreach ( FRAGMENT_PIECES as $fragment_piece ) {
	require_once __DIR__ . '/inc/fragments/' . $fragment_piece . '.php';
}

// Kick it off.
add_action( 'plugins_loaded', __NAMESPACE__ . '\\bootstrap' );
