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

add_action ('cmb2_admin_init', 'fields_header_nav');
?>
