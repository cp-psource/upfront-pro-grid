<?php
/**
 * Plugin Name:       UpFront Raster Erweiterung
 * Plugin URI:        https://upfront.n3rds.work/upfront-framework/upfront-builder/upfront-raster-erweiterung/
 * Description:       Ein verbessertes Raster-Overlay für UpFront.
 * Version:           1.2
 * Author:            DerN3rd
 * Author URI:        https://n3rds.work
 * License:           GPLv2 or later
 * License URI:       LICENSE
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function upg_enqueue() {
	wp_enqueue_style( 'upg-style', plugins_url( '/upfront-pro-grid.css' , __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'upg_enqueue' );
