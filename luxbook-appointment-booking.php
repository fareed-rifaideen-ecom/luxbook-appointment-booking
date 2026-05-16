<?php
/**
 * Plugin Name: Luxbook Appointment Booking
 * Description: A customizable, premium consultation and appointment booking engine.
 * Version: 1.0.0
 * Author: FMR
 * Text Domain: luxbook
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LUXBOOK_PATH', plugin_dir_path( __FILE__ ) );
define( 'LUXBOOK_URL', plugin_dir_url( __FILE__ ) );

require_once LUXBOOK_PATH . 'includes/Infrastructure/Install.php';

register_activation_hook( __FILE__, [ '\Luxbook\Infrastructure\Install', 'activate' ] );