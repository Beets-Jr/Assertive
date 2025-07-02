<?php
/**
 * Template para páginas 404 - Retorna erro 404 real
 * Este template garante que o Google não indexe páginas inexistentes
 */

// Força headers 404
status_header(404);
nocache_headers();

// Adiciona meta robots para não indexar
add_action('wp_head', function() {
    echo '<meta name="robots" content="noindex, nofollow">';
});

get_header(); ?>

<div class="container-404">
    <div class="error-404">
        <h1>404</h1>
        <h2>Página não encontrada</h2>
        <p>A página que você está procurando não existe.</p>
        
        <div class="error-actions">
            <a href="<?php echo home_url(); ?>" class="btn-home">
                Voltar ao início
            </a>
        </div>
    </div>
</div>

<style>
.container-404 {
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    text-align: center;
}

.error-404 h1 {
    font-size: 6rem;
    color: #e74c3c;
    margin: 0;
    font-weight: bold;
}

.error-404 h2 {
    font-size: 2rem;
    color: #333;
    margin: 1rem 0;
}

.error-404 p {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 2rem;
}

.btn-home {
    display: inline-block;
    background: #3498db;
    color: white;
    padding: 12px 30px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s;
}

.btn-home:hover {
    background: #2980b9;
    color: white;
    text-decoration: none;
}

@media (max-width: 768px) {
    .error-404 h1 {
        font-size: 4rem;
    }
    
    .error-404 h2 {
        font-size: 1.5rem;
    }
}
</style>

<?php get_footer(); ?>