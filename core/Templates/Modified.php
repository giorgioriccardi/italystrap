<?php
/**
 * Modified Controller API
 *
 * This class renders the Modified output on the registered position.
 *
 * @link www.italystrap.com
 * @since 4.0.0
 *
 * @package ItalyStrap
 */

namespace ItalyStrap\Core\Templates;

use ItalyStrap\Event\Subscriber_Interface;

if ( ! defined( 'ABSPATH' ) or ! ABSPATH ) {
	die();
}

/**
 * Class description
 */
class Modified extends Template_Base implements Subscriber_Interface  {

	/**
	 * Returns an array of hooks that this subscriber wants to register with
	 * the WordPress plugin API.
	 *
	 * @hoocked 'italystrap_entry_content' - 60
	 *
	 * @return array
	 */
	public static function get_subscribed_events() {

		return array(
			// 'hook_name'							=> 'method_name',
			'italystrap_entry_content'	=> array(
				'function_to_add'	=> 'render',
				'priority'			=> 60,
			),
		);
	}
}
