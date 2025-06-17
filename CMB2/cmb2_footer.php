<?php 

function fields_footer_contatos() {
   $footer_box_top = new_cmb2_box([
        'id' => 'footer_box_top',
        'title' => 'Footer - Redes Sociais e Contatos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'footer-section.php'
        ]
    ]);

    $footer_box_top->add_field([
        'name' => 'Logo Principal Footer',
        'desc' => 'Logo principal da empresa que aparece no centro do footer.',
        'id' => 'logo_principal_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);
    
    $footer_box_top->add_field([
        'name' => 'Ícone Telefone',
        'id' => 'call_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);

    $footer_box_top->add_field([
        'name' => 'Telefone / Número para contato',
        'id' => 'call_number',
        'type' => 'text',    
    ]);

    $footer_box_top->add_field([
        'name' => 'Ícone Email',
        'id' => 'mail_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);

    $footer_box_top->add_field([
        'name' => 'E-mail para contato',
        'id' => 'mail_address',
        'type' => 'text',    
    ]);

    $footer_box_top->add_field([
        'name' => 'Ícone Rede Social 1',
        'desc' => 'Ícone representando a primeira rede social à direita, mais em cima. Por padrão é o Instagram.',
        'id' => 'icon_social_1',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);

    $footer_box_top->add_field([
        'name' => 'Link da Rede Social 1',
        'id' => 'link_social_1',
        'type' => 'text',    
    ]);

    $footer_box_top->add_field([
        'name' => 'Ícone Rede Social 2',
        'desc' => 'Ícone representando a segunda rede social à direita, mais em cima. Por padrão é o Linkedin.',
        'id' => 'icon_social_2',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);

    $footer_box_top->add_field([
        'name' => 'Link da Rede Social 2',
        'id' => 'link_social_2',
        'type' => 'text',    
    ]);

    $footer_box_top->add_field([
        'name' => 'Logo Assertive Footer',
        'desc' => 'Logo da empresa no centro do quadro do Footer.',
        'id' => 'logo_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);
}

function fields_footer_enderecamento() {
   $footer_box_bottom = new_cmb2_box([
        'id' => 'footer_box_bottom',
        'title' => 'Footer - Endereçamento e Direitos Reservados',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template', 
            'value' => 'footer-section.php'
        ]
    ]);

    $footer_box_bottom->add_field([
        'name' => 'Ícone Localização',
        'desc' => 'Pequeno ícone representando uma localização, antes do endereço.',
        'id' => 'icon_local_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);
    
    $footer_box_bottom->add_field([
        'name' => 'Endereço',
        'desc' => 'Endereço físico da empresa.',
        'id' => 'address_footer',
        'type' => 'text',    
    ]);

    $footer_box_bottom->add_field([
        'name' => 'Imagem Inferior do Footer',
        'desc' => 'Imagem que por padrão é um mapa representando a localização da Assertive. O clique nela leva para um link do Google Maps.',
        'id' => 'icon_map_footer',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],    
    ]);

    $footer_box_bottom->add_field([
        'name' => 'Link Mapa Footer',
        'desc' => 'O link que o usuário é direcionado ao clicar na imagem dessa parte debaixo do footer. Como é por padrão um mapa, 
        geralmente será um link com o endereço atual da empresa.',
        'id' => 'map_address_footer',
        'type' => 'text',    
    ]);

    $footer_box_bottom->add_field([
        'name' => 'Texto inferior Footer',
        'desc' => 'Texto de rodapé da página, por padrão afirmando os direitos reservados da empresa.',
        'id' => 'bottom_text_footer',
        'type' => 'text',    
    ]);
}

    add_action ('cmb2_admin_init', 'fields_footer_contatos');
    add_action ('cmb2_admin_init', 'fields_footer_enderecamento');
?>