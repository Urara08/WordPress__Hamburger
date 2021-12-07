<?php function _script() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/Scss/common.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
