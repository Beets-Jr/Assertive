<?php
  function assertive_css() {
    wp_register_style( 'assertive-style', get_template_directory_uri() . '/style.css', array(), false, false );
    wp_enqueue_style( 'assertive-style' );
  }
  add_action( 'wp_enqueue_scripts', 'assertive_css' );

  function assertive_scripts() {
    wp_register_script( 'assertive-contato-script', get_template_directory_uri() . '/JS/Contato.js', array(), false, true );
    wp_register_script( 'assertive-header-footer-script', get_template_directory_uri() . '/JS/header-footer.js', array(), false, true );
    wp_register_script( 'assertive-sobreNos-script', get_template_directory_uri() . '/JS/sobreNos.js', array(), false, true );
  	wp_enqueue_script( 'assertive-contato-script' );
  	wp_enqueue_script( 'assertive-header-footer-script' );
  	wp_enqueue_script( 'assertive-sobreNos-script' );
  }
  add_action( 'wp_enqueue_scripts', 'assertive_scripts' );
?>
