<?php
/**
 * Theme bootstrap.
 *
 * @package Godigiler\Atlas\Theme
 */

declare(strict_types=1);

namespace Godigiler\Atlas\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bootstraps the Atlas Theme.
 */
final class Bootstrap {

	/**
	 * Initializes the theme.
	 *
	 * @return void
	 */
	public static function init(): void {
		$theme = new Theme();
		$theme->register();
	}
}
