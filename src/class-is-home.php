<?php
/**
 * Class Is_Home
 *
 * @package WPMB_WordPress_Conditions_for_Bricks
 */

namespace WPMB_WordPress_Conditions_for_Bricks\src;

defined( 'ABSPATH' ) || exit;

/**
 * Class Is_Home_Page
 */
class Is_Home {
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
			'key'     => 'is_home_page',
			'label'   => 'Is Home Page',
			'group'   => 'jwr_wp_conditions',
			'compare' => array(
				'type'        => 'select',
				'options'     => array(
					'home'     => 'Is home',
					'home_not' => 'Is not home',
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
		if ( 'is_home_page' !== $condition_key ) {
			return $result;
		}

		if ( 'home' === $condition['compare'] && is_home() ) {
			return true;
		}
		if ( 'home_not' === $condition['compare'] && ! is_home() ) {
			return true;
		}
		return false;
	}
}
