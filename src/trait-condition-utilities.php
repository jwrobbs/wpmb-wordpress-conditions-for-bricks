<?php
/**
 * Shared functions for the conditions.
 *
 * @package WPMB_WordPress_Conditions_for_Bricks
 */

namespace WPMB_WordPress_Conditions_for_Bricks\src;

defined( 'ABSPATH' ) || exit;

/**
 * Trait Condition_Utilities
 */
trait Condition_Utilities {

	/**
	 * Option group name.
	 *
	 * @var string
	 */
	public $group = 'wpmb_wordpress_conditions';

	/**
	 * Shared function to be used in __construct() of the condition classes.
	 */
	public function initialize() {
		add_filter( 'bricks/conditions/options', array( $this, 'register_options' ) );
		add_filter( 'bricks/conditions/result', array( $this, 'evaluate_result' ), 10, 3 );
	}

	/**
	 * Reminder to set options.
	 */
	public function register_options() {
		die( 'Please define register_options for this condition.' );
	}

	/**
	 * Reminder to set the evaluation.
	 */
	public function evaluate_result() {
		die( 'Please define evaluate_result for this condition.' );
	}
}
