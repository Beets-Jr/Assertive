<?php
// Template Name: Início
?>

<?php get_header(); ?>

<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?> 
 <!-- Hero (Tahles) -->
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
                        <h1><?php the_field('hero_titulo_l1') ?> <br><span><?php the_field('hero_titulo_l2') ?></span></h1>
                        
                            <?php
                                $subtitulo = get_post_meta( get_the_ID(), 'hero_subtitulo', true );
                                echo wpautop( $subtitulo );
                            ?>

                            <!-- Conheça nossa equipe de prospecção para inteligência<br>
                            de mercado de acordo com as necessidades da sua empresa. -->
                        
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

    <div class="solutions-section">
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
                                <!-- Conheça profundamente o setor dos seus potenciais clientes.
                                Entenda suas necessidades e desafios. -->
                            </p>

                            <?php
                            $caracteristicas1 = get_field_group('caracteristicas1'); ?>
                            <div class="characteristics montserrat-light">
                                <?php if (isset($caracteristicas1)) { foreach ($caracteristicas1 as $c) { ?>
                                    <div><?php echo $c['caracteristica_nome']; ?></div>
                                <?php } } ?>
                            </div>

                            <!-- <div class="characteristics montserrat-light">
                                <div>Análise da concorrência</div>
                                <div>Análise Territorial</div>
                                <div>Share de mercado</div>
                            </div> -->
                        </div>

                        <div class="card back-card">
                            <a href="../HTML/ProspeccaoAssertive.html"></a>
                            <p class="inria-sans-bold sc-blue">
                                Conheça o perfil dos seus clientes com nosso produto de Inteligência de mercado!
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
                                <!-- Planeje e estruture sua estratégia de prospecção ativa. Expanda seu negócio,
                                ganhe visibilidade para sua empresa e aumente seu retorno sobre o investimento
                                utilizando da nossa expertise. -->
                            </p>

                            <?php
                            $caracteristicas2 = get_field_group('caracteristicas2'); ?>
                            <div class="characteristics montserrat-light">
                                <?php if (isset($caracteristicas2)) { foreach ($caracteristicas2 as $c) { ?>
                                    <div><?php echo $c['caracteristica_nome']; ?></div>
                                <?php } } ?>
                            </div>

                            <!-- <div class="characteristics montserrat-light">
                                <div>Pesquisa e análise de novos leads</div>
                                <div>Abordagem consultiva e personalizada</div>
                            </div> -->

                        </article>

                        <article class="card back-card">
                            <a href="../HTML/InteligenciaDeMercado.html"></a>
                            <p class="inria-sans-bold sc-blue">
                                Transforme sua abordagem comercial com nosso 
                                Treinamento de Prospecção!
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
                                <!-- A partir das necessidades do cliente, traçamos objetivos e estratégias para seu
                                produto atingir o segmento e público alvo desejados, com uma equipe preparada
                                com as informações e técnicas de negociação necessárias para as vendas. -->
                            </p>

                            <?php
                            $caracteristicas3 = get_field_group('caracteristicas3'); ?>
                            <div class="characteristics montserrat-light">
                                <?php if (isset($caracteristicas3)) { foreach ($caracteristicas3 as $c) { ?>
                                    <div><?php echo $c['caracteristica_nome']; ?></div>
                                <?php } } ?>
                            </div>

                            <!-- <div class="characteristics montserrat-light">
                                <div>Análise das necessidades</div>
                                <div>Planejamento estratégico</div>
                                <div>Gestão da Informação</div>
                            </div> -->
                        </article>

                        <article class="card back-card">
                            <a href="../HTML/TreinamentoProspeccao.html"></a>
                            <p class="inria-sans-bold sc-blue">
                                Conheça nossa prospecção estratégica que alcança o segmento desejado pro seu produto!
                            </p>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/home.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/Home.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/home-video.js"> </script>

    <!-- End card Renan -->

    <!-- Cards segmentos (Thales) -->
    <!-- End card segmentos --!>

    <!-- Numeros (Murillo) -->
    <!-- end numeros -->
        
    <!-- Include da seção contato -->
    <?php 
        $contato_partial = get_stylesheet_directory() . '/contato.php';
        include $contato_partial;
    ?>
    <!-- end include seção contato -->

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>