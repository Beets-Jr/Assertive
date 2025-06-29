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
            <?php if ( is_page('Home') ) : ?> 
                <a href="#hero">
            <?php else : ?>
                <a href="/">
            <?php endif; ?>
            <img src="<?php the_field ('logo_header', $header_id); ?>"> 
            </a> 
        </div>
        
        <div class="menu-toggle">
            &#9776;  <!-- símbolo de 3 barrinhas -->
        </div>
            <nav>
                <?php if ( is_page('Home') ) : ?>
                    <a href="#hero"><?php the_field ('item_1', $header_id); ?></a>
                <?php else : ?>
                    <a href="/"><?php the_field ('item_1', $header_id); ?> </a>
                <?php endif; ?>

                <a href="/sobrenos/"> <?php the_field ('item_2', $header_id); ?> </a>
                <a href="/#servicos"> <?php the_field ('item_3', $header_id); ?> </a>
                <a href="#contato"> <?php the_field ('item_4', $header_id); ?> </a>
            </nav>
        </header>

        <!-- escurecer ao dar toggle no menu mobile-->
        <div class="overlay"> </div>
