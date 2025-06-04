/* funcionalidades para header transparente e aberturas de menus / dropdowns inclusive mobile */

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
const overlay = document.querySelector('.overlay');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('show');
    overlay.classList.toggle('active');
});

overlay.addEventListener('click', () => {
    nav.classList.remove('show');
    overlay.classList.remove('active');
});

document.addEventListener('DOMContentLoaded', function() {
  const dropdown = document.querySelector('.js-dropdown');
  const btn = document.querySelector('.js-dropbtn');

  btn.addEventListener('click', function(e) {
    const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    if (viewportWidth <= 768) {
      e.preventDefault();        // impede a âncora de rolar a página
      dropdown.classList.toggle('open');
    }
  });

  document.addEventListener('click', function(e) {
    const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    if (viewportWidth <= 768) {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('open');
      }
    }
  });

  window.addEventListener('resize', function() {
    const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    if (viewportWidth > 768) {
      dropdown.classList.remove('open');
    }
  });
});

/* funcionalidade para copiar facilmente dados de contato no footer */

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