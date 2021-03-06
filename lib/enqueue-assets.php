<?php
/**
 * Encolar assets
 *
 * Este es un documento para incluir todos los archivos de css y javascript
 *
 * @package _themename
 */

/**
 * Función para asignación de la versión de los assets
 *
 * Si se está desarrollando y la variable WP_DEBUG es true la variable
 * assets_version es un número aleatorio y para la versión de producción
 * cuando la variable WP_DEBUG es false se le asigna la versión del tema.
 *
 * @return $version
 */
function _themename_get_assets_version() {
	$version;

	if ( WP_DEBUG === true ) {
		$version = wp_rand( 0, 1000 );
	} else {
		$version = wp_get_theme()->Version;
	}
	return $version;
}
$assets_version = _themename_get_assets_version();
global $assets_version;

/**
 * Función de de agregar estilos y scripts
 *
 * @return void
 */
function _themename_assets() {
	global $assets_version;
	wp_register_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), $assets_version, 'all' );
	wp_enqueue_style( '_themename-stylesheet' );

	wp_register_script( '_themename-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array(), $assets_version, true );
	wp_enqueue_script( '_themename-scripts' );
}
add_action( 'wp_enqueue_scripts', '_themename_assets' );

/**
 * Función de de agregar estilos y scripts del admin
 *
 * @return void
 */
function _themename_admin_assets() {
	global $assets_version;
	wp_register_style( '_themename-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), $assets_version, 'all' );
	wp_enqueue_style( '_themename-admin-stylesheet' );

	wp_register_script( '_themename-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), $assets_version, true );
	wp_enqueue_script( '_themename-admin-scripts' );

}
add_action( 'admin_enqueue_scripts', '_themename_admin_assets' );
