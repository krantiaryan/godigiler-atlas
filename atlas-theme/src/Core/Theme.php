<?php
/**
 * Theme initialization.
 *
 * @package AtlasTheme
 */

declare(strict_types=1);

namespace Atlas\Theme\Core;

use Atlas\Theme\Setup\ThemeSetup;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Atlas Theme.
 */
final class Theme {

	/**
	 * Initialize the theme.
	 *
	 * @return void
	 */
	public static function init(): void {

		ThemeSetup::init();

	}
}
