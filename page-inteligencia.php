  <?php 
  // Template Name: Inteligência de Mercado
  ?>

  <?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php 
    $posicao = get_field('posicao_cor_imagem_hero');
  ?>
  
<section class="market-intelligence-hero"
    style="
        --hero-background-image: url('<?php echo esc_url( get_field('imagem_hero') ); ?>');
        --hero-gradient-start: <?php echo esc_attr( get_field('cor_imagem_hero_1') ?: '#02052F' ); ?>;
        --hero-gradient-end: <?php echo esc_attr( get_field('cor_imagem_hero_2') ?: '#06090E' ); ?>;
        --hero-gradient-position: <?php echo intval($posicao); ?>%;
    "
>

        <div class="market-intelligence-hero-content">
            <h1 class="market-intelligence-hero-title"> <?php the_field ('titulo'); ?> </h1>

            <p> <?php echo get_post_meta(get_the_ID(), 'chamada-hero', true); ?> </p>

            <button type="button" onclick="document.getElementById('contato').scrollIntoView({behavior: 'smooth'})">
                <?php the_field('chamada-hero-button'); ?>
            </button>
        </div>
    </section>

    <section class="market-intelligence-what-is-it">
        <article class="market-intelligence-what-is-it-card">
            <h3> <?php the_field ('titulo_1st_sqr'); ?> </h2>
            <p> <?php the_field ('texto_sqr_1'); ?> </p>
        </article>

        <div class="market-intelligence-what-is-it-vertical-bar first-bar"></div>

        <article class="market-intelligence-what-is-it-card">
            <h3> <?php the_field ('titulo_2nd_sqr'); ?> </h2>
            <p> <?php the_field ('texto_sqr_2'); ?> </p>
        </article>

        <div class="market-intelligence-what-is-it-vertical-bar second-bar"></div>

        <article class="market-intelligence-what-is-it-card">
            <h3> <?php the_field ('titulo_3rd_sqr'); ?> </h2>
            <p> <?php the_field ('texto_sqr_3'); ?> </p>
        </article>
    </section>

    <section 
        class="market-intelligence-main-functions" 
        style="background-image: url('<?php echo esc_url( get_field('imagem_funcoes') ); ?>');"
    >
        <h2> <?php the_field ('titulo_funcoes'); ?> </h2>

        <div class="market-intelligence-main-functions-cards-container">
            <article class="market-intelligence-main-functions-card">
                <h3> <?php the_field ('frase_funcoes_2'); ?> </h3>
                <p> <?php the_field ('texto_funcoes_2'); ?> </p>
            </article>

            <article class="market-intelligence-main-functions-card">
                <h3> <?php the_field ('frase_funcoes_3'); ?> </h3>
                <p> <?php the_field ('texto_funcoes_3'); ?> </p>
            </article>

            <article class="market-intelligence-main-functions-card">
                <h3> <?php the_field ('frase_funcoes_1'); ?> </h3>
                <p> <?php the_field ('texto_funcoes_1'); ?> </p>
            </article>

            <article class="market-intelligence-main-functions-card card-hidden"></article>
        </div>

        <div class="market-intelligence-main-functions-lines"></div>

    </section>

    <div class="how-it-works-container">
        <h2> <?php the_field ('titulo_etapas'); ?> </h2>

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
                    <h1 class="inria-sans-bold"> <?php the_field ('titulo_etapa_1'); ?> </h1>
                    <p class="inria-sans-regular"> <?php the_field ('texto_etapa_1'); ?> </p>
                </div>

                <div class="dot">2.</div>
                <div>
                    <h1 class="inria-sans-bold"> <?php the_field ('titulo_etapa_2'); ?> </h1>
                    <p class="inria-sans-regular"> <?php the_field ('texto_etapa_2'); ?> </p>
                </div>

                <div class="dot">3.</div>
                <div>
                    <h1 class="inria-sans-bold"> <?php the_field ('titulo_etapa_3'); ?> </h1>
                    <p class="inria-sans-regular"> <?php the_field ('texto_etapa_3'); ?> </p>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; else: ?>
    <p> <?php _e ('Sorry, no posts matched your criteria.'); ?> </p>
    <?php endif; ?>

<?php get_footer(); ?>