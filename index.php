<?php get_header() ?>

<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
  <section class="container">
    <h1 class="subtitulo"><?php the_title(); ?></h1>
    <div style="color: white; text-align: center">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; else : ?>
  <section class="container" style="color: white; text-align: center">
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  </section>
<?php endif; ?>

<?php get_footer() ?>
