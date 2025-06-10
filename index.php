<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/header-footer.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/CSS/Contato.css">

    <!-- Fonte Inria Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Fonte Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
    <!-- Hero (Tahles) -->
    <!-- End Hero -->

    <!-- Video Murillo (Em stand by por enquanto) -->
    <!-- End video -->

    <?php get_header(); ?>

    
    
    <?php get_footer(); ?>
    
    <?php wp_footer(); ?>
</body>
</html>