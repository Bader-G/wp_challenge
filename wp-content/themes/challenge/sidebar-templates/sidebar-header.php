<?php 
/**
 * Sidebar - The Header Right Side Widget Area
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_active_sidebar( 'rightsideheader' ) ) {
    dynamic_sidebar( 'rightsideheader' );
}