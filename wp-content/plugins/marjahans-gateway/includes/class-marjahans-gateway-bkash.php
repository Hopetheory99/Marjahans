<?php
/**
 * Bkash gateway implementation.
 *
 * @package Marjahans\Gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
}

/**
 * Gateway class for bKash payments.
 */
class Marjahans_Gateway_Bkash extends WC_Payment_Gateway {

		/**
		 * Setup gateway properties and hooks.
		 */
	public function __construct() {
		$this->id                 = 'marjahans_bkash';
		$this->method_title       = __( 'bKash', 'marjahans' );
		$this->method_description = __( 'Pay securely via bKash.', 'marjahans' );
		$this->supports           = array( 'products' );

		$this->init_form_fields();
		$this->init_settings();

		$this->title       = $this->get_option( 'title' );
		$this->description = $this->get_option( 'description' );

		add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
	}

		/**
		 * Register settings fields displayed in admin.
		 */
	public function init_form_fields() {
		$this->form_fields = array(
			'enabled'     => array(
				'title'   => __( 'Enable/Disable', 'marjahans' ),
				'type'    => 'checkbox',
				'label'   => __( 'Enable bKash payments', 'marjahans' ),
				'default' => 'no',
			),
			'title'       => array(
				'title'   => __( 'Title', 'marjahans' ),
				'type'    => 'text',
				'default' => __( 'bKash', 'marjahans' ),
			),
			'description' => array(
				'title'   => __( 'Customer Message', 'marjahans' ),
				'type'    => 'textarea',
				'default' => __( 'Pay with your bKash account.', 'marjahans' ),
			),
			'app_key'     => array(
				'title'   => __( 'App Key', 'marjahans' ),
				'type'    => 'text',
				'default' => '',
			),
			'app_secret'  => array(
				'title' => __( 'App Secret', 'marjahans' ),
				'type'  => 'password',
			),
		);
	}

		/**
		 * Process the payment and return the result.
		 *
		 * @param int $order_id WooCommerce order ID.
		 * @return array
		 */
	public function process_payment( $order_id ) {
		$order = wc_get_order( $order_id );

		// TODO: implement API call to bKash here.

		$order->payment_complete();
		wc_reduce_stock_levels( $order_id );

		return array(
			'result'   => 'success',
			'redirect' => $this->get_return_url( $order ),
		);
	}
}
