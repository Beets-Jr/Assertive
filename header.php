<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php 
    // so vai carregar o css style.css quando a pagina for a home
    if ( is_page('Início') ) : 
    ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/home-video.css">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/header-footer.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/Contato.css">

    <!-- Fonte Inria Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Fonte Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <?php wp_head(); ?>

</head>

<body>

<header class="header-transparent"> 
        <div class="logo-header fade-in-left">
            <!-- Se o header estiver na home, scrolla tudo pra cima, se não vai pra home -->
            <?php if ( is_page('Início') ) : ?> 
                <a href="#hero">
            <?php else : ?>
                <a href="/">
            <?php endif; ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-ksnip_20250416-205452-removebg-preview 1.png"> 
            </a> 
        </div>
        
        <div class="menu-toggle">
            &#9776;  <!-- símbolo de 3 barrinhas -->
        </div>
        
            <nav>
                <!-- Se o header estiver na home, scrolla tudo pra cima, se não vai pra home -->
                <?php if ( is_page('Início') ) : ?>
                    <a href="#hero">Home</a>
                <?php else : ?>
                    <a href="/">Home</a>
                <?php endif; ?>
                
                <a href="#hero">Quem somos</a>

                <div class="dropdown js-dropdown">
                
                <a href="#servicos" class="dropbtn js-dropbtn">Serviços</a>
                
                <div class="dropdown-menu">

                    <!-- === Card 1: Inteligência de mercado === -->
                    <div class="card"
                        data-hover-text="Conheça o perfil dos seus clientes com nosso produto de Inteligência de mercado!">
                    <h3>Inteligência de mercado</h3>
                    <p>
                        Conheça profundamente o setor dos seus potenciais clientes. 
                        Entenda suas necessidades e desafios.
                    </p>
                    <div class="atributos">
                        <p>Análise Territorial</p>
                        <p>Share de Mercado</p>
                    </div>
                    </div>

                    <!-- === Card 2: Treinamento de Prospecção === -->
                    <div class="card"
                        data-hover-text="Transforme sua abordagem comercial com nosso Treinamento de Prospecção!">
                    <h3>Treinamento de Prospecção</h3>
                    <p>
                        Planeje e estruture sua estratégia de prospecção ativa. 
                        Ganhe visibilidade para sua empresa.
                    </p>
                    <div class="atributos">
                        <p>Pesquisa e análise de leads</p>
                        <p>Abordagem personalizada</p>
                    </div>
                    </div>

                    <!-- === Card 3: Prospecção Assertive === -->
                    <div class="card"
                        data-hover-text="Conheça nossa prospecção estratégica que alcança o segmento desejado pro seu produto!">
                    <h3>Prospecção Assertive</h3>
                    <p>
                        A partir das necessidades do cliente, traçamos objetivos 
                        e estratégias para atingir o público‑alvo.
                    </p>
                    <div class="atributos">
                        <p>Planejamento estratégico</p>
                        <p>Gestão da Informação</p>
                    </div>
                    </div>

                </div>

                <ul class="submenu-mobile">
                    <li><a href="InteligenciaDeMercado.html">Inteligência de mercado</a></li>
                    <li><a href="treinamento-prospeccao.html">Treinamento de Prospecção</a></li>
                    <li><a href="ProspeccaoAssertive.html">Prospecção Assertive</a></li>
                </ul>

                </div>

                <a href="#contato">Contato</a>
            </nav>
    </header>

    <!-- escurecer ao dar toggle no menu mobile-->
    <div class="overlay"> </div>