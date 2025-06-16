<?php
// Template Name: SobreNos
?>

<?php $home = get_page_by_title('Home'); ?>

<?php get_header() ?>

<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>

  <section id="sobreNos-hero">
    <div class="sobreNos-hero-inner">
      <h1 class="sobreNos-hero-title sobreNos-fade-in-left">
        <?php the_field('sobre_nos_hero_title'); ?>
      </h1>
      <div class="sobreNos-hero-content">
        <p>
          <?php the_field('sobre_nos_hero_description'); ?>
        </p>
      </div>
    </div>
  </section>

  <section class="sobreNos-white-section sobreNos-founders">
    <div class="sobreNos-section-title-container">
      <h1 class="sobreNos-section-title">Fundadores</h1>
    </div>

    <div class="sobreNos-grid-container-socio1">
      <?php
        $co_founder_photo = wp_get_attachment_image_src(get_field('sobre_nos_founders_co_founder_photo_id'), 'large')[0];
      ?>
      <img src="<?php echo $co_founder_photo ?>" alt="Sócio Renato Caitano, co-fundador">

      <div class="sobreNos-card-container">
        <div class="sobreNos-card-inner">
          <div class="sobreNos-card sobreNos-front-card">
            <h2 class="sobreNos-inria-sans-bold">
              <?php the_field('sobre_nos_founders_co_founder_name'); ?>
            </h2>
            <h3>Sócio Co-fundador</h3>
          </div>

          <div class="sobreNos-card sobreNos-back-card">
            <div class="sobreNos-title-back-card">
              <h2 class="sobreNos-inria-sans-bold">
                <?php the_field('sobre_nos_founders_co_founder_name'); ?>
              </h2>
              <h3>Sócio Co-fundador</h3>
            </div>
            <p>
              <?php the_field('sobre_nos_founders_co_founder_description'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="sobreNos-grid-container-socio2">
      <div class="sobreNos-card-container">
        <div class="sobreNos-card-inner">
          <div class="sobreNos-card sobreNos-front-card">
            <h2 class="sobreNos-inria-sans-bold">
              <?php the_field('sobre_nos_founders_founder_name'); ?>
            </h2>
            <h3>Sócia fundadora</h3>
          </div>

          <div class="sobreNos-card sobreNos-back-card">
            <div class="sobreNos-title-back-card">
              <h2 class="sobreNos-inria-sans-bold">
                <?php the_field('sobre_nos_founders_founder_name'); ?>
              </h2>
              <h3>Sócia fundadora</h3>
            </div>
            <p>
              <?php the_field('sobre_nos_founders_founder_description'); ?>
            </p>
          </div>
        </div>
      </div>

      <?php
        $founder_photo = wp_get_attachment_image_src(get_field('sobre_nos_founders_founder_photo_id'), 'large')[0];
      ?>
      <img src="<?php echo $founder_photo ?>" alt="Sócia Larissa Tavares, fundadora">
    </div>
  </section>

  <section class="sobreNos-how-the-work">
    <h2>Como Trabalhamos</h2>

    <ul class="sobreNos-how-the-work-cards-container">
      <?php
        $cards = get_field('sobre_nos_how_the_work_cards');
        if (isset( $cards )): foreach ($cards as $card):
      ?>
        <li class="sobreNos-how-the-work-card">
            <h3><?php echo $card['title'] ?></h3>
            <p><?php echo $card['description'] ?></p>
        </li>
      <?php endforeach; endif; ?>
    </ul>

    <button onClick="sobreNos_showServices()">
      <?php the_field("sobre_nos_how_the_work_button") ?>
    </button>
  </section>

  <section class="sobreNos-who-we-are">
    <h2>Quem somos</h2>

    <article class="sobreNos-who-we-are-introduction">
      <p><?php the_field("sobre_nos_who_we_are_text") ?></p>
    </article>
  </section>

<section class="sobreNos-mvv">
  <div class="sobreNos-mvv-img-container">
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/imgs/logo-ksnip_20250416-205452-removebg-preview 1.png' ); ?>" alt="imagem do logo da Assertive" class="sobreNos-mvv-image">
    <div class="sobreNos-mvv-line sobreNos-mvv-first-line"></div>
    <div class="sobreNos-mvv-line sobreNos-mvv-second-line"></div>
    <div class="sobreNos-mvv-line sobreNos-mvv-third-line"></div>
  </div>

  <ul class="sobreNos-mvv-cards-container">
    <?php
      $count = 0;

      $cards = get_field('sobre_nos_who_we_are_cards');
      if ($cards) :
        foreach ($cards as $card) :
    ?>
      <li class="sobreNos-mvv-card <?php if ($count == 1) echo "sobreNos-mvv-second-card"; ?>"> 
        <h3><?php echo esc_html( $card['title'] ); ?> </h3>
        <p><?php echo esc_html( $card['description'] ); ?> </p>
      </li>
    <?php
        $count++;
      endforeach;
    endif;
    ?>
  </ul>
</section>

  <aside class="sobreNos-mvv-end-message">
    <p><?php the_field("sobre_nos_end_message_top") ?></p>
    <p><?php the_field("sobre_nos_end_message_bottom") ?></p>
  </aside>

<?php endwhile; endif; ?>



<?php get_footer() ?>
