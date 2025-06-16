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
    <?php
    elseif ( is_page('SobreNos') ) : 
    ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/sobreNos.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/sobreNosTransicoes.css">
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

    <!-- Include da Header -->
    <?php 
        $header = get_stylesheet_directory() . '/header-section.php';
        include $header;
    ?>
    <!-- End Include Header -->