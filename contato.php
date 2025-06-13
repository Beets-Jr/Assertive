<?php
// Template Name: Contato
?>

<!-- Seção contato -->
    <?php 
        if ( empty( $contato_id ) ) {
            $contato_page = get_page_by_path( 'contato' );
            $contato_id   = $contato_page ? $contato_page->ID : get_the_ID();
        }
    ?>

    <section class="blue-bg">
    <img class="contact-img" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/foto-contato.png" alt="">

    <div id="contato" class="contact-section">
        <div class="forms-container">
            <h1><span><?php the_field('contato_titulo_l1', $contato_id) ?> </span><br> <?php the_field('contato_titulo_l2', $contato_id) ?></h1>
            <h2><?php the_field('contato_subtitulo', $contato_id) ?><span> <?php the_field('contato_subtitulo_azul', $contato_id) ?></span></h2>

            <form id="contact-form" class="contact-form" action="https://formspree.io/f/myzjkppj" method="POST" data-form>
            <div>
                <label for="nome"><?php the_field('label_nome', $contato_id) ?></label>
                <br>
                <input type="text" id="nome" placeholder="<?php the_field('placeholder_nome', $contato_id) ?>" name="nome" required>
            </div>

            <div>
                <label for="email"><?php the_field('label_email', $contato_id) ?></label>
                <br>
                <input type="email" id="email" placeholder="<?php the_field('placeholder_email', $contato_id) ?>" name="email" required>
            </div>

            <div>
                <label for="celphone"><?php the_field('label_celular', $contato_id) ?></label>
                <br>
                <input type="tel" id="celphone" placeholder="<?php the_field('placeholder_celular', $contato_id) ?>" name="celphone" required>
            </div>

            <div>
                <label for="mensagem"><?php the_field('label_mensagem', $contato_id) ?></label>
                <br>
                <textarea id="mensagem" name="mensagem" placeholder="<?php the_field('placeholder_mensagem', $contato_id) ?>" rows="5" required></textarea>
            </div>

            <div class="button-container">
                <button type="submit" data-button><?php the_field('texto_botao', $contato_id) ?></button>
            </div>
            </form>
        </div>

        </div>
    </section>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/Contato.js"></script>
    <!-- end seção contato -->
