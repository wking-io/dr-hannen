<?php
/**
 * WooCommerce Authorize.Net Gateway
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade WooCommerce Authorize.Net Gateway to newer
 * versions in the future. If you wish to customize WooCommerce Authorize.Net Gateway for your
 * needs please refer to http://docs.woocommerce.com/document/authorize-net-cim/
 *
 * @author    SkyVerge
 * @copyright Copyright (c) 2013-2020, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

namespace SkyVerge\WooCommerce\Authorize_Net\Emulation;

defined( 'ABSPATH' ) or exit;

use SkyVerge\WooCommerce\PluginFramework\v5_6_1 as Framework;

/**
 * Authorize.Net AIM Emulation API Class
 *
 * Handles sending/receiving/parsing of Authorize.Net AIM name/value pair API.
 * Some payment processors offer emulation for their service which matches how
 * Authorize.Net handles their legacy NVP.
 *
 * @since 3.0.0
 */
class API extends Framework\SV_WC_API_Base implements Framework\SV_WC_Payment_Gateway_API {


	/** @var string gateway ID, used for logging */
	protected $gateway_id;

	/** @var \WC_Order|null order associated with the request, if any */
	protected $order;

	/** @var string API login ID value */
	protected $api_login_id;

	/** @var string API transaction key value */
	protected $api_transaction_key;


	/**
	 * Constructs the class.
	 *
	 * @since 3.0.0
	 *
	 * @param Credit_Card $gateway instance
	 */
	public function __construct( $gateway ) {

		$this->gateway_id = $gateway->get_id();

		// request URI does not vary in between requests
		$this->request_uri = $gateway->get_gateway_url();

		// set response handler class
		$this->response_handler = API\Response::class;

		// set auth credentials
		$this->api_login_id        = $gateway->get_api_login_id();
		$this->api_transaction_key = $gateway->get_api_transaction_key();
	}


	/**
	 * Creates a new credit card charge transaction.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::credit_card_charge()
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 * @return API\Response Authorize.Net API response object
	 * @throws Framework\SV_WC_API_Exception
	 */
	public function credit_card_charge( \WC_Order $order ) {

		$this->order = $order;

		$request = $this->get_new_request();

		$request->create_credit_card_charge( $order );

		return $this->perform_request( $request );
	}


	/**
	 * Creates a new credit card auth transaction.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::credit_card_authorization()
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 * @return API\Response Authorize.Net API response object
	 * @throws Framework\SV_WC_API_Exception
	 */
	public function credit_card_authorization( \WC_Order $order ) {

		$this->order = $order;

		$request = $this->get_new_request();

		$request->create_credit_card_auth( $order );

		return $this->perform_request( $request );
	}


	/**
	 * Captures funds for a credit card authorization.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::credit_card_capture()
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 * @return API\Response Authorize.Net API response object
	 * @throws Framework\SV_WC_API_Exception
	 */
	public function credit_card_capture( \WC_Order $order ) {

		$this->order = $order;

		$request = $this->get_new_request();

		$request->create_credit_card_capture( $order );

		return $this->perform_request( $request );
	}


	/** Validation methods ****************************************************/


	/**
	 * Determines if the response has any status code errors.
	 *
	 * @see Framework\SV_WC_API_Base::do_pre_parse_response_validation()
	 *
	 * @since 3.0.0
	 *
	 * @throws Framework\SV_WC_API_Exception
	 */
	protected function do_pre_parse_response_validation() {

		// authorize.net should rarely return a non-200 status
		if ( 200 !== (int) $this->get_response_code() ) {

			throw new Framework\SV_WC_API_Exception( sprintf( __( 'HTTP %s: %s', 'woocommerce-gateway-authorize-net-cim' ), $this->get_response_code(), $this->get_response_message() ) );
		}
	}


	/** Conditional methods *******************************************************************************************/


	/**
	 * Authorize.Net Emulation does not support getting tokenized payment methods.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::supports_get_tokenized_payment_methods()
	 *
	 * @since 3.0.0
	 *
	 * @return false
	 */
	public function supports_get_tokenized_payment_methods() { return false; }


	/**
	 * Authorize.Net Emulation does not support removing tokenized payment methods.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::supports_remove_tokenized_payment_method()
	 *
	 * @since 3.0.0
	 *
	 * @return false
	 */
	public function supports_remove_tokenized_payment_method() { return false; }


	/**
	 * Determines if this API supports updating tokenized payment methods.
	 *
	 * @see SV_WC_Payment_Gateway_API::update_tokenized_payment_method()
	 *
	 * @since 3.0.0
	 *
	 * @return false
	 */
	public function supports_update_tokenized_payment_method() { return false; }


	/** Getter methods ************************************************************************************************/


	/**
	 * Builds and returns a new API request object.
	 *
	 * @since 3.0.0
	 *
	 * @param array $type
	 * @return API\Request
	 */
	protected function get_new_request( $type = array() ) {

		return new API\Request( $this->api_login_id, $this->api_transaction_key );
	}


	/**
	 * Gets the order associated with the request, if any.
	 *
	 * @since 3.0.0
	 *
	 * @return \WC_Order|null
	 */
	public function get_order() {

		return $this->order;
	}


	/**
	 * Gets the ID for the API.
	 *
	 * This is used primarily to namespace the action name for broadcasting requests.
	 *
	 * @see Framework\SV_WC_API_Base::get_api_id()
	 *
	 * @since 3.0.0
	 *
	 * @return string
	 */
	protected function get_api_id() {

		return $this->gateway_id;
	}


	/**
	 * Gets the main plugin instance.
	 *
	 * @see Framework\SV_WC_API_Base::get_plugin()
	 *
	 * @since 3.0.0
	 *
	 * @return \WC_Authorize_Net_CIM
	 */
	protected function get_plugin() {

		return wc_authorize_net_cim();
	}


	/** No-op methods *************************************************************************************************/

	/**
	 * No-op, as emulation does not support refund transactions
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 */
	public function refund( \WC_Order $order ) { }


	/**
	 * No-op, as emulation does not support void transactions
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 */
	public function void( \WC_Order $order ) { }


	/**
	 * No-op, as emulation does not support eCheck transactions
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 */
	public function check_debit( \WC_Order $order ) { }


	/**
	 * Authorize.Net Emulation does not support tokenizing payment methods.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::tokenize_payment_method()
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order order object
	 */
	public function tokenize_payment_method( \WC_Order $order ) { }


	/**
	 * Authorize.Net Emulation does not support removing tokenized payment methods.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::remove_tokenized_payment_method()
	 *
	 * @since 3.0.0
	 *
	 * @param string $token payment method token
	 * @param string $customer_id unique customer ID
	 */
	public function remove_tokenized_payment_method( $token, $customer_id ) { }


	/**
	 * Authorize.Net Emulation does not support getting tokenized payment methods.
	 *
	 * @see Framework\SV_WC_Payment_Gateway_API::get_tokenized_payment_methods()
	 *
	 * @since 3.0.0
	 *
	 * @param string $customer_id unique customer ID
	 */
	public function get_tokenized_payment_methods( $customer_id ) { }


	/**
	 * No-op: Authorize.Net does not support tokenization.
	 *
	 * @since 3.0.0
	 *
	 * @param \WC_Order $order
	 */
	public function update_tokenized_payment_method( \WC_Order $order ) { }


}
