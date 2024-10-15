<?php
/**
 * Plugin Name: WPMB WordPress Conditions for Bricks
 * Plugin URI: https://wpmasterbuilder.com
 * Description: Custom Bricks conditions based on WordPress conditions like is_home (WordPress plugin).
 * Version: 0.1.0
 * Author: Josh Robbs
 * Author URI: https://wpmasterbuilder.com
 * License: GPL2
 *
 * @package WPMB_WordPress_Conditions_for_Bricks
 */

namespace WPMB_WordPress_Conditions_for_Bricks;

defined( 'ABSPATH' ) || exit;

/**
 * Add custom condition group to Bricks.
 *
 * @param array $groups The groups.
 * @return array
 */
function add_condition_group( $groups ) {
	$groups[] = array(
		'name'  => 'wpmb_wordpress_conditions',
		'label' => __( 'WordPress conditions', 'myplugin' ),
	);

	return $groups;
}
add_filter( 'bricks/conditions/groups', __NAMESPACE__ . '\add_condition_group' );

// Instantiate the conditions.
new src\Is_Front_Page();
new src\Is_Home();
