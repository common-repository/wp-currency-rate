<?php
/**
 *
 * @package   WP_Currency_Rate 
 * @author    dotcomdotbd
 * @license   GPL-2.0+
 * @link      http://systway.com
 * @copyright 2014 Team Systway
 *
 * @wordpress-plugin
 * Plugin Name: WP Currency Rate
 * Plugin URI:  http://systway.com
 * Description: It's Wordpress Currency Rate converter
 * Version:     1.0.0
 * Author:      dotcomdotbd
 * Author URI:  http://choyon.net
 * Text Domain: wp-currency-rate
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


require_once( plugin_dir_path( __FILE__ ) . 'class-wp-currency-rate.php' );
require_once( plugin_dir_path( __FILE__ ) . 'wp-currency-rate-widget.php' );

register_activation_hook( __FILE__, array( 'Wp_Currency_Rate', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Wp_Currency_Rate', 'deactivate' ) );


Wp_Currency_Rate::get_instance();