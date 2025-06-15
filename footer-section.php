<?php
// Template Name: Footer
?>

<?php 
        if ( empty( $footer_id ) ) {
            $footer_page = get_page_by_path( 'footer' );
            $footer_id   = $footer_page ? $footer_page->ID : get_the_ID();
        }
?>

<footer>
        <div class="footer-content">
    
            <div class="footer-top">
    
                <div class="info-contato">
                    <p onclick="copiarTexto('<?php the_field ('call_number', $footer_id); ?>', this)">
                        <img class="img-icon" src="<?php the_field ('call_footer', $footer_id); ?>" alt="Telefone">
                        <?php the_field ('call_number', $footer_id); ?> <span class="copiado-msg"> Copiado! </span>
                    </p>
                    <p onclick="copiarTexto('<?php the_field ('mail_address', $footer_id); ?>', this)">
                        <img class="img-icon" src="<?php the_field ('mail_footer', $footer_id); ?>" alt="Email">
                        <?php the_field ('mail_address', $footer_id); ?> <span class="copiado-msg"> Copiado! </span>
                    </p>
                </div>
    
                <div class="logo-footer">
                    <a href="/">
                        <img src="<?php the_field ('logo_footer', $footer_id); ?>" alt="Logo Assertive">
                    </a>
                </div>
    
                <div class="redes-sociais">
                    <a href="<?php the_field ('link_social_1', $footer_id); ?>" target="_blank">
                        <img class="img-icon" src="<?php the_field ('icon_social_1', $footer_id); ?>" alt="Instagram"> @assertivebrasil
                    </a>
                    <a href="<?php the_field ('link_social_2', $footer_id); ?>" target="_blank">
                        <img class="img-icon" src="<?php the_field ('icon_social_2', $footer_id); ?>" alt="Linkedin"> /company/assertivebrasil
                    </a>
                </div>
    
            </div>
    
            <div class="localizacao-assertive">
                <div class="endereco">
                    <p onclick="copiarTexto('<?php the_field ('address_footer', $footer_id); ?>', this)">
                        <img class="img-icon" src="<?php the_field ('icon_local_footer', $footer_id); ?>" alt="Localização">
                        <?php the_field ('address_footer', $footer_id); ?> <span class="copiado-msg"> Copiado! </span>
                    </p>
                </div>
    
                <div class="mapa">
                    <a href="<?php the_field ('map_address_footer', $footer_id); ?>"
                        target="_blank">
                        <img src="<?php the_field ('icon_map_footer', $footer_id); ?>" alt="Mapa da localização" />
                    </a>
                </div>
            </div>
    
        </div>
    
        <div class="footer-bottom">
            <p> <?php the_field ('bottom_text_footer', $footer_id); ?> </p>
        </div>
</footer>