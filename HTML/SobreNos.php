<?php
// Template Name: SobreNos
?>

<?php $home = get_page_by_title('Home'); ?>

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
      <?php
        $co_founder_photo = wp_get_attachment_image_src(get_field('sobre_nos_founders_co_founder_photo_id'), 'large')[0];
      ?>
      <img src="<?php echo $co_founder_photo ?>" alt="Sócio Renato Caitano, co-fundador">

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
      <?php
        $founder_photo = wp_get_attachment_image_src(get_field('sobre_nos_founders_founder_photo_id'), 'large')[0];
      ?>
      <img src="<?php echo $founder_photo ?>" alt="Sócia Larissa Tavares, fundadora">
    </div>
  </section>

  <section class="how-the-work">
    <h2>Como Trabalhamos</h2>

    <ul class="how-the-work-cards-container">
      <?php
        $cards = get_field('sobre_nos_how_the_work_cards');
        if (isset( $cards )): foreach ($cards as $card):
      ?>
        <li class="how-the-work-card">
            <h3><?php echo $card['title'] ?></h3>
            <p><?php echo $card['description'] ?></p>
        </li>
      <?php endforeach; endif; ?>
    </ul>

    <button><?php the_field("sobre_nos_how_the_work_button") ?></button>
  </section>

  <section class="who-we-are">
    <h2>Quem somos</h2>

    <article class="who-we-are-introduction">
      <p><?php the_field("sobre_nos_who_we_are_text") ?></p>
    </article>
  </section>

  <section class="mvv">
    <div class="mvv-img-container">
      <?php
        $logo = wp_get_attachment_image_src(get_field('logo_assertive_id', $home->ID), 'large')[0];
      ?>
      <img src="<?php echo $logo ?>" alt="imagem do logo da Assertive" class="mvv-image">

      <div class="mvv-line mvv-first-line"></div>
      <div class="mvv-line mvv-second-line"></div>
      <div class="mvv-line mvv-third-line"></div>
    </div>

    <ul class="mvv-cards-container">
      <?php
        $coutn = 0;
        $cards = get_field('sobre_nos_who_we_are_cards');
        if (isset( $cards )): foreach ($cards as $card):
      ?>
        <li class="mvv-card <?php if ($count == 1): echo "mvv-second-card"; endif; ?>">
          <h3><?php echo $card['title'] ?></h3>
          <p><?php echo $card['description'] ?></p>
        </li>
      <?php $count++; endforeach; endif; ?>
    </ul>
  </section>

  <aside class="mvv-end-message">
    <p><?php the_field("sobre_nos_end_message_top") ?></p>
    <p><?php the_field("sobre_nos_end_message_bottom") ?></p>
  </aside>

<?php endwhile; endif; ?>

<?php get_footer() ?>
