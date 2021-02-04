<?php
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
require 'inc/woocommerce/storefront-woocommerce-template-functions.php';


function iahsp_register_widgets() {

}
add_action( 'widgets_init', 'iahsp_register_widgets' );


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => __( 'IAHSP Footer Area', 'iahsp' ),
    'id' => 'iahsp-footer-area',
    'before_widget' => '<div class = "iahsp-footer-area">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
