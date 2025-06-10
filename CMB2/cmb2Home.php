<?php

function general() {
  $general_box = new_cmb2_box([
    'id' => 'general_box',
    'title' => 'Geral',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'HTML/Home.php',
    ]
  ]);

  $general_box->add_field([
    'id' => 'logo_assertive',
    'name' => esc_html__('Logo Assertive'),
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Selecionar foto',
    ],
    'query_args' => [
      'type' => [
        'image/jpeg',
        'image/png',
        'image/sgv',
      ]
    ]
  ]);

  $general_box->add_field([
    'id' => 'map_preview',
    'name' => esc_html__('Imagem do mapa'),
    'desc' => esc_html__('Imagem de um mapa que informe a localização da empresa'),
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Selecionar foto',
    ],
    'query_args' => [
      'type' => [
        'image/jpeg',
        'image/png',
      ]
    ]
  ]);
}

add_action('cmb2_admin_init', 'general');

?>
