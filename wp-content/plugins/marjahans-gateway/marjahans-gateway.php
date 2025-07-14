<?php
/**
 * Plugin Name: Marjahans Gateway
 * Description: WooCommerce payment gateway integration for bKash.
 * Version: 0.1.0
 * Author: Marjahans
 * Text Domain: marjahans
 *
 * @package Marjahans\Gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter(
	'woocommerce_payment_gateways',
	function ( $gateways ) {
		$gateways[] = 'Marjahans_Gateway_Bkash';
		return $gateways;
	}
);

add_action(
	'plugins_loaded',
	function () {
		if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
			return;
		}
		require_once __DIR__ . '/includes/class-marjahans-gateway-bkash.php';
	}
);
