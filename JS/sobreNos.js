/* Parte Thales */

/* end parte Thales */

/* Parte Murillo */

/* end parte Murillo */

/* Parte Renan */

// sobreNos.js

// sobreNos.js
// sobreNos.js
// sobreNos.js
window.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll([
    '.grid-container-socio1 img',
    '.grid-container-socio1 .blue-card',
    '.grid-container-socio2 img',
    '.grid-container-socio2 .blue-card',
    '.contact-img',
    '.forms-container h1',
    '.forms-container h2',
    '.contact-form > div',
    '.contact-form .button-container'
  ].join(','));

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity   = '1';
        entry.target.style.transform = 'translateX(0)';
        obs.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px 0px 0px'
  });

  items.forEach(el => {
    el.style.opacity    = '0';
    el.style.transition = 'transform 0.6s ease-out, opacity 0.6s ease-out';

    const baseOffset = window.innerWidth * 0.2;
    let offset;

    if (el.tagName === 'IMG') {
      if (el.closest('.grid-container-socio1')) {
        offset = -baseOffset;
      } else if (el.closest('.grid-container-socio2')) {
        offset = baseOffset;
      } else {
        offset = -baseOffset;
      }
    } else {
      if (el.closest('.grid-container-socio2') && el.classList.contains('blue-card')) {
        offset = -baseOffset;
      } else {
        offset = baseOffset;
      }
    }

    el.style.transform = `translateX(${offset}px)`;
    observer.observe(el);
  });
});

/* end parte Renan */

