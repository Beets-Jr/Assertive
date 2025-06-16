<?php
// Template Name: Header
?>

<?php get_header(); ?>

<?php 
        if ( empty( $header_id ) ) {
            $header_page = get_page_by_path( 'header' );
            $header_id   = $header_page ? $header_page->ID : get_the_ID();
        }
?>

<header class="header-transparent"> 
        <div class="logo-header fade-in-left"> 
            <a href="/"> <!-- depende do nome da página? -->
            <img src="<?php the_field ('logo_header', $header_id); ?>"> 
            </a> 
        </div>
        
        <div class="menu-toggle">
            &#9776;  <!-- símbolo de 3 barrinhas -->
        </div>
        
            <nav>
                <a href="/"> <?php the_field ('item_1', $header_id); ?> </a> <!-- depende do nome da página? -->
                <a href="/quemsomos/"> <?php the_field ('item_2', $header_id); ?> </a>

                <div class="dropdown js-dropdown">
                
                <a href="#servicos" class="dropbtn js-dropbtn"> <?php the_field ('item_3', $header_id); ?> </a>
                
                <div class="dropdown-menu">

                    <!-- === Card 1: Inteligência de mercado === -->
                    <div class="card"
                         data-hover-text="<?php the_field ('servico_texto_alt_1', $header_id); ?>">
                        
                         <h3> <?php the_field ('servico_1', $header_id); ?> </h3>
                        
                        <p>
                            <?php the_field ('servico_texto_1', $header_id); ?>
                        </p>

                        <?php 
                            $atributos_1 = get_field_group('atributos_1', $header_id); 
                        ?> 
                            <div class="atributos">
                                <?php if (isset($atributos_1)) {foreach ($atributos_1 as $at) { ?>
                                    <p> <?php echo $at['atributo_nome']; ?> </p>
                                <?php } } ?>
                            </div>
                        

                        <a href="/inteligencia-de-mercado/" 
                        class="card-overlay-link" 
                        aria-label="Inteligência de Mercado">
                        <!-- Link overlay cobrindo toda a tela -->
                        </a>

                    </div>

                    <!-- === Card 2: Treinamento de Prospecção === -->
                    <div class="card"
                        data-hover-text="<?php the_field ('servico_texto_alt_2', $header_id); ?>">
                        
                        <h3> <?php the_field ('servico_2', $header_id); ?> </h3>
                        
                        <p>
                           <?php the_field ('servico_texto_2', $header_id); ?>
                        </p>
                        
                        <?php 
                            $atributos_2 = get_field_group('atributos_2', $header_id); 
                        ?> 
                            <div class="atributos">
                                <?php if (isset($atributos_2)) {foreach ($atributos_2 as $at) { ?>
                                    <p> <?php echo $at['atributo_nome']; ?> </p>
                                <?php } } ?>
                            </div>

                        <a href="/treinamento-de-prospeccao/" 
                        class="card-overlay-link" 
                        aria-label="Treinamento de Prospeccao">
                        <!-- Link overlay cobrindo toda a tela -->
                        </a>

                    </div>

                    <!-- === Card 3: Prospecção Assertive === -->
                    <div class="card" 
                    data-hover-text="<?php the_field ('servico_texto_alt_3', $header_id); ?>">
                    
                        <h3> <?php the_field ('servico_3', $header_id); ?> </h3>

                        <p>
                            <?php the_field ('servico_texto_3', $header_id); ?>
                        </p>

                        <?php 
                            $atributos_3 = get_field_group('atributos_3', $header_id); 
                        ?> 
                            <div class="atributos">
                                <?php if (isset($atributos_3)) {foreach ($atributos_3 as $at) { ?>
                                    <p> <?php echo $at['atributo_nome']; ?> </p>
                                <?php } } ?>
                            </div>

                        <a href="/prospeccao-assertive/" 
                        class="card-overlay-link" 
                        aria-label="Prospecção Assertive">
                        <!-- Link overlay cobrindo toda a tela -->
                        </a>

                    </div>

            </div>

            <ul class="submenu-mobile">
                <li><a href="/inteligencia-de-mercado/"> <?php the_field ('servico_1', $header_id); ?> </a></li>
                <li><a href="/treinamento-de-prospeccao/"> <?php the_field ('servico_2', $header_id); ?> </a></li>
                <li><a href="/prospeccao-assertive/"> <?php the_field ('servico_3', $header_id); ?> </a></li>
            </ul>

            </div>

            <a href="#contato"> <?php the_field ('item_4', $header_id); ?> </a>
            </nav>
        </header>

        <!-- escurecer ao dar toggle no menu mobile-->
        <div class="overlay"> </div>