<?php 

function fields_header_nav() {
   $header_box = new_cmb2_box([
        'id' => 'header_box',
        'title' => 'Header - Menu de Navegação',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'header-section.php'
        ]
    ]);
    
    $header_box->add_field([
        'name' => 'Logo Assertive',
        'id' => 'logo_header',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);

    $header_box->add_field([
        'name' => 'Primeiro Item',
        'id' => 'item_1',
        'type' => 'text',    
    ]);

    $header_box->add_field([
        'name' => 'Segundo Item',
        'id' => 'item_2',
        'type' => 'text',    
    ]);

    $header_box->add_field([
        'name' => 'Terceiro Item',
        'id' => 'item_3',
        'type' => 'text',    
    ]);

    $header_box->add_field([
        'name' => 'Quarto Item',
        'id' => 'item_4',
        'type' => 'text',    
    ]);
}

function fields_header_servicos() {
   $header_servicos_box = new_cmb2_box([
        'id' => 'header_servicos_box',
        'title' => 'Header - Serviços',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'header-section.php'
        ]
    ]);
    
    $header_servicos_box->add_field([
        'name' => 'Primeiro Serviço',
        'desc' => 'Nome do primeiro serviço, de cima para baixo, a aparecer no menu.',
        'id' => 'servico_1',
        'type' => 'text',    
    ]);

    $header_servicos_box->add_field([
        'name' => 'Segundo Serviço',
        'desc' => 'Nome do segundo serviço, de cima para baixo, a aparecer no menu.',
        'id' => 'servico_2',
        'type' => 'text',    
    ]);

    $header_servicos_box->add_field([
        'name' => 'Terceiro Serviço',
        'desc' => 'Nome do terceiro serviço, de cima para baixo, a aparecer no menu.',
        'id' => 'servico_3',
        'type' => 'text',    
    ]);
}

function fields_header_servicos_cards() {
   $header_cards_box = new_cmb2_box([
        'id' => 'header_cards_box',
        'title' => 'Cards de Serviços',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'header-section.php'
        ]
    ]);
    
    $header_cards_box->add_field([
        'name' => 'Título do Card 1',
        'desc' => 'Título do primeiro card que aparece na lista a partir do menu. É a mesma coisa que o nome do serviço.',
        'id' => 'servico_1',
        'type' => 'text',    
    ]);

    $header_cards_box->add_field([
        'name' => 'Texto do Card 1',
        'desc' => 'Texto descritivo do serviço no primeiro card que aparece na lista a partir do menu.',
        'id' => 'servico_texto_1',
        'type' => 'textarea_small',    
    ]);


    $header_cards_box->add_field([
        'name' => 'Frase de Chamada do Card 1',
        'desc' => 'Frase chamativa do primeiro card que aparece quando você passa o mouse por cima dele.',
        'id' => 'servico_texto_alt_1',
        'type' => 'textarea_small',    
    ]);

    $header_cards_box->add_field([
        'name' => 'Título do Card 2',
        'desc' => 'Título do segundo card que aparece na lista a partir do menu. É a mesma coisa que o nome do serviço.',
        'id' => 'servico_2',
        'type' => 'text',    
    ]);

    $header_cards_box->add_field([
        'name' => 'Texto do Card 2',
        'desc' => 'Texto descritivo do serviço no segundo card que aparece na lista a partir do menu.',
        'id' => 'servico_texto_2',
        'type' => 'textarea_small',    
    ]);


    $header_cards_box->add_field([
        'name' => 'Frase de Chamada do Card 2',
        'desc' => 'Frase chamativa do segundo card que aparece quando você passa o mouse por cima dele.',
        'id' => 'servico_texto_alt_2',
        'type' => 'textarea_small',    
    ]);

    $header_cards_box->add_field([
        'name' => 'Título do Card 3',
        'desc' => 'Título do terceiro card que aparece na lista a partir do menu. É a mesma coisa que o nome do serviço.',
        'id' => 'servico_3',
        'type' => 'text',    
    ]);

    $header_cards_box->add_field([
        'name' => 'Texto do Card 3',
        'desc' => 'Texto descritivo do serviço no terceiro card que aparece na lista a partir do menu.',
        'id' => 'servico_texto_3',
        'type' => 'textarea_small',    
    ]);


    $header_cards_box->add_field([
        'name' => 'Frase de Chamada do Card 3',
        'desc' => 'Frase chamativa do terceiro card que aparece quando você passa o mouse por cima dele.',
        'id' => 'servico_texto_alt_3',
        'type' => 'textarea_small',    
    ]);

    $atributos_card_1 = $header_cards_box->add_field([
        'name' => 'Características do serviço no card 1',
        'id' => 'atributos_1',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Característica {#}',
            'add_button' => 'Adicionar Característica',
            'remove_button' => 'Remover Característica',
            'sortable' => true,
        ],
    ]);

    $header_cards_box->add_group_field($atributos_card_1, [
    'name' => 'Nome',
    'id' => 'atributo_nome',
    'type' => 'text',
  ]);

  $atributos_card_2 = $header_cards_box->add_field([
        'name' => 'Características do serviço no card 2',
        'id' => 'atributos_2',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Característica {#}',
            'add_button' => 'Adicionar Característica',
            'remove_button' => 'Remover Característica',
            'sortable' => true,
        ],
    ]);

    $header_cards_box->add_group_field($atributos_card_2, [
    'name' => 'Nome',
    'id' => 'atributo_nome',
    'type' => 'text',
  ]);

  $atributos_card_3 = $header_cards_box->add_field([
        'name' => 'Características do serviço no card 3',
        'id' => 'atributos_3',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Característica {#}',
            'add_button' => 'Adicionar Característica',
            'remove_button' => 'Remover Característica',
            'sortable' => true,
        ],
    ]);

    $header_cards_box->add_group_field($atributos_card_3, [
    'name' => 'Nome',
    'id' => 'atributo_nome',
    'type' => 'text',
  ]);

}

    add_action ('cmb2_admin_init', 'fields_header_nav');
    add_action ('cmb2_admin_init', 'fields_header_servicos');
    add_action ('cmb2_admin_init', 'fields_header_servicos_cards');
?>