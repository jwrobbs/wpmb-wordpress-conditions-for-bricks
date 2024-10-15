<?php
/**
 * Class Is_Front_Page
 *
 * @package WPMB_WordPress_Conditions_for_Bricks
 */

namespace WPMB_WordPress_Conditions_for_Bricks\src;

defined( 'ABSPATH' ) || exit;

/**
 * Class Is_Front_Page
 */
class Is_Front_Page {
	use Condition_Utilities;

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->initialize();
	}

	/**
	 * Register options.
	 *
	 * @param array $options Options.
	 * @return array
	 */
	public function register_options( $options ) {
		$options[] = array(
			'key'     => 'is_front_page',
			'label'   => 'Is Front Page',
			'group'   => 'jwr_wp_conditions',
			'compare' => array(
				'type'        => 'select',
				'options'     => array(
					'front'     => 'Is front',
					'front_not' => 'Is not front',
				),
				'placeholder' => '==',
			),
			'value'   => array(
				'type' => 'text',
			),
		);

		return $options;
	}

	/**
	 * Evaluate result.
	 *
	 * @param bool   $result The result.
	 * @param string $condition_key The key.
	 * @param array  $condition The args.
	 *
	 * @return bool
	 */
	public function evaluate_result( $result, $condition_key, $condition ) {
		if ( 'is_front_page' !== $condition_key ) {
			return $result;
		}

		if ( 'front' === $condition['compare'] && is_front_page() ) {
			return true;
		}
		if ( 'front_not' === $condition['compare'] && ! is_front_page() ) {
			return true;
		}
		return false;
	}
}
