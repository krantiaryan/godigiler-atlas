<?php
/**
 * Theme setup.
 *
 * @package AtlasTheme
 */

declare(strict_types=1);

namespace Atlas\Theme\Setup;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers WordPress theme supports.
 */
final class ThemeSetup {

	/**
	 * Register hooks.
	 *
	 * @return void
	 */
	public static function init(): void {
		add_action( 'after_setup_theme', array( self::class, 'setup' ) );
	}

	/**
	 * Configure theme supports.
	 *
	 * @return void
	 */
	public static function setup(): void {

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 280,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );

		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'atlas-theme' ),
				'footer'  => __( 'Footer Navigation', 'atlas-theme' ),
			)
		);
	}
}
