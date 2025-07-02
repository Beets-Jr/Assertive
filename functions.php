<?php

// Inclui arquivos CMB2
require_once( dirname(__FILE__) . '/CMB2/cmb2SobreNos.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2Home.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2Contato.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2_inteligencia.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2_header.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2_footer.php' );
require_once( dirname(__FILE__) . '/CMB2/cmb2Prospeccao.php' );

/**
 * Força URLs não existentes a retornar erro 404 real (HTTP Status 404)
 * Não redireciona - apenas retorna 404 para que Google não indexe
 */
function force_real_404_for_invalid_urls() {
    // Ignora admin, ajax, feeds, cron e outras áreas especiais
    if (is_admin() || wp_doing_ajax() || is_feed() || wp_doing_cron() || is_customize_preview()) {
        return;
    }
    
    // Lista de contextos válidos do WordPress
    $valid_contexts = array(
        is_home(),
        is_front_page(), 
        is_page(),
        is_single(),
        is_category(),
        is_tag(),
        is_archive(),
        is_search(),
        is_attachment(),
        is_author(),
        is_date(),
        is_privacy_policy(),
        is_404() // Se já é 404, deixa passar
    );
    
    // Se nenhum contexto válido for verdadeiro, força 404 REAL
    if (!array_filter($valid_contexts)) {
        // Define headers 404
        status_header(404);
        nocache_headers();
        
        // Adiciona meta robots para não indexar
        add_action('wp_head', function() {
            echo '<meta name="robots" content="noindex, nofollow">' . "\n";
        });
        
        // Força o WordPress a reconhecer como 404
        global $wp_query;
        $wp_query->set_404();
        $wp_query->is_404 = true;
        $wp_query->is_home = false;
        $wp_query->is_front_page = false;
        
        // Limpa qualquer conteúdo que possa ter sido carregado
        remove_all_actions('wp_head');
        remove_all_actions('wp_footer');
        
        // Adiciona apenas o essencial para 404
        add_action('wp_head', 'wp_enqueue_scripts', 1);
        add_action('wp_head', function() {
            echo '<meta charset="' . get_bloginfo('charset') . '">' . "\n";
            echo '<meta name="robots" content="noindex, nofollow">' . "\n"; 
            echo '<title>404 - Página não encontrada | ' . get_bloginfo('name') . '</title>' . "\n";
        });
    }
}
add_action('template_redirect', 'force_real_404_for_invalid_urls');

/**
 * Remove completamente qualquer conteúdo para URLs inválidas
 * Garante que retorne apenas 404 real
 */
function block_invalid_url_content($template) {
    if (is_404()) {
        // Se existe template 404 personalizado, usa ele
        $custom_404 = locate_template('404.php');
        if ($custom_404) {
            return $custom_404;
        }
        
        // Senão, retorna template mínimo que só mostra 404
        return get_template_directory() . '/index.php';
    }
    
    return $template;
}
add_filter('template_include', 'block_invalid_url_content');

/**
 * Enfileira CSS do tema (front-end)
 */
function assertive_css() {
    wp_register_style( 'assertive-style', get_template_directory_uri() . '/style.css', array(), false, false );
    wp_enqueue_style( 'assertive-style' );
}
add_action( 'wp_enqueue_scripts', 'assertive_css' );

/**
 * Enfileira CSS específico da página Prospecção
 */
function load_prospeccao_styles() {
    // Verifica se está usando o template da página prospecção
    if (is_page_template('page-prospeccao.php')) {
        wp_enqueue_style(
            'prospeccao-style', 
            get_template_directory_uri() . '/ProspeccaoAssertive.css',
            array('assertive-style'), // Depende do CSS principal
            '1.0', // Versão
            'all' // Media type
        );
    }
}
add_action('wp_enqueue_scripts', 'load_prospeccao_styles');

/**
 * Enfileira scripts do tema (front-end)
 */
function assertive_scripts() {
    wp_register_script( 'assertive-contato-script', get_template_directory_uri() . '/JS/Contato.js', array(), false, true );
    wp_register_script( 'assertive-header-footer-script', get_template_directory_uri() . '/JS/header-footer.js', array(), false, true );
    wp_register_script( 'assertive-sobreNos-script', get_template_directory_uri() . '/JS/sobreNos.js', array(), false, true );

    wp_enqueue_script( 'assertive-contato-script' );
    wp_enqueue_script( 'assertive-header-footer-script' );
    wp_enqueue_script( 'assertive-sobreNos-script' );
}
add_action( 'wp_enqueue_scripts', 'assertive_scripts' );

/**
 * Funções auxiliares para campos (get_field, the_field, etc.)
 */
function get_field($field, $page = NULL, $unique = true) {
    $page = is_null($page) ? get_the_ID() : $page;
    return get_post_meta($page, $field, $unique);
}

function the_field($field, $page = NULL, $unique = true) {
    $page = is_null($page) ? get_the_ID() : $page;
    echo get_field($field, $page);
}

function get_field_array( string $field, $page = null ): array {
    $page = is_null( $page ) ? get_the_ID() : $page;
    $values = get_post_meta( $page, $field, false );
    return is_array( $values ) ? $values : [];
}

function get_field_group( string $field, $page = null ): array {
    $page = is_null( $page ) ? get_the_ID() : $page;
    $group = get_post_meta( $page, $field, true );

    if ( is_string( $group ) ) {
        $maybe = maybe_unserialize( $group );
        $group = is_array( $maybe ) ? $maybe : [];
    }
    return is_array( $group ) ? $group : [];
}

/*
 * Enfileira script JS no admin somente na tela de edição de páginas,
 * em vez de imprimir via admin_footer.
 */
function assertive_admin_enqueue_scripts( $hook ) {
    // Apenas post.php (edição) e post-new.php (criação) interessam.
    if ( ! in_array( $hook, array('post.php', 'post-new.php'), true ) ) {
        return;
    }
    $screen = get_current_screen();
    if ( $screen && $screen->post_type === 'page' ) {
        // Garante que o arquivo JS exista em JS/admin-page.js
        wp_enqueue_script(
            'assertive-admin-page',
            get_template_directory_uri() . '/JS/admin-page.js',
            array(), // sem dependências extras
            false,
            true  // no footer
        );
    }
}
add_action( 'admin_enqueue_scripts', 'assertive_admin_enqueue_scripts' );

function load_header_section_styles() {
    if ( is_page_template('header-section.php') ) {
        wp_enqueue_style(
            'header-section-style',
            get_template_directory_uri() . '/header-footer.css',
            array('assertive-style'), // se precisar depender do CSS principal
            '1.0',
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'load_header_section_styles');

function load_section_styles() {
    if ( is_page_template('template-footer.php') ) {
        wp_enqueue_style(
            'header-footer-style',
            get_template_directory_uri() . '/header-footer.css',
            array('assertive-style'),
            '1.0',
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'load_section_styles');

/*
Parte JH
*/

/*
Parte Murillo
*/

?>