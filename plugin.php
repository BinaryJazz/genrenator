<?php
/**
 * Plugin Name: Binary Jazz Genrenator
 * Plugin URI: https://binaryjazz.us
 * Description: Random genre creation API.
 * Author: The folks at Binary Jazz
 * Author URI: https://binaryjazz.us
 * License: GPLv3
 *
 * @package Genrenator
 */

namespace BinaryJazz\Genrenator;

require_once __DIR__ . '/inc/namespace.php';

// Kick it off.
add_action( 'plugins_loaded', __NAMESPACE__ . '\\bootstrap' );
