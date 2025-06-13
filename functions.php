<?php

require_once( dirname(__FILE__) . '/CMB2/cmb2SobreNos.php' );

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

/* 
Parte Thales
*/

function cmb2_fields_header() {
    new_cmb2_box([
        'id' => 'header_box',
    ]);
}

function cmb2_fields_inteligencia_hero() {
   $inteligencia_hero_box = new_cmb2_box([
        'id' => 'inteligencia_hero_box',
        'title' => 'Inteligência de Mercado',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'page-inteligencia.php'
        ]
    ]);
    
    $inteligencia_hero_box->add_field([
        'name' => 'Título de Entrada',
        'id' => 'titulo',
        'type' => 'text',    
    ]);

    $inteligencia_hero_box->add_field([
        'name' => 'Frase de Chamada',
        'id' => 'chamada-hero',
        'type' => 'text',    
    ]);

    $inteligencia_hero_box->add_field([
        'name' => 'Frase de Chamada no Botão',
        'id' => 'chamada-hero-button',
        'type' => 'text',    
    ]);

}

add_action ('cmb2_admin_init', 'cmb2_fields_header');
add_action ('cmb2_admin_init', 'cmb2_fields_inteligencia_hero');

function inteligencia_de_mercado_styles() {
    if (is_page_template('page-inteligencia.php')) {
        wp_enqueue_style (
            'inteligencia-de-mercado-style',
            get_stylesheet_directory_uri() . '/CSS/InteligenciaDeMercado.css',
            array(),
            '1.0'
        );
    }
}

function inteligencia_de_mercado_scripts() {
    if (is_page_template('page-inteligencia.php')) {
        wp_enqueue_script(
            'inteligencia-de-mercado-script',
            get_stylesheet_directory_uri() . '/JS/InteligenciaDeMercado.js',
            array(),
            '1.0',
            true
        );
    }
}

function header_footer_scripts() {
    wp_enqueue_script('header-footer', get_stylesheet_directory_uri() . '/JS/header-footer.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'inteligencia_de_mercado_styles');
add_action('wp_enqueue_scripts', 'inteligencia_de_mercado_scripts');
add_action('wp_enqueue_scripts', 'header_footer_scripts');

?>
