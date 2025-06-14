<?php

require_once( dirname(__FILE__) . '/CMB2/cmb2SobreNos.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2Home.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2Contato.php' );

function assertive_css() {
  wp_register_style( 'assertive-style', get_template_directory_uri() . '/style.css', array(), false, false );

  wp_enqueue_style( 'assertive-style' );
}

function assertive_scripts() {
  wp_register_script( 'assertive-contato-script', get_template_directory_uri() . '/JS/Contato.js', array(), false, true );
  wp_register_script( 'assertive-header-footer-script', get_template_directory_uri() . '/JS/header-footer.js', array(), false, true );
  wp_register_script( 'assertive-sobreNos-script', get_template_directory_uri() . '/JS/sobreNos.js', array(), false, true );

  wp_enqueue_script( 'assertive-contato-script' );
  wp_enqueue_script( 'assertive-header-footer-script' );
  wp_enqueue_script( 'assertive-sobreNos-script' );
}

function get_field($field, $page = NULL, $unique = true) {
  $page = is_null($page) ? get_the_ID() : $page;
  return get_post_meta($page, $field, $unique);
}

function the_field($field, $page = NULL, $unique = true) {
  $page = is_null($page) ? get_the_ID() : $page;
  echo get_field($field, $page);
}

function get_field_array( string $field, $page = null ): array {
    $page = is_null( $page ) ? get_the_ID() : $page;
    $values = get_post_meta( $page, $field, false );

    return is_array( $values ) ? $values : [];
}

function get_field_group( string $field, $page = null ): array {
    $page = is_null( $page ) ? get_the_ID() : $page;
    // true no 3º argumento faz retornar o array de items do group
    $group = get_post_meta( $page, $field, true );

    // Se ainda for string serializada, deserializa
    if ( is_string( $group ) ) {
        $maybe = maybe_unserialize( $group );
        $group = is_array( $maybe ) ? $maybe : [];
    }

    return is_array( $group ) ? $group : [];
}

add_action( 'wp_enqueue_scripts', 'assertive_css' );
add_action( 'wp_enqueue_scripts', 'assertive_scripts' );

/*
Parte Renan
*/

/*
Parte JH
*/

/*
Parte Murillo
*/

?>
