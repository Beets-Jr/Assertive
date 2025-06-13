  <?php 
  // Template Name: Inteligência de Mercado
  ?>

  <?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <section class="market-intelligence-hero">
        <div class="market-intelligence-hero-content">
            <h1 class="market-intelligence-hero-title"> <?php echo get_post_meta(get_the_ID(), 'titulo', true); ?> </h1>

            <p> <?php echo get_post_meta(get_the_ID(), 'chamada-hero', true); ?> </p>

            <button type="button" onclick="navigateToContact()"> <?php echo get_post_meta(get_the_ID(), 'chamada-hero-button', true); ?> </button>
        </div>
    </section>

    <section class="market-intelligence-what-is-it">
        <article class="market-intelligence-what-is-it-card">
            <h3>O que é a inteligência de Mercado?</h2>
            <p>Um processo estratégico que coleta, organiza e analisa informações sobre o ambiente externo.</p>
        </article>

        <div class="market-intelligence-what-is-it-vertical-bar first-bar"></div>

        <article class="market-intelligence-what-is-it-card">
            <h3>Dados considerados na estratégia</h2>
            <p>Concorrentes, tendências, comportamento de consumo e novas oportunidades. </p>
        </article>

        <div class="market-intelligence-what-is-it-vertical-bar second-bar"></div>

        <article class="market-intelligence-what-is-it-card">
            <h3>Quais são as ferramentas utilizadas?</h2>
            <p>Utilizamos dados e tecnologia para transformar informações em ações concretas, garantindo uma tomada de decisão mais precisa e competitiva.</p>
        </article>
    </section>

    <section class="market-intelligence-main-functions">
        <h2>Principais Funções da Inteligência de Mercado</h2>

        <div class="market-intelligence-main-functions-cards-container">
            <article class="market-intelligence-main-functions-card">
                <h3>Reduzir riscos e identificar tendências</h3>
                <p>Com inteligência de mercado, é possível antecipar mudanças no mercado e identificar novas demandas e nichos. Assim, torna-se mais fácil a tomada de decisões e as incertezas são reduzidas</p>
            </article>

            <article class="market-intelligence-main-functions-card">
                <h3>Aumentar a vantagem competitiva</h3>
                <p>Tomar a liderança em ações mais eficientes e estratégicas dentro do mercado.</p>
            </article>

            <article class="market-intelligence-main-functions-card">
                <h3>Identificar as informações necessárias para a empresa</h3>
                <p>Reunimos dados de fontes confiáveis do mercado e da concorrência.</p>
            </article>

            <article class="market-intelligence-main-functions-card card-hidden"></article>
        </div>

        <div class="market-intelligence-main-functions-lines"></div>

    </section>

    <div class="how-it-works-container">
        <h2>Como funciona o serviço</h2>

        <div class="how-it-works-grid">
            <div class="dots-container">
                <div class="dot">1.</div>
                <div class="dot">2.</div>
                <div class="dot">3.</div>
            </div>
        
            <hr>
        
            <div class="information-container inria-sans-font">
                <div class="dot">1.</div>
                <div>
                    <h1 class="inria-sans-bold">Análise de concorrentes</h1>
                    <p class="inria-sans-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate fermentum massa vel ultricies. Morbi nec augue id lorem eleifend.</p>
                </div>

                <div class="dot">2.</div>
                <div>
                    <h1 class="inria-sans-bold">Análise Territorial</h1>
                    <p class="inria-sans-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate fermentum massa vel ultricies. Morbi nec augue id lorem eleifend.</p>
                </div>

                <div class="dot">3.</div>
                <div>
                    <h1 class="inria-sans-bold">Share de mercado</h1>
                    <p class="inria-sans-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate fermentum massa vel ultricies. Morbi nec augue id lorem eleifend.</p>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; else: ?>
    <p> <?php _e ('Sorry, no posts matched your criteria.'); ?> </p>
    <?php endif; ?>

<?php get_footer(); ?>