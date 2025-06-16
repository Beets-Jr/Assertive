<?php
add_action('cmb2_admin_init', 'cmb2_fields_prospeccao');

function cmb2_fields_prospeccao() {

    $cmb = new_cmb2_box([
        'id'           => 'prospeccao_fields',
        'title'        => 'Conteúdo da Página Prospecção',
        'object_types' => ['page'],
        'show_on'      => ['key' => 'page-template', 'value' => 'page-prospeccao.php'],
    ]);

    // Hero
    $cmb->add_field([
        'name' => 'Título Hero',
        'id'   => 'hero_titulo',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição Hero',
        'id'   => 'hero_descricao',
        'type' => 'textarea',
    ]);

    $cmb->add_field([
        'name' => 'Texto do Botão Hero',
        'id'   => 'hero_botao_texto',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name'    => 'Imagem da Hero',
        'id'      => 'hero_imagem',
        'type'    => 'file',
        'options' => [
            'url' => true, 
        ],
        'text'    => [
            'add_upload_file_text' => 'Selecionar/Enviar Imagem da Hero',
        ],
        'query_args' => [
            'type' => ['image/jpeg', 'image/png', 'image/gif'],
        ],
    ]);

    // Bloco 1
    $cmb->add_field([
        'name' => 'Imagem Bloco 1',
        'id'   => 'imagem_1',
        'type' => 'file',
    ]);

    $cmb->add_field([
        'name' => 'Título Bloco 1',
        'id'   => 'titulo_bloco_1',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Texto Bloco 1',
        'id'   => 'texto_bloco_1',
        'type' => 'textarea',
    ]);

    // Bloco 2
    $cmb->add_field([
        'name' => 'Título Bloco 2',
        'id'   => 'titulo_bloco_2',
        'type' => 'text',
    ]);

    $cmb->add_field([
    'name' => 'Texto Bloco 2',
    'id'   => 'texto_bloco_2',
    'type' => 'wysiwyg',
    'options' => [
        'media_buttons' => false,
        'teeny'         => true,
        // outras opções do editor, se quiser
    ],
]);

    $cmb->add_field([
        'name' => 'Imagem Bloco 2',
        'id'   => 'imagem_2',
        'type' => 'file',
    ]);

    $cmb->add_field([
        'name' => 'Imagem Bloco 3',
        'id'   => 'imagem_3',
        'type' => 'file',
    ]);

    // Bloco 3
    $cmb->add_field([
    'name' => 'Texto Bloco 3',
    'id'   => 'texto_bloco_3',
    'type' => 'textarea',
    ]);

    $cmb->add_field([
        'name' => 'Título Bloco 3',
        'id'   => 'titulo_bloco_3',
        'type' => 'text',
    ]);

    $cmb->add_field([
       'name' => 'Texto Bloco 3',
        'id'   => 'texto_bloco_3',
        'type' => 'textarea',
    ]);

    // Banner
    $cmb->add_field([
        'name' => 'Título do Banner',
        'id'   => 'titulo_banner',
        'type' => 'text',
    ]);

    // Etapas
    for ($i = 1; $i <= 4; $i++) {
        $cmb->add_field([
            'name' => "Etapa $i - Título",
            'id'   => "etapa_{$i}_titulo",
            'type' => 'text',
        ]);

        $cmb->add_field([
            'name' => "Etapa $i - Descrição",
            'id'   => "etapa_{$i}_descricao",
            'type' => 'textarea',
        ]);
    }

}
