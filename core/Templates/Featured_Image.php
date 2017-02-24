<?php
/**
 * Featured_Image Controller API
 *
 * This class renders the Featured_Image output on the registered position.
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
class Featured_Image extends Template_Base implements Subscriber_Interface  {

	/**
	 * Returns an array of hooks that this subscriber wants to register with
	 * the WordPress plugin API.
	 *
	 * @hoocked 'italystrap_entry_content' - 40
	 *
	 * @return array
	 */
	public static function get_subscribed_events() {

		return array(
			// 'hook_name'							=> 'method_name',
			'italystrap_entry_content'	=> array(
				'function_to_add'	=> 'render',
				'priority'			=> apply_filters( 'italystrap_featured_image_priority', 40 ),
			),
		);
	}

	/**
	 * Render the output of the controller.
	 */
	public function render() {

		if ( in_array( 'hide_thumb', $this->get_template_settings(), true ) ) {
			return;
		}

		parent::render();
	}
}
