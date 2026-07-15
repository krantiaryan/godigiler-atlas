<?php
/**
 * Theme Bootstrap.
 *
 * @package AtlasTheme
 */

declare(strict_types=1);

namespace Atlas\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bootstraps the Atlas Theme.
 */
final class Bootstrap {

	/**
	 * Initialize the theme.
	 *
	 * @return void
	 */
	public static function init(): void {
		Theme::init();
	}
}
