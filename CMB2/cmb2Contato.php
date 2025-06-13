<?php

function contato() {
  $contato_box = new_cmb2_box([
    'id' => 'contato_box',
    'title' => 'Seção de Contato',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'contato.php',
    ]
  ]);

  $contato_box->add_field([
    'id' => 'contato_titulo_l1',
    'name' => esc_html__('Primeira linha do título da seção contato', 'cmb2'),
    'desc' => esc_html__('Primeiro e maior título na seção contato (linha 1)', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'contato_titulo_l2',
    'name' => esc_html__('Segunda linha do título da seção contato', 'cmb2'),
    'desc' => esc_html__('Primeiro e maior título na seção contato (linha 2)', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'contato_subtitulo',
    'name' => esc_html__('Primeira parte do subtítulo (cor branca)', 'cmb2'),
    'desc' => esc_html__('Segundo título na seção contato (subtítulo)', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'contato_subtitulo_azul',
    'name' => esc_html__('Segunda parte do subtítulo (cor azul)', 'cmb2'),
    'desc' => esc_html__('Segundo título na seção contato (subtítulo)', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'label_nome',
    'name' => esc_html__('Nome do rótulo do campo "Nome" do formulario', 'cmb2'),
    'desc' => esc_html__('O texto que fica em cima de onde se digita', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'placeholder_nome',
    'name' => esc_html__('Dica do que se deve fazer/digitar', 'cmb2'),
    'desc' => esc_html__('Coloque algo como "Informe seu nome"', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'label_email',
    'name' => esc_html__('Nome do rótulo do campo "email" do formulario', 'cmb2'),
    'desc' => esc_html__('O texto que fica em cima de onde se digita', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'placeholder_email',
    'name' => esc_html__('Dica do que se deve fazer/digitar', 'cmb2'),
    'desc' => esc_html__('Coloque algo como "Informe seu email"', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'label_celular',
    'name' => esc_html__('Nome do rótulo do campo "celular" do formulario', 'cmb2'),
    'desc' => esc_html__('O texto que fica em cima de onde se digita', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'placeholder_celular',
    'name' => esc_html__('Dica do que se deve fazer/digitar', 'cmb2'),
    'desc' => esc_html__('Coloque algo como "Informe seu celular"', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'label_mensagem',
    'name' => esc_html__('Nome do rótulo do campo "mensagem" do formulario', 'cmb2'),
    'desc' => esc_html__('O texto que fica em cima de onde se digita', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'placeholder_mensagem',
    'name' => esc_html__('Dica do que se deve fazer/digitar', 'cmb2'),
    'desc' => esc_html__('Coloque algo como "Digite uma mensagem"', 'cmb2'),
    'type' => 'text',
  ]);

  $contato_box->add_field([
    'id' => 'texto_botao',
    'name' => esc_html__('Texto do botão para enviar o formulário', 'cmb2'),
    'desc' => esc_html__('Coloque algo curto, como "Enviar"', 'cmb2'),
    'type' => 'text',
  ]);
}

add_action('cmb2_admin_init', 'contato');
?>
