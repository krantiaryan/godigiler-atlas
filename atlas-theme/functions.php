<?php
/**
 * Theme bootstrap file.
 *
 * @package Godigiler\Atlas\Theme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$autoload = __DIR__ . '/vendor/autoload.php';

if ( file_exists( $autoload ) ) {
	require_once $autoload;
}

if ( class_exists( \Godigiler\Atlas\Theme\Bootstrap::class ) ) {
	\Godigiler\Atlas\Theme\Bootstrap::init();
}