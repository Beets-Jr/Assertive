<?php
// Template Name: Início
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/header-footer.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/Contato.css">

    <!-- Fonte Inria Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Fonte Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>

    <?php get_header(); ?>

<!-- Cards Solucoes (Renan) -->
    <div class="solutions-section">
        <div class="solutions-content">
            <div class="title">
                <h2 class="montserrat-regular">Como podemos te ajudar</h2>
                <h1 class="montserrat-bold">Soluções Personalizadas para o Seu Negocio</h1>
            </div>

            <div class="cards-grid">
                <div class="card-container">
                    <div class="card-inner left">

                        <div class="card front-card">
                            <h3 class="inria-sans-bold">Inteligência de Mercado</h3>

                            <p class="inria-sans-regular">
                                Conheça profundamente o setor dos seus potenciais clientes.
                                Entenda suas necessidades e desafios.
                            </p>

                            <div class="characteristics montserrat-light">
                                <div>Análise da concorrência</div>
                                <div>Análise Territorial</div>
                                <div>Share de mercado</div>
                            </div>
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
                            <h3 class="inria-sans-bold">Treinamento de Prospecção</h3>

                            <p class="inria-sans-regular">
                                Planeje e estruture sua estratégia de prospecção ativa. Expanda seu negócio,
                                ganhe visibilidade para sua empresa e aumente seu retorno sobre o investimento
                                utilizando da nossa expertise.
                            </p>

                            <div class="characteristics montserrat-light">
                                <div>Pesquisa e análise de novos leads</div>
                                <div>Abordagem consultiva e personalizada</div>
                            </div>
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
                    <div class="card-inner left">

                        <article class="card front-card">
                            <h3 class="inria-sans-bold">Prospecção Assertive</h3>

                            <p class="inria-sans-regular">
                                A partir das necessidades do cliente, traçamos objetivos e estratégias para seu
                                produto atingir o segmento e público alvo desejados, com uma equipe preparada
                                com as informações e técnicas de negociação necessárias para as vendas.
                            </p>

                            <div class="characteristics montserrat-light">
                                <div>Análise das necessidades</div>
                                <div>Planejamento estratégico</div>
                                <div>Gestão da Informação</div>
                            </div>
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

    <!-- End card Renan -->

    <!-- Cards segmentos (Thales) -->
    <!-- End card segmentos --!>

    <!-- Numeros (Murillo) -->
    <!-- end numeros -->

    <!-- Seção contato -->
    <section class="blue-bg">
    <img class="contact-img" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/foto-contato.png" alt="">

    <div id="contato" class="contact-section">
        <div class="forms-container">
            <h1><span>Chegou a hora de </span><br> escalar seus resultados</h1>
            <h2>Fale com nossos <span>especialistas!</span></h2>
            
            <form class="contact-form" action="" method="POST">
            <div>
                <label for="nome">Nome</label>
                <br>
                <input type="text" id="nome" placeholder="Informe seu nome" name="nome" required>
            </div>

            <div>
                <label for="email">E-mail</label>
                <br>
                <input type="email" id="email" placeholder="Informe um email para contato" name="email" required>
            </div>

            <div>
                <label for="celphone">Celular</label>
                <br>
                <input type="tel" id="celphone" placeholder="Informe um celular para contato" name="celphone" required>
            </div>

            <div>
                <label for="mensagem">Mensagem</label>
                <br>
                <textarea id="mensagem" name="mensagem" placeholder="Conte-nos mais sobre sua empresa e o serviço buscado" rows="5" required></textarea>
            </div>

            <div class="button-container">
                <button type="submit">Enviar</button>
            </div>
            </form>
        </div>

        </div>
    </section>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/Contato.js"></script>
    <!-- end seção contato -->

    <?php get_footer(); ?>
    
    <?php wp_footer(); ?>
</body>
</html>