<?php
/**
 * Theme bootstrap.
 *
 * @package AtlasTheme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/vendor/autoload.php';

Atlas\Theme\Bootstrap::init();
