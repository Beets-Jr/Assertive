<?php
// Template Name: Início
?>

<?php get_header(); ?>

<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?> 
 <!-- Hero (Thales) -->
        <section id="hero">
            <?php
            $video_url = get_post_meta( get_the_ID(), 'hero_video', true );
            ?>
            <video autoplay muted loop playsinline class="bg-video">
                <source 
                src="<?php echo esc_url( $video_url ); ?>"
                type="video/mp4"
                >
                Seu navegador não suporta vídeo em HTML5.
            </video>
            
        
            <div class="hero-overlay">
                <div class="hero-content">
                    <div class="hero-texto">
                        <h1><?php the_field('hero_titulo_l1') ?> <br><span></span></h1>
                        
                            <?php
                                $subtitulo = get_post_meta( get_the_ID(), 'hero_subtitulo', true );
                                echo wpautop( $subtitulo );
                            ?>
                        
                        <a href="#contato" class="btn-cta"><?php the_field('texto_botao') ?></a>
                    </div>
                </div>
            </div>
        </section>
<!-- End Hero -->

<!-- Video Murillo (Em stand by por enquanto) -->
    <div class="video">
        <?php
        $video_url = get_post_meta( get_the_ID(), 'video_apresentacao', true );
        ?>
        <video controls preload="metadata" id="home_video">
            <source 
            src="<?php echo esc_url( $video_url ); ?>"
            type="video/mp4"
            >
            Seu navegador não suporta vídeo em HTML5.
        </video>
    </div>
<!-- End video -->

<!-- Cards Solucoes (Renan) -->

    <div id="servicos" class="solutions-section">
        <div class="solutions-content">
            <div class="title">
                <h2 class="montserrat-regular"><?php the_field('cards_titulo') ?></h2> 
                <h1 class="montserrat-bold"><?php the_field('cards_subtitulo') ?></h1>
            </div>

            <div class="cards-grid">
                <div class="card-container">
                    <div class="card-inner left">

                        <div class="card front-card">
                            <h3 class="inria-sans-bold"><?php the_field('titulo_card_1') ?></h3>

                            <p class="inria-sans-regular">
                                <?php the_field('texto_card_1') ?>
                            </p>

                            <?php
                            $caracteristicas1 = get_field_group('caracteristicas1'); ?>
                            <div class="characteristics montserrat-light">
                                <?php if (isset($caracteristicas1)) { foreach ($caracteristicas1 as $c) { ?>
                                    <div><?php echo $c['caracteristica_nome']; ?></div>
                                <?php } } ?>
                            </div>

                        </div>

                        <div class="card back-card">
                            <a href="/inteligencia-de-mercado/"></a>
                            <p class="inria-sans-bold sc-blue">
                                <?php the_field('texto_card_tras_1') ?>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="card-container">
                    <div class="card-inner right">

                        <article class="card front-card">
                            <h3 class="inria-sans-bold"><?php the_field('titulo_card_2') ?></h3>

                            <p class="inria-sans-regular">
                                <?php the_field('texto_card_2') ?>
                            </p>

                            <?php
                            $caracteristicas2 = get_field_group('caracteristicas2'); ?>
                            <div class="characteristics montserrat-light">
                                <?php if (isset($caracteristicas2)) { foreach ($caracteristicas2 as $c) { ?>
                                    <div><?php echo $c['caracteristica_nome']; ?></div>
                                <?php } } ?>
                            </div>

                        </article>

                        <article class="card back-card">
                            <a href="/treinamentoprospeccao"></a>
                            <p class="inria-sans-bold sc-blue">
                                <?php the_field('texto_card_tras_2') ?>
                            </p>
                        </article>

                    </div>
                </div>

                <div class="card-container">
                    <div class="card-inner">

                        <article class="card front-card">
                            <h3 class="inria-sans-bold"><?php the_field('titulo_card_3') ?></h3>

                            <p class="inria-sans-regular">
                                <?php the_field('texto_card_3') ?>
                            </p>

                            <?php
                            $caracteristicas3 = get_field_group('caracteristicas3'); ?>
                            <div class="characteristics montserrat-light">
                                <?php if (isset($caracteristicas3)) { foreach ($caracteristicas3 as $c) { ?>
                                    <div><?php echo $c['caracteristica_nome']; ?></div>
                                <?php } } ?>
                            </div>

                        </article>

                        <article class="card back-card">
                            <a  href="/prospeccao"></a>
                            <p class="inria-sans-bold sc-blue">
                                <?php the_field('texto_card_tras_3') ?>
                            </p>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End card Renan -->

     <!-- Cards segmentos (Thales) -->
    <section class="segmentos-atendidos">
        <h2 class="titulo-secao"><?php the_field('titulo_secao_segmentos') ?></h2>

        <div class="cards-container">
            
            <?php
                $cards_seg = get_field_group('cards_segmentos'); 
            ?>

            <?php if (isset($cards_seg)) { foreach ($cards_seg as $card) { ?>

                <div class="card-geral">
                    <div class="card-inner2">

                        <div class="card-front2">
                            <h3><?php echo $card['front_card_title']; ?></h3>
                            <p>
                                <?php echo $card['front_card_text']; ?>
                            </p>
                        </div>

                        <div class="card-back2">

                            <h3><?php echo $card['back_card_title']; ?></h3>
                            <p>
                                <?php echo $card['back_card_text']; ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php } } ?>

        </div>

    </section>
    <!-- End card segmentos -->

    <!-- Numeros (Murillo) -->
    <section id="numbers">
        <h2 class="numbers_title"><?php the_field('titulo_secao_numeros') ?></h2>

        <div class="metricas-container">
            <div class="metrica">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/segmentos-atendidos.svg" alt="Ícone Segmentos">
                <p class="number"><?php the_field('valor_numero1') ?></p>
                <p class="descricao"><?php the_field('titulo_numero1') ?></p>
            </div>
            <div class="metrica">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/empresas-potencializadas.svg" alt="Ícone Empresas">
                <p class="number"><?php the_field('valor_numero2') ?></p>
                <p class="descricao"><?php the_field('titulo_numero2') ?></p>
            </div>
            <div class="metrica">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/oportunidades-criadas.svg" alt="Ícone Oportunidades">
                <p class="number"><?php the_field('valor_numero3') ?></p>
                <p class="descricao"><?php the_field('titulo_numero3') ?></p>
            </div>
            <div class="metrica">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/hard-drives.svg" alt="Ícone base de dados">
                <p class="number"><?php the_field('valor_numero4') ?></p>
                <p class="descricao"><?php the_field('titulo_numero4') ?></p>
            </div>
        </div>
    </section> 
    <!-- end numeros -->
        
    <!-- Include da seção contato -->
    <!-- end include seção contato -->

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/home.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/home-video.js"> </script>

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
