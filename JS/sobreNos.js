/* Parte Thales */
function copiarTexto (texto, elemento) {
  navigator.clipboard.writeText(texto).then(() => {
    const msg = elemento.querySelector('.copiado-msg');
    msg.style.display = 'inline';
    setTimeout(() => {
      msg.style.display = 'none';
    }, 1500);
  }).catch (err => {
    console.error('Erro ao copiar: ', err);
  });
}

const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.scrollY <= 50) {
        header.classList.add('header-transparent');
    } else {
        header.classList.remove('header-transparent');
    }
});

const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('header nav');

  menuToggle.addEventListener('click', () => {
    nav.classList.toggle('show');
  });

/* end parte Thales */

/* Parte Murillo */

/* end parte Murillo */

/* Parte Renan */

/* end parte Renan */

