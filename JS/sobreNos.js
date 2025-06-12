/* Parte Thales */

window.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && window.innerWidth < 1200) {
        entry.target.classList.add('flip-card-animation');
      } else if (!entry.isIntersecting && window.innerWidth < 1200) {
        entry.target.classList.remove('flip-card-animation');
      }
    });
  });

  const items = document.querySelectorAll([
    '.card-inner'
  ]);

  items.forEach((item) => observer.observe(item))
})

/* end parte Thales */

/* Parte Murillo */

window.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible-block-animation');
      }
    });
  });

  observer.observe(document.querySelector([
    '.who-we-are-introduction'
  ]));
})

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
    '.contact-form .button-container',
    '.mvv-card',
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

