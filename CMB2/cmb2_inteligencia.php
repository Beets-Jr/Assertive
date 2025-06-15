<?php

function fields_inteligencia_hero() {
   $inteligencia_hero_box = new_cmb2_box([
        'id' => 'inteligencia_hero_box',
        'title' => 'Inteligência de Mercado - Início',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'page-inteligencia.php'
        ],
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

     $inteligencia_hero_box->add_field([
        'name' => 'Imagem de Entrada',
        'desc' => 'Imagem principal do topo da página, por padrão completa a foto com um padrão de degradê azul-escuro à esquerda que é editável
        para que o usuário possa ajustar para outras fotos.',
        'id' => 'imagem_hero',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $inteligencia_hero_box->add_field([
        'name' => 'Cor sobre a imagem da Hero 1',
        'desc' => 'Primeira cor (começo) do degradê sobre a imagem da Hero, que inicia na esquerda e vai para a direita. Padrão: #02052F',
        'id' => 'cor_imagem_hero_1',
        'type' => 'colorpicker',
        'default' => '#02052F',
        'options' => [
            'alpha' => true,
        ],
    ]);

    $inteligencia_hero_box->add_field([
        'name' => 'Cor sobre a imagem da Hero 2',
        'desc' => 'Segunda cor (final) do degradê sobre a imagem da Hero, que inicia na esquerda e vai para a direita. Padrão: #06090E',
        'id' => 'cor_imagem_hero_2',
        'type' => 'colorpicker',
        'default' => '#06090E',
        'options' => [
            'alpha' => true,
        ],
    ]);

    $inteligencia_hero_box->add_field([
        'name'    => 'Posição da segunda cor no gradiente / degradê (%)',
        'desc'    => 'Escolha onde a segunda cor começa a aparecer no gradiente (0% a 100%)',
        'id'      => 'posicao_cor_imagem_hero',
        'type'    => 'text',
        'attributes' => [
            'type'  => 'range',
            'min'   => 0,
            'max'   => 100,
            'step'  => 1,
        ],
        'default' => '20',
    ]);
}

function fields_inteligencia_sobre() {
   $inteligencia_sobre_box = new_cmb2_box([
        'id' => 'inteligencia_sobre_box',
        'title' => 'Inteligência de Mercado - Breves Detalhes',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'page-inteligencia.php'
        ]
    ]);
    
    $inteligencia_sobre_box->add_field([
        'name' => 'Título do primeiro quadro',
        'desc' => 'Frase dentro da primeira caixa azul da esquerda para a direita',
        'id' => 'titulo_1st_sqr',
        'type' => 'text',    
    ]);

    $inteligencia_sobre_box->add_field([
        'name' => 'Texto do primeiro quadro',
        'desc' => 'Descrição abaixo da primeira caixa azul da esquerda para a direita',
        'id' => 'texto_sqr_1',
        'type' => 'textarea_small',    
    ]);

    $inteligencia_sobre_box->add_field([
        'name' => 'Título do segundo quadro',
        'desc' => 'Frase dentro da segunda caixa azul da esquerda para a direita',
        'id' => 'titulo_2nd_sqr',
        'type' => 'text',    
    ]);

    $inteligencia_sobre_box->add_field([
        'name' => 'Texto do segundo quadro',
        'desc' => 'Descrição abaixo da segunda caixa azul da esquerda para a direita',
        'id' => 'texto_sqr_2',
        'type' => 'textarea_small',    
    ]);

    $inteligencia_sobre_box->add_field([
        'name' => 'Título do terceiro quadro',
        'desc' => 'Frase dentro da terceira caixa azul da esquerda para a direita',
        'id' => 'titulo_3rd_sqr',
        'type' => 'text',    
    ]);

    $inteligencia_sobre_box->add_field([
        'name' => 'Texto do terceiro quadro',
        'desc' => 'Descrição abaixo da terceira caixa azul da esquerda para a direita',
        'id' => 'texto_sqr_3',
        'type' => 'textarea_small',    
    ]);

}

function fields_inteligencia_funcoes() {
   $inteligencia_funcoes_box = new_cmb2_box([
        'id' => 'inteligencia_funcoes_box',
        'title' => 'Inteligência de Mercado - Principais Funções',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'page-inteligencia.php'
        ]
    ]);
    
    $inteligencia_funcoes_box->add_field([
        'name' => 'Título Principal',
        'desc' => 'Frase de fonte grande na caixa azul do topo',
        'id' => 'titulo_funcoes',
        'type' => 'text',
        'default' => 'Principais Funções da Inteligência de Mercado',    
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Imagem de Fundo',
        'desc' => 'Imagem no fundo da seção de principais funções.',
        'id' => 'imagem_funcoes',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Definição Chamativa / Título - Caixa 1',
        'desc' => 'Frase destacada posicionada após a flecha no topo da primeira caixa.',
        'id' => 'frase_funcoes_1',
        'type' => 'text',    
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Descrição - Caixa 1',
        'desc' => 'Texto de descrição e detalhes dentro da primeira caixa.',
        'id' => 'texto_funcoes_1',
        'type' => 'textarea_small',    
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Definição Chamativa / Título - Caixa 2',
        'desc' => 'Frase destacada posicionada após a flecha no topo da segunda caixa.',
        'id' => 'frase_funcoes_2',
        'type' => 'text',    
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Descrição - Caixa 2',
        'desc' => 'Texto de descrição e detalhes dentro da segunda caixa.',
        'id' => 'texto_funcoes_2',
        'type' => 'textarea_small',    
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Definição Chamativa / Título - Caixa 3',
        'desc' => 'Frase destacada posicionada após a flecha no topo da terceira caixa.',
        'id' => 'frase_funcoes_3',
        'type' => 'text',    
    ]);

    $inteligencia_funcoes_box->add_field([
        'name' => 'Descrição - Caixa 3',
        'desc' => 'Texto de descrição e detalhes dentro da terceira caixa.',
        'id' => 'texto_funcoes_3',
        'type' => 'textarea_small',    
    ]);

}

function fields_inteligencia_etapas() {
   $inteligencia_etapas_box = new_cmb2_box([
        'id' => 'inteligencia_etapas_box',
        'title' => 'Inteligência de Mercado - Principais Etapas',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'page-inteligencia.php'
        ]
    ]);
    
    $inteligencia_etapas_box->add_field([
        'name' => 'Título Principal',
        'desc' => 'Frase de fonte grande no topo da seção',
        'id' => 'titulo_etapas',
        'type' => 'text',
        'default' => 'Como funciona o serviço',    
    ]);

    $inteligencia_etapas_box->add_field([
        'name' => 'Título - Etapa 1',
        'desc' => 'Frase de destaque referente ao passo 1.',
        'id' => 'titulo_etapa_1',
        'type' => 'text',
        'default' => 'Análise de concorrentes',    
    ]);

    $inteligencia_etapas_box->add_field([
        'name' => 'Descrição - Etapa 1',
        'desc' => 'Texto abaixo do título na etapa 1.',
        'id' => 'texto_etapa_1',
        'type' => 'textarea_small',    
    ]);

    $inteligencia_etapas_box->add_field([
        'name' => 'Título - Etapa 2',
        'desc' => 'Frase de destaque referente ao passo 2.',
        'id' => 'titulo_etapa_2',
        'type' => 'text',
        'default' => 'Análise Territorial',    
    ]);

    $inteligencia_etapas_box->add_field([
        'name' => 'Descrição - Etapa 2',
        'desc' => 'Texto abaixo do título na etapa 2.',
        'id' => 'texto_etapa_2',
        'type' => 'textarea_small',    
    ]);

    $inteligencia_etapas_box->add_field([
        'name' => 'Título - Etapa 3',
        'desc' => 'Frase de destaque referente ao passo 3.',
        'id' => 'titulo_etapa_3',
        'type' => 'text',
        'default' => 'Share de mercado',    
    ]);

    $inteligencia_etapas_box->add_field([
        'name' => 'Descrição - Etapa 3',
        'desc' => 'Texto abaixo do título na etapa 3.',
        'id' => 'texto_etapa_3',
        'type' => 'textarea_small',    
    ]);
}

add_action ('cmb2_admin_init', 'fields_inteligencia_hero');
add_action ('cmb2_admin_init', 'fields_inteligencia_sobre');
add_action ('cmb2_admin_init', 'fields_inteligencia_funcoes');
add_action ('cmb2_admin_init', 'fields_inteligencia_etapas');



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

add_action('wp_enqueue_scripts', 'inteligencia_de_mercado_styles');
add_action('wp_enqueue_scripts', 'inteligencia_de_mercado_scripts');

?>