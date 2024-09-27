<?php
/*
Plugin Name: Blickwert Billing
Plugin URI: https://blickwert.at/
Description: Buchhaltung mit E/A Rechner
Version: 1.0.0
Author: David Wögerer
Author URI: ttps://blickwert.at/
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Include required files
require_once plugin_dir_path( __FILE__ ) . 'includes/class-bw-billing-cpts.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-bw-billing-taxonomies.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-bw-billing-plugin-page.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-bw-billing-pdf.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-bw-admin-hooks.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-bw-frontend-hooks.php';

// Initialize classes
BW_Billing_CPTs::get_instance();
BW_Billing_Taxonomies::get_instance();
BW_Billing_Plugin_Page::get_instance();
BW_Billing_PDF::get_instance();
Admin_Hooks::get_instance();  // Initialize Admin Hooks
Frontend_Hooks::get_instance();  // Initialize Frontend Hooks
