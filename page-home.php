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
    <section class="segmentos-atendidos">
        <h2 class="titulo-secao">Segmentos Atendidos</h2>

        <div class="cards-container">

            <!-- 1 -->
            <div class="card-geral">
                <div class="card-inner2">

                    <div class="card-front2">
                        <h3>Consultoria Tributária</h3>
                        <p>
                            O setor tributário lida com desafios constantes como mudanças na legislação, concorrência
                            acirrada e
                            dificuldade de comunicação com o público‑alvo. Muitas consultorias enfrentam ciclos de venda
                            longos
                            e dependem apenas de indicações ou marketing passivo.
                        </p>
                    </div>

                    <div class="card-back2">

                        <h3>Consultoria Tributária</h3>
                        <p>
                            Nossa consultoria atua como um braço comercial, estruturando e
                            executando uma prospecção ativa estratégica — direcionada para CFOs,
                            controllers e decisores técnicos, com argumentos claros e valor consultivo.
                            Geramos oportunidades reais de negócio para que sua equipe técnica
                            foque no que faz melhor: entregar resultados.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="card-geral">
                <div class="card-inner2">
                    <div class="card-front2">
                        <h3>Consultoria Financeira</h3>
                        <p>
                            Consultorias financeiras – como BPO, planejamento e controladoria – enfrentam o desafio de
                            educar o
                            mercado sobre a importância da gestão financeira. À venda, muitas vezes, é técnica e
                            consultiva,
                            exigindo acesso a decisores que nem sempre estão conscientes de seus próprios problemas.
                        </p>
                    </div>
                    <div class="card-back2">
                        <h3>Consultoria Financeira</h3>
                        <p>
                            Criamos estratégias de prospecção personalizadas para atrair empresas no
                            momento certo: em fase de crescimento, reestruturação ou expansão.
                            Entregamos leads qualificados com real interesse, permitindo que sua
                            consultoria atue com previsibilidade e consistência.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="card-geral">
                <div class="card-inner2">
                    <div class="card-front2">
                        <h3>Segurança Patrimonial e Facilities</h3>
                        <p>
                            Empresas de segurança patrimonial e facilities enfrentam forte concorrência, alta
                            sensibilidade a
                            preço e dificuldade em acessar os decisores corretos – como gestores prediais, diretores de
                            operações e compradores corporativos.
                        </p>
                    </div>
                    <div class="card-back2">
                        <h3>Segurança Patrimonial e Facilities</h3>
                        <p>
                            Com inteligência de mercado, mapeamos alvos estratégicos e realizamos
                            abordagens personalizadas que posicionam seu serviço como solução e
                            não apenas como custo. Reduzimos o ciclo de vendas e ampliamos a
                            geração de novas oportunidades comerciais com foco em valor, e não
                            apenas em preço.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="card-geral">
                <div class="card-inner2">
                    <div class="card-front2">
                        <h3>Logística e Transporte</h3>
                        <p>
                            Empresas de logística e transporte precisam se diferenciar em um mercado competitivo e com
                            decisões
                            técnicas, baseadas em confiança. Encontrar novos clientes qualificados, com necessidades
                            logísticas
                            reais, exige tempo e análise – algo que o time interno nem sempre consegue priorizar.
                        </p>
                    </div>
                    <div class="card-back2">
                        <h3>Logística e Transporte</h3>
                        <p>Desenvolvemos campanhas direcionadas para segmentos com maior
                        necessidade logística, utilizando dados, perfil de consumo e timing de
                        compra. Geramos conversas qualificadas com tomadores de decisão que
                        estão prontos para ouvir propostas com foco em eficiência e custo-
                        benefício.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="card-geral">
                <div class="card-inner2">
                    <div class="card-front2">
                        <h3>Empresas de Tecnologia e Software</h3>
                        <p>
                            O mercado jurídico tem passado por transformações profundas. A concorrência aumentou, o
                            cliente está
                            mais exigente e a prospecção ativa, antes vista com reservas, tornou‑se uma necessidade –
                            desde que
                            feita com inteligência, ética e estratégia.
                        </p>
                    </div>
                    <div class="card-back2">
                        <h3>Consultorias de RH</h3>
                        <p>Consultorias de Recursos Humanos exercem um papel fundamental nas
                        empresas: apoiar na atração, desenvolvimento e retenção de talentos. No
                        entanto, vender soluções de RH — como recrutamento e seleção, gestão
                        por competências, clima organizacional, programas de treinamento ou
                        folha de pagamento — exige tempo, abordagem consultiva e acesso
                        direto a decisores.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="card-geral">
                <div class="card-inner2">
                    <div class="card-front2">
                        <h3>Consultorias e Escritórios de Advocacia</h3>
                        <p>
                            O mercado jurídico tem passado por transformações profundas. A concorrência aumentou, o
                            cliente está
                            mais exigente e a prospecção ativa, antes vista com reservas, tornou‑se uma necessidade –
                            desde que
                            feita com inteligência, ética e estratégia.
                        </p>
                    </div>
                    <div class="card-back2">
                        <h3>Consultorias e Escritórios de Advocacia</h3>
                        <p> O mercado jurídico tem passado por transformações profundas. A
                        concorrência aumentou, o cliente está mais exigente e a prospecção ativa,
                        antes vista com reservas, tornou-se uma necessidade — desde que feita
                        com inteligência, ética e estratégia.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End card segmentos -->

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