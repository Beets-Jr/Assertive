/* Parte Thales */

/* end parte Thales */

/* Parte Murillo */

/* end parte Murillo */

/* Parte Renan */

// sobreNos.js

window.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        // adiciona transição e leva ao estado final
        el.style.transition = 'opacity 0.9s ease-out, transform 0.9s ease-out';
        el.style.opacity    = '1';
        el.style.transform  = 'translateX(0)';
        obs.unobserve(el);
      }
    });
  }, {
    threshold: 0.1  // quando 10% do elemento aparecer na viewport
  });

  // Seleciona cada item e define o deslocamento inicial
  const deslocamento = 600
  const itensAnima = [
    {
      el: document.querySelector('.grid-container-socio1 img'),
      from: `-${deslocamento}px`    // entra da esquerda
    },
    {
      el: document.querySelector('.grid-container-socio1 .blue-card'),
      from: `${deslocamento}px`     // entra da direita
    },
    {
      el: document.querySelector('.grid-container-socio2 .blue-card'),
      from: `-${deslocamento}px`    // entra da esquerda
    },
    {
      el: document.querySelector('.grid-container-socio2 img'),
      from: `${deslocamento}px`     // entra da direita
    }
  ];

  // Aplicar o estado inicial (fora da tela)
  itensAnima.forEach(item => {
    if (!item.el) return; 
    item.el.style.opacity   = '0';
    item.el.style.transform = `translateX(${item.from})`;
    observer.observe(item.el);
  });
});

/* end parte Renan */

