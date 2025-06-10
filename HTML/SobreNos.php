<?php
// Template Name: SobreNos
?>

<?php get_header() ?>

<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>

  <section id="hero">
    <div class="hero-inner">
      <h1 class="hero-title fade-in-left">
        <?php the_field('sobre_nos_hero_title'); ?>
      </h1>
      <div class="hero-content">
        <p>
          <?php the_field('sobre_nos_hero_description'); ?>
        </p>
      </div>
    </div>
  </section>

  <section class="white-section founders">
    <div class="section-title-container">
      <h1 class="section-title">Fundadores</h1>
    </div>

    <div class="grid-container-socio1">
      <img src="../imgs/socio.png" alt="Sócio Renato Caitano, co-fundador">

      <div class="blue-card">
        <div class="title-container">
          <h2 class="inria-sans-bold">
            <?php the_field('sobre_nos_founders_co_founder_name'); ?>
          </h3>
            <h3>Sócio Co-fundador</h3>
        </div>

        <div class="information-container">
          <p>
            <?php the_field('sobre_nos_founders_co_founder_description'); ?>
          </p>
        </div>
      </div>

    </div>

    <div class="grid-container-socio2">
      <div class="blue-card">
        <div class="title-container">
          <h2 class="inria-sans-bold">
            <?php the_field('sobre_nos_founders_founder_name'); ?>
          </h2>
          <h3>Sócia fundadora</h3>
        </div>

        <div class="information-container">
          <p>
            <?php the_field('sobre_nos_founders_founder_description'); ?>
          </p>
        </div>
      </div>
      <img src="../imgs/socia.png" alt="Sócia Larissa Tavares, fundadora">
    </div>
  </section>

  <section class="how-the-work">
    <h2>Como Trabalhamos</h2>

    <div class="how-the-work-cards-container">
      <article class="how-the-work-card">
        <h3>Propósito</h3>
        <p>Nosso objetivo é impulsionar a receita dos clientes por meio da prospecção B2B e inteligência de mercado,
          gerando crescimento de forma significativa.</p>
      </article>

      <article class="how-the-work-card">
        <h3>Responsabilidade</h3>
        <p>Conduzimos a prospecção com foco no cliente e respeito à LGPD, garantindo o uso ético e seguro das
          informações em todo o processo comercial.</p>
      </article>

      <article class="how-the-work-card">
        <h3>Resultados</h3>
        <p>Buscamos gerar resultados concretos e lucrativos, contribuindo diretamente para o crescimento e sucesso dos
          nossos clientes.</p>
      </article>
    </div>

    <button>Conheça nossos serviços</button>
  </section>

  <section class="who-we-are">
    <h2>Quem somos</h2>

    <article class="who-we-are-introduction">
      <p>A Assertive Brasil é uma empresa formada por profissionais com ampla experiência em prospecção de clientes B2B
        e mapeamento de mercado. </p>

      <p>Nossa missão é buscar novas oportunidades de negócios para empresas de diversos portes e segmentos,
        potencializando os resultados comerciais.</p>
    </article>
  </section>

  <section class="mvv">
    <div class="mvv-img-container">
      <img src="../imgs/logo.png" alt="imagem do logo da Assertive" class="mvv-image">

      <div class="mvv-line mvv-first-line"></div>
      <div class="mvv-line mvv-second-line"></div>
      <div class="mvv-line mvv-third-line"></div>
    </div>

    <div class="mvv-cards-container">
      <article class="mvv-card">
        <h3>Missão</h3>
        <p>Criar soluções em relacionamentos comerciais para empresas de todos os portes e potencializar seus
          resultados!</p>
      </article>

      <article class="mvv-card mvv-second-card">
        <h3>Visão</h3>
        <p>Revolucionar o mercado, conectar o máximo de empresas com resultados expressivos!</p>
      </article>

      <article class="mvv-card">
        <h3>Valores</h3>
        <p>Integridade, Respeito, Transparência Resultados</p>
      </article>
    </div>
  </section>

  <aside class="mvv-end-message">
    <p>Transformamos resultados</p>
    <p>Em histórias de sucesso</p>
  </aside>

<?php endwhile; endif; ?>

<?php get_footer() ?>
