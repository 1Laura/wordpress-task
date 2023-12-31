<?php
	/**
	 * Astra Child Theme functions and definitions
	 *
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package Astra Child
	 * @since 1.0.0
	 */

	/**
	 * Define Constants
	 */
	define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

	/**
	 * Enqueue styles
	 */
	function astra_child_enqueue_styles() : void {
		wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	}

	add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles', );
