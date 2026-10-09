<?php
/**
 * Veteria theme setup.
 *
 * @package Veteria
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VETERIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function veteria_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'veteria' ),
			'footer'  => esc_html__( 'Footer', 'veteria' ),
		)
	);

	load_theme_textdomain( 'veteria', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'veteria_setup' );

/**
 * Footer widget area.
 */
function veteria_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'veteria' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'veteria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'veteria_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function veteria_enqueue_assets() {
	wp_enqueue_style( 'veteria-style', get_stylesheet_uri(), array(), VETERIA_VERSION );
	wp_enqueue_script( 'veteria-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), VETERIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'veteria_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function veteria_enqueue_editor_assets() {
	wp_enqueue_style( 'veteria-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), VETERIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'veteria_enqueue_editor_assets' );

/**
 * Register the Veteria pattern category.
 */
function veteria_register_pattern_category() {
	register_block_pattern_category(
		'veteria',
		array( 'label' => esc_html__( 'Veteria', 'veteria' ) )
	);
}
add_action( 'init', 'veteria_register_pattern_category' );

/**
 * Custom block styles.
 */
function veteria_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'coral-pill', 'label' => esc_html__( 'Coral Pill', 'veteria' ) ) );
	register_block_style( 'core/group', array( 'name' => 'pet-card', 'label' => esc_html__( 'Pet Card', 'veteria' ) ) );
	register_block_style( 'core/image', array( 'name' => 'round-frame', 'label' => esc_html__( 'Round Frame', 'veteria' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'teal-rule', 'label' => esc_html__( 'Teal Rule', 'veteria' ) ) );
}
add_action( 'init', 'veteria_register_block_styles' );

/**
 * Custom excerpt length.
 */
function veteria_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'veteria_excerpt_length' );

/**
 * Local bundled image URL helper for patterns.
 *
 * @param string $file Image file name inside assets/images/.
 * @return string Escaped image URL.
 */
function veteria_img( $file ) {
	return esc_url( get_template_directory_uri() . '/assets/images/' . ltrim( $file, '/' ) );
}

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function veteria_icon( $name ) {
	$icons = array(
		'paw'      => '<circle cx="11" cy="8" r="2.2"/><circle cx="5.5" cy="11.5" r="2.2"/><circle cx="16.5" cy="11.5" r="2.2"/><circle cx="8" cy="16.5" r="2.2"/><circle cx="14" cy="16.5" r="2.2"/><path d="M11 12.5c-2.8 0-5.5 2.6-5.5 5.2 0 1.5 1.2 2.3 2.6 2.3 1 0 1.9-.5 2.9-.5s1.9.5 2.9.5c1.4 0 2.6-.8 2.6-2.3 0-2.6-2.7-5.2-5.5-5.2z"/>',
		'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'     => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'      => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'    => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>',
		'heart'    => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/>',
		'plus'     => '<circle cx="12" cy="12" r="9"/><path d="M12 8v8M8 12h8"/>',
		'calendar' => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M8 3v4M16 3v4M3 10h18"/>',
		'star'     => '<path d="M12 2l2.9 6.3 6.9.8-5.1 4.7 1.4 6.8L12 17.2 5.9 20.6l1.4-6.8L2.2 9.1l6.9-.8L12 2z"/>',
		'check'    => '<path d="M20 6L9 17l-5-5"/>',
		'shield'   => '<path d="M12 22s8-3.6 8-10V5l-8-3-8 3v7c0 6.4 8 10 8 10z"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
