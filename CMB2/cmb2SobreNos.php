<?php

function sobre_nos_hero() {
  $sobre_nos_hero_box = new_cmb2_box([
    'id' => 'sobre_nos_hero_box',
    'title' => 'Hero',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'SobreNos.php',
    ]
  ]);

  $sobre_nos_hero_box->add_field([
    'id' => 'sobre_nos_hero_background_image',
    'name' => esc_html__('Imagem de Fundo', 'cmb2'),
    'desc' => esc_html__('Imagem de fundo da seção hero', 'cmb2'),
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Selecionar imagem de fundo',
    ],
    'query_args' => [
      'type' => [
        'image/jpeg',
        'image/png',
        'image/webp',
      ]
    ]
  ]);

  $sobre_nos_hero_box->add_field([
    'id' => 'sobre_nos_hero_title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Primeiro e maior texto na seção inicial', 'cmb2'),
    'type' => 'textarea_small',
  ]);

  $sobre_nos_hero_box->add_field([
    'id' => 'sobre_nos_hero_description',
    'name' => esc_html__('Descrição', 'cmb2'),
    'desc' => esc_html__('Texto descritivo logo abaixo o título da seção', 'cmb2'),
    'type' => 'textarea_small',
  ]);
}

function sobre_nos_founders() {
  $sobre_nos_founders_box = new_cmb2_box([
    'id' => 'sobre_nos_founders_box',
    'title' => 'Fundadores',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'SobreNos.php',
    ]
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Título da seção Fundadores', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_founder',
    'name' => esc_html__('Fundadora', 'cmb2'),
    'type' => 'title',
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_founder_photo',
    'name' => esc_html__('Foto da fundadora', 'cmb2'),
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

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_founder_name',
    'name' => esc_html__('Nome', 'cmb2'),
    'desc' => esc_html__('Nome exibido no topo do card', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_founder_description',
    'name' => esc_html__('Descrição', 'cmb2'),
    'desc' => esc_html__('Descrição no corpo do card', 'cmb2'),
    'type' => 'textarea',
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_co_founder',
    'name' => esc_html__('Co-fundador', 'cmb2'),
    'type' => 'title',
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_co_founder_photo',
    'name' => esc_html__('Foto do co-fundador', 'cmb2'),
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

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_co_founder_name',
    'name' => esc_html__('Nome', 'cmb2'),
    'desc' => esc_html__('Nome exibido no topo do card', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_founders_box->add_field([
    'id' => 'sobre_nos_founders_co_founder_description',
    'name' => esc_html__('Descrição', 'cmb2'),
    'desc' => esc_html__('Descrição no corpo do card', 'cmb2'),
    'type' => 'textarea',
  ]);
}

function sobre_nos_how_the_work() {
  $sobre_nos_how_the_work_box = new_cmb2_box([
    'id' => 'sobre_nos_how_the_work_box',
    'title' => 'Como trabalhamos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'SobreNos.php',
    ]
  ]);

  $sobre_nos_how_the_work_box->add_field([
    'id' => 'sobre_nos_how_the_work_title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Título da seção "Como Trabalhamos"', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_how_the_work_cards = $sobre_nos_how_the_work_box->add_field([
    'id' => 'sobre_nos_how_the_work_cards',
    'name' => esc_html__('Cards', 'cmb2'),
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => '{#}º Card',
      'add_button' => 'Adicionar novo card',
      'remove_button' => 'Remover card',
      'sortable' => true,
    ]
  ]);

  $sobre_nos_how_the_work_box->add_group_field($sobre_nos_how_the_work_cards, [
    'id' => 'title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Título exibido no topo do card', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_how_the_work_box->add_group_field($sobre_nos_how_the_work_cards, [
    'id' => 'description',
    'name' => esc_html__('Descrição', 'cmb2'),
    'desc' => esc_html__('Descrição no corpo do card', 'cmb2'),
    'type' => 'text',
  ]);

  $sobre_nos_how_the_work_box->add_field([
    'id' => 'sobre_nos_how_the_work_button',
    'name' => esc_html__('Botão de ação', 'cmb2'),
    'desc' => esc_html__('Texto exibido no botão de ação da seção', 'cmb2'),
    'type' => 'text_medium',
  ]);
}

function sobre_nos_who_we_are() {
  $sobre_nos_who_we_are_box = new_cmb2_box([
    'id' => 'sobre_nos_who_we_are_box',
    'title' => 'Quem somos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'SobreNos.php',
    ]
  ]);

  $sobre_nos_who_we_are_box->add_field([
    'id' => 'sobre_nos_who_we_are_title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Título da seção "Quem somos"', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_who_we_are_box->add_field([
    'id' => 'sobre_nos_who_we_are_text',
    'name' => esc_html__('Texto inicial', 'cmb2'),
    'desc' => esc_html__('Texto exibido logo após o título "Quem somos"', 'cmb2'),
    'type' => 'textarea',
  ]);
}

function sobre_nos_who_we_are_mvv() {
  $sobre_nos_who_we_are_mvv_box = new_cmb2_box([
    'id' => 'sobre_nos_who_we_are_mvv_box',
    'title' => 'MIssão valores',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'SobreNos.php',
    ]
  ]);

  $sobre_nos_who_we_are_mvv_box->add_field([
    'id' => 'sobre_nos_who_we_are_mvv_title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Título da seção MVV', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_who_we_are_mvv_box->add_field([
    'id' => 'sobre_nos_who_we_are_mvv_logo',
    'name' => esc_html__('Logo', 'cmb2'),
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

  $sobre_nos_who_we_are_mvv_cards = $sobre_nos_who_we_are_mvv_box->add_field([
    'id' => 'sobre_nos_who_we_are_mvv_cards',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => '{#}º Card',
      'add_button' => 'Adicionar novo card',
      'remove_button' => 'Remover card',
      'sortable' => true,
    ]
  ]);

  $sobre_nos_who_we_are_mvv_box->add_group_field($sobre_nos_who_we_are_mvv_cards, [
    'id' => 'title',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Título exibido no topo do card', 'cmb2'),
    'type' => 'text_medium',
  ]);

  $sobre_nos_who_we_are_mvv_box->add_group_field($sobre_nos_who_we_are_mvv_cards, [
    'id' => 'description',
    'name' => esc_html__('Descrição', 'cmb2'),
    'desc' => esc_html__('Descrição no corpo do card', 'cmb2'),
    'type' => 'textarea_small',
  ]);
}

function sobre_nos_end_message() {
  $sobre_nos_end_message_box = new_cmb2_box([
    'id' => 'sobre_nos_end_message_box',
    'title' => 'Mensagem final',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'SobreNos.php',
    ]
  ]);

  $sobre_nos_end_message_box->add_field([
    'id' => 'sobre_nos_end_message',
    'name' => esc_html__('Mensagem final, logo antes da seção de contato', 'cmb2'),
    'type' => 'title',
  ]);

  $sobre_nos_end_message_box->add_field([
    'id' => 'sobre_nos_end_message_top',
    'name' => esc_html__('Texto superior', 'cmb2'),
    'desc' => esc_html__('Texto superior com letras finas', 'cmb2'),
    'type' => 'text',
  ]);

  $sobre_nos_end_message_box->add_field([
    'id' => 'sobre_nos_end_message_bottom',
    'name' => esc_html__('Texto inferior', 'cmb2'),
    'desc' => esc_html__('Texto inferior com letras em negrito', 'cmb2'),
    'type' => 'text',
  ]);
}

add_action('cmb2_admin_init', 'sobre_nos_hero');
add_action('cmb2_admin_init', 'sobre_nos_founders');
add_action('cmb2_admin_init', 'sobre_nos_how_the_work');
add_action('cmb2_admin_init', 'sobre_nos_who_we_are');
add_action('cmb2_admin_init', 'sobre_nos_who_we_are_mvv');
add_action('cmb2_admin_init', 'sobre_nos_end_message');

?>
