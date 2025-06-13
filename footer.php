<footer>

        <div class="footer-content">
    
            <div class="footer-top">
    
                <div class="info-contato">
                    <p onclick="copiarTexto('(11) 3368-0002', this)">
                        <img class="img-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/telefone-Vector.svg" alt="Telefone">
                        (11) 3368-0002 <span class="copiado-msg"> Copiado! </span>
                    </p>
                    <p onclick="copiarTexto('contato@assertivebrasil.com.br', this)">
                        <img class="img-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/mail-Vector.svg" alt="Email">
                        contato@assertivebrasil.com.br <span class="copiado-msg"> Copiado! </span>
                    </p>
                </div>
    
                <div class="logo-footer">
                    <?php if ( is_page('Início') ) : ?> 
                        <a href="#hero">
                    <?php else : ?>
                        <a href="/">
                    <?php endif; ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-ksnip_20250416-205452-removebg-preview 1.png" alt="Logo Assertive">
                        </a>
                </div>
    
                <div class="redes-sociais">
                    <a href="https://www.instagram.com/assertivebrasil/" target="_blank">
                        <img class="img-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/ig-Icon.svg" alt="Instagram"> @assertivebrasil
                    </a>
                    <a href="https://www.linkedin.com/company/assertivebrasil/" target="_blank">
                        <img class="img-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/linkedin-Icon.svg" alt="LinkedIn"> /company/assertivebrasil
                    </a>
                </div>
    
            </div>
    
            <div class="localizacao-assertive">
                <div class="endereco">
                    <p onclick="copiarTexto('Av. Marquês de São Vicente, 446 - Barra Funda - SP', this)">
                        <img class="img-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/local-Icon.svg" alt="Localização">
                        Av. Marquês de São Vicente, 446 - Barra Funda - SP <span class="copiado-msg"> Copiado! </span>
                    </p>
                </div>
    
                <div class="mapa">
                    <a href="https://www.google.com/maps/dir/-23.5798528,-47.5365376/Av.+Marquês+de+S.+Vicente,+446+-+Várzea+da+Barra+Funda,+São+Paulo+-+SP,+01139-000/"
                        target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/ksnip_20250413-192008 1.png" alt="Mapa da localização" />
                    </a>
                </div>
            </div>
    
        </div>
    
        <div class="footer-bottom">
            <p>© 2025 Assertive. Todos os direitos reservados.</p>
        </div>
    
    </footer>
    <!-- Copie até AQUI para inserir o footer -->

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/JS/header-footer.js"></script>

    <?php wp_footer(); ?>
</body>
</html>
