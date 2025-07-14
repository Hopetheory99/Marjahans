<?php
/**
 * Theme bootstrap file.
 *
 * @package Marjahans\Theme
 */

use Timber\Timber;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

Timber::$dirname = array( 'templates' );

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
			$version = wp_get_theme()->get( 'Version' );
			wp_enqueue_style( 'marjahans-style', get_theme_file_uri( 'build/style.css' ), array(), $version );
			wp_enqueue_script( 'marjahans-app', get_theme_file_uri( 'build/index.js' ), array(), $version, true );
	}
);
