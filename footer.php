  <div class="contact-spacing"></div>

  <section class="blue-bg">
    <img class="contact-img" src="../imgs/foto-contato.png" alt="">

    <div class="contact-section">

      <div class="forms-container">
        <h1><span>Chegou a hora de </span><br> escalar seus resultados</h1>
        <h2>Fale com nossos <span>especialistas!</span></h2>

        <form class="contact-form" action="" method="POST">
          <div>
            <label for="nome">Nome</label>
            <br>
            <input type="text" id="nome" placeholder="Informe seu nome" name="nome" required>
          </div>

          <div>
            <label for="email">E-mail</label>
            <br>
            <input type="email" id="email" placeholder="Informe um email para contato" name="email" required>
          </div>

          <div>
            <label for="celphone">Celular</label>
            <br>
            <input type="tel" id="celphone" placeholder="Informe um celular para contato" name="celphone" required>
          </div>

          <div>
            <label for="mensagem">Mensagem</label>
            <br>
            <textarea id="mensagem" name="mensagem" placeholder="Conte-nos mais sobre sua empresa e o serviço buscado"
              rows="5" required></textarea>
          </div>

          <div class="button-container">
            <button type="submit">Enviar</button>
          </div>
        </form>
      </div>

    </div>
  </section>

  <footer>
    <div class="footer-content">

      <div class="footer-top">

        <div class="info-contato">
          <p onclick="copiarTexto('(11) 3368-0002', this)">
            <img class="img-icon" src="../imgs/telefone-Vector.svg" alt="Telefone">
            (11) 3368-0002 <span class="copiado-msg"> Copiado! </span>
          </p>
          <p onclick="copiarTexto('contato@assertivebrasil.com.br', this)">
            <img class="img-icon" src="../imgs/mail-Vector.svg" alt="Email">
            contato@assertivebrasil.com.br <span class="copiado-msg"> Copiado! </span>
          </p>
        </div>

        <div class="logo-footer">
          <a href="Home.html">
            <img src="../imgs/logo-ksnip_20250416-205452-removebg-preview 1.png" alt="Logo Assertive">
          </a>
        </div>

        <div class="redes-sociais">
          <a href="https://www.instagram.com/assertivebrasil/" target="_blank">
            <img class="img-icon" src="../imgs/ig-Icon.svg" alt="Instagram"> @assertivebrasil
          </a>
          <a href="https://www.linkedin.com/company/assertivebrasil/" target="_blank">
            <img class="img-icon" src="../imgs/linkedin-Icon.svg" alt="LinkedIn"> /company/assertivebrasil
          </a>
        </div>

      </div>

      <div class="localizacao-assertive">
        <div class="endereco">
          <p onclick="copiarTexto('Av. Marquês de São Vicente, 446 - Barra Funda - SP', this)">
            <img class="img-icon" src="../imgs/local-Icon.svg" alt="Localização">
            Av. Marquês de São Vicente, 446 - Barra Funda - SP <span class="copiado-msg"> Copiado! </span>
          </p>
        </div>

        <div class="mapa">
          <a href="https://www.google.com/maps/dir/-23.5798528,-47.5365376/Av.+Marquês+de+S.+Vicente,+446+-+Várzea+da+Barra+Funda,+São+Paulo+-+SP,+01139-000/"
            target="_blank">
            <img src="../imgs/ksnip_20250413-192008 1.png" alt="Mapa da localização" />
          </a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© 2025 Assertive. Todos os direitos reservados.</p>
    </div>
  </footer>

	<?php wp_footer(); ?>
</body>

</html>
