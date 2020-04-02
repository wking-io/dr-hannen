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

namespace SkyVerge\WooCommerce\Authorize_Net\API\Hosted;

defined( 'ABSPATH' ) or exit;

use SkyVerge\WooCommerce\PluginFramework\v5_6_1 as Framework;

/**
 * Authorize.Net Accept Hosted response.
 *
 * @since 3.0.0
 */
class eCheck_Payment_Response extends Abstract_Payment_Response implements Framework\SV_WC_Payment_Gateway_API_Payment_Notification_eCheck_Response {


	/**
	 * Gets the payment type.
	 *
	 * @since 3.0.0
	 *
	 * @return string
	 */
	public function get_payment_type() {

		return Framework\SV_WC_Payment_Gateway::PAYMENT_TYPE_ECHECK;
	}


	/** No-Op Methods *********************************************************/


	/**
	 * Gets the account type, like checking or savings.
	 *
	 * The Accept Hosted response does not return this.
	 *
	 * @since 3.0.0
	 */
	public function get_account_type() {}


	/**
	 * Gets the check number.
	 *
	 * The Accept Hosted response does not return this.
	 *
	 * @since 3.0.0
	 */
	public function get_check_number() {}


}

