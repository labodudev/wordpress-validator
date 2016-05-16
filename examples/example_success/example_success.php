<?php
/**
 * Plugin Name: Example Success
 * Plugin URI:
 * Description: An example with wordpress-validator
 * Version: 1.0.0
 * Author: labodudev
 * Author URI: http://labodudev.fr
 * Requires at least: 4.1
 * Tested up to: 4.4
 */
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'wp_ajax_add_github', 'ajax_add_github' );

function ajax_add_github() {
  // Check nonce
  $_wpnonce = sanitize_key( $_POST['_wpnonce'] );
  if ( wp_verify_nonce( $_wpnonce, 'ajax_add_github' ) )
    wp_send_json_error();

  // Securize email
  $email = sanitize_email( $_POST['email'] );

  wp_send_json_success( array( 'All data is securized!' ) );
}

?>
