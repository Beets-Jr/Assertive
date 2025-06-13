<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/header-footer.css">

  <!-- Fonte Inria Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
    rel="stylesheet">

  <!-- Fonte League Spartan -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
    <header class="header-transparent"> 
        <div class="logo-header fade-in-left"> 
            <a href="/"> <!-- depende do nome da página? -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-ksnip_20250416-205452-removebg-preview 1.png"> 
            </a> 
        </div>
        
        <div class="menu-toggle">
            &#9776;  <!-- símbolo de 3 barrinhas -->
        </div>
        
            <nav>
                <a href="/">Home</a> <!-- depende do nome da página? -->
                <a href="/quemsomos/">Quem somos</a>

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

                        <a href="/inteligencia-de-mercado/" 
                        class="card-overlay-link" 
                        aria-label="Inteligência de Mercado">
                        <!-- Link overlay cobrindo toda a tela -->
                        </a>

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

                        <a href="/treinamento-de-prospeccao/" 
                        class="card-overlay-link" 
                        aria-label="Treinamento de Prospeccao">
                        <!-- Link overlay cobrindo toda a tela -->
                        </a>

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

                        <a href="/prospeccao-assertive/" 
                        class="card-overlay-link" 
                        aria-label="Prospecção Assertive">
                        <!-- Link overlay cobrindo toda a tela -->
                        </a>

                    </div>

            </div>

            <ul class="submenu-mobile">
                <li><a href="/inteligencia-de-mercado/">Inteligência de mercado</a></li>
                <li><a href="/treinamento-de-prospeccao/">Treinamento de Prospecção</a></li>
                <li><a href="/prospeccao-assertive/">Prospecção Assertive</a></li>
            </ul>

            </div>

            <a href="#contato">Contato</a>
            </nav>
        </header>

        <!-- escurecer ao dar toggle no menu mobile-->
        <div class="overlay"> </div>