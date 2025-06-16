    <?php 
        $contato_partial = get_stylesheet_directory() . '/contato.php';
        include $contato_partial;
    ?>
    <!-- Include do Footer -->
    <?php 
        $footer = get_stylesheet_directory() . '/footer-section.php';
        include $footer;
    ?>
    <!-- End Include Footer -->
    
    <?php wp_footer(); ?>
</body>
</html>