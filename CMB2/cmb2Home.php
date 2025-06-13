<?php

// SEÇÃO SERVIÇOS
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
    'id' => 'texto_card_tras_1',
    'name' => esc_html__('Texto de trás do Card 1', 'cmb2'),
    'desc' => esc_html__('Texto de trás do card mais à ESQUERDA, primeira fileira', 'cmb2'),
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
    'id' => 'texto_card_tras_2',
    'name' => esc_html__('Texto de trás do Card 2', 'cmb2'),
    'desc' => esc_html__('Texto de trás do card mais à DIREITA, primeira fileira', 'cmb2'),
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

  $home_cards_box->add_field([
    'id' => 'texto_card_tras_3',
    'name' => esc_html__('Texto de trás do Card 3', 'cmb2'),
    'desc' => esc_html__('Texto de trás do card de baixo', 'cmb2'),
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
      'remove_button' => 'Remover característica',
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
      'remove_button' => 'Remover característica',
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
      'remove_button' => 'Remover característica',
      'sortable' => true,
    ]
  ]);

  $home_cards_box->add_group_field($caracteristicas3, [
    'name' => 'Nome',
    'id' => 'caracteristica_nome',
    'type' => 'text',
  ]);

}

// END SEÇÃO SERVIÇOS

// Seção HERO

function hero_home() {
  $hero_home_box = new_cmb2_box([
    'id' => 'hero_home_box',
    'title' => 'Primeira seção da página',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  $hero_home_box->add_field([
    'id' => 'hero_titulo_l1',
    'name' => esc_html__('Título da seção', 'cmb2'),
    'desc' => esc_html__('Primeiro e maior título na seção', 'cmb2'),
    'type' => 'text',
  ]);

  $hero_home_box->add_field([
    'id' => 'hero_subtitulo',
    'name' => esc_html__('Subtítulo da primeira seção', 'cmb2'),
    'desc' => esc_html__('IMPORTANTE: Coloque no máximo 7-8 palavras por linha', 'cmb2'),
    'type' => 'textarea_small',
    'options' => array(
    'textarea_rows' => 3,
    'wpautop'       => true,
    'media_buttons'=> false,
    'teeny'         => true,
    ),
  ]);

  $hero_home_box->add_field([
    'id' => 'texto_botao',
    'name' => esc_html__('Texto do botão', 'cmb2'),
    'desc' => esc_html__('Coloque algo curto, como "Comece Agora!"', 'cmb2'),
    'type' => 'text',
  ]);

  $hero_home_box->add_field( array(
    'name'       => 'Vídeo de Fundo',
    'id'         => 'hero_video',
    'type'       => 'file',
    'options'    => array(
      'url' => false,
    ),
    'query_args' => array(
      'type' => array(
        'video/mp4',
        'video/ogg',
        'video/webm',
      ),
    ),
    'attributes' => array(
      'accept' => 'video/*',
    ),
    'text'       => array(
      'add_upload_file_text' => 'Selecionar Vídeo' 
    ),
  ));

}

function videoap_home() {
  $videoap_home_box = new_cmb2_box([
    'id' => 'videoap_home_box',
    'title' => 'Seção com o vídeo de apresentação',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);
  
  $videoap_home_box->add_field( array(
    'name'       => 'Vídeo de Apresentação',
    'id'         => 'video_apresentacao',
    'type'       => 'file',
    'options'    => array(
      'url' => false,
    ),
    'query_args' => array(
      'type' => array(
        'video/mp4',
        'video/ogg',
        'video/webm',
      ),
    ),
    'attributes' => array(
      'accept' => 'video/*',
    ),
    'text'       => array(
      'add_upload_file_text' => 'Selecionar Vídeo' 
    ),
  ));
}

function segmentos_home(){
  $home_segmentos_box = new_cmb2_box([
    'id' => 'segmentos_box',
    'title' => 'Seção Segmentos Atendidos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  $home_segmentos_box->add_field([
    'id' => 'titulo_secao_segmentos',
    'name' => esc_html__('Título da Seção', 'cmb2'),
    'desc' => esc_html__('Primeiro texto que aparece, acima dos cards', 'cmb2'),
    'type' => 'text',
  ]);

  $cards_segmentos = $home_segmentos_box->add_field([
    'name' => 'Cards Segmentos Atendidos',
    'id' => 'cards_segmentos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Card {#}',
      'add_button' => 'Adicionar Card',
      'remove_button' => 'Remover Card',
      'sortable' => true,
    ]
  ]);

  $home_segmentos_box->add_group_field($cards_segmentos, [
    'name' => 'Título Card da frente',
    'id' => 'front_card_title',
    'type' => 'text',
  ]);

  $home_segmentos_box->add_group_field($cards_segmentos, [
    'name' => 'Texto Card da frente',
    'id' => 'front_card_text',
    'type' => 'textarea_small',
  ]);

  $home_segmentos_box->add_group_field($cards_segmentos, [
    'name' => 'Título Card de trás',
    'id' => 'back_card_title',
    'type' => 'text',
  ]);

  $home_segmentos_box->add_group_field($cards_segmentos, [
    'name' => 'Texto Card de trás',
    'id' => 'back_card_text',
    'type' => 'textarea_small',
  ]);
}

function numeros_home(){
  $home_numeros_box = new_cmb2_box([
    'id' => 'numeros_home_box',
    'title' => 'Números',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  $home_numeros_box->add_field([
    'id' => 'titulo_numero1',
    'name' => esc_html__('Título do primeiro número', 'cmb2'),
    'desc' => esc_html__('Texto que fica embaixo do número (do que se trata esse número)', 'cmb2'),
    'type' => 'text',
  ]);

  $home_numeros_box->add_field([
    'id' => 'valor_numero1',
    'name' => esc_html__('Valor do número', 'cmb2'),
    'desc' => esc_html__('Insira alguma quantidade', 'cmb2'),
    'type' => 'text',
  ]);

  $home_numeros_box->add_field([
    'id' => 'titulo_numero2',
    'name' => esc_html__('Título do segundo número', 'cmb2'),
    'desc' => esc_html__('Texto que fica embaixo do número (do que se trata esse número)', 'cmb2'),
    'type' => 'text',
  ]);

  $home_numeros_box->add_field([
    'id' => 'valor_numero2',
    'name' => esc_html__('Valor do número', 'cmb2'),
    'desc' => esc_html__('Insira alguma quantidade', 'cmb2'),
    'type' => 'text',
  ]);

  $home_numeros_box->add_field([
    'id' => 'titulo_numero3',
    'name' => esc_html__('Título do terceiro número', 'cmb2'),
    'desc' => esc_html__('Texto que fica embaixo do número (do que se trata esse número)', 'cmb2'),
    'type' => 'text',
  ]);

 $home_numeros_box->add_field([
    'id' => 'valor_numero3',
    'name' => esc_html__('Valor do número', 'cmb2'),
    'desc' => esc_html__('Insira alguma quantidade', 'cmb2'),
    'type' => 'text',
  ]);
}

add_action('cmb2_admin_init', 'hero_home');
add_action('cmb2_admin_init', 'videoap_home');
add_action('cmb2_admin_init', 'home_cards');
add_action('cmb2_admin_init', 'segmentos_home');
add_action('cmb2_admin_init', 'numeros_home');
?>
