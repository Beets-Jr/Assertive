<?php

function home_cards() {
  $home_cards_box = new_cmb2_box([
    'id' => 'servicos_box',
    'title' => 'Cards Serviços',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  $home_cards_box->add_field([
    'id' => 'cards_titulo',
    'name' => esc_html__('Título', 'cmb2'),
    'desc' => esc_html__('Primeiro e maior título na seção serviços', 'cmb2'),
    'type' => 'text',
  ]);

  $home_cards_box->add_field([
    'id' => 'cards_subtitulo',
    'name' => esc_html__('Subtítulo', 'cmb2'),
    'desc' => esc_html__('Segundo título (subtítulo) na seção serviços', 'cmb2'),
    'type' => 'text',
  ]);

  $home_cards_box->add_field([
    'id' => 'titulo_card_1',
    'name' => esc_html__('Título do Card 1', 'cmb2'),
    'desc' => esc_html__('Título do card mais à ESQUERDA, primeira fileira', 'cmb2'),
    'type' => 'text',
  ]);

  $home_cards_box->add_field([
    'id' => 'texto_card_1',
    'name' => esc_html__('Texto do Card 1', 'cmb2'),
    'desc' => esc_html__('Texto do card mais à ESQUERDA, primeira fileira', 'cmb2'),
    'type' => 'textarea_small',
  ]);

  $home_cards_box->add_field([
    'id' => 'titulo_card_2',
    'name' => esc_html__('Título do Card 2', 'cmb2'),
    'desc' => esc_html__('Título do card mais à DIREITA, primeira fileira', 'cmb2'),
    'type' => 'text',
  ]);

  $home_cards_box->add_field([
    'id' => 'texto_card_2',
    'name' => esc_html__('Texto do Card 2', 'cmb2'),
    'desc' => esc_html__('Texto do card mais à DIREITA, primeira fileira', 'cmb2'),
    'type' => 'textarea_small',
  ]);

  $home_cards_box->add_field([
    'id' => 'titulo_card_3',
    'name' => esc_html__('Título do Card 3', 'cmb2'),
    'desc' => esc_html__('Título do card de baixo', 'cmb2'),
    'type' => 'text',
  ]);

  $home_cards_box->add_field([
    'id' => 'texto_card_3',
    'name' => esc_html__('Texto do Card 3', 'cmb2'),
    'desc' => esc_html__('Texto do card de baixo', 'cmb2'),
    'type' => 'textarea_small',
  ]);

  // CARACTERISTICAS CARD 1
  $caracteristicas1 = $home_cards_box->add_field([
    'name' => 'Caracteristicas card 1',
    'id' => 'caracteristicas1',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Característica {#}',
      'add_button' => 'Adicionar característica',
      'sortable' => true,
    ]
  ]);

  $home_cards_box->add_group_field($caracteristicas1, [
    'name' => 'Nome',
    'id' => 'caracteristica_nome',
    'type' => 'text',
  ]);

  // CARACTERISTICAS CARD 2

  $caracteristicas2 = $home_cards_box->add_field([
    'name' => 'Caracteristicas card 2',
    'id' => 'caracteristicas2',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Característica {#}',
      'add_button' => 'Adicionar característica',
      'sortable' => true,
    ]
  ]);

  $home_cards_box->add_group_field($caracteristicas2, [
    'name' => 'Nome',
    'id' => 'caracteristica_nome',
    'type' => 'text',
  ]);

  // CARACTERISTICAS CARD 3
  $caracteristicas3 = $home_cards_box->add_field([
    'name' => 'Caracteristicas card 3',
    'id' => 'caracteristicas3',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Característica {#}',
      'add_button' => 'Adicionar característica',
      'sortable' => true,
    ]
  ]);

  $home_cards_box->add_group_field($caracteristicas3, [
    'name' => 'Nome',
    'id' => 'caracteristica_nome',
    'type' => 'text',
  ]);

}

add_action('cmb2_admin_init', 'home_cards');
?>