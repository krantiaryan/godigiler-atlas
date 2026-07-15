<?php
/**
 * Theme initialization.
 *
 * @package Godigiler\Atlas\Theme
 */

declare(strict_types=1);

namespace Godigiler\Atlas\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers theme hooks.
 */
final class Theme {

	/**
	 * Register WordPress hooks.
	 *
	 * @return void
	 */
	public function register(): void {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
	}

	/**
	 * Theme setup.
	 *
	 * @return void
	 */
	public function setup(): void {

		load_theme_textdomain(
			'atlas-theme',
			get_template_directory() . '/languages'
		);

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

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

		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'atlas-theme' ),
			)
		);
	}
}
