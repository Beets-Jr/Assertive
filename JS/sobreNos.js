/* Parte Thales */

window.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && window.innerWidth < 1200) {
        entry.target.classList.add('sobreNos-flip-card-animation');
      } else if (!entry.isIntersecting && window.innerWidth < 1200) {
        entry.target.classList.remove('sobreNos-flip-card-animation');
      }
    });
  });

  const items = document.querySelectorAll([
    '.sobreNos-card-inner'
  ]);

  items.forEach((item) => observer.observe(item))
})

/* end parte Thales */

/* Parte Murillo */

window.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('sobreNos-visible-block-animation');
      }
    });
  });

  observer.observe(document.querySelector([
    '.sobreNos-who-we-are-introduction'
  ]));
})

document.addEventListener("mouseup", function(event) {
  const dropdownMenu = document.getElementsByClassName('dropdown-menu')[0];

  if (!dropdownMenu.contains(event.target)) {
  dropdownMenu.classList.remove("dropdown-hover-forced");
  }
});

/* end parte Murillo */

/* Parte Renan */
window.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll([
    '.sobreNos-grid-container-socio1 img',
    '.sobreNos-grid-container-socio1 .sobreNos-blue-card',
    '.sobreNos-grid-container-socio2 img',
    '.sobreNos-grid-container-socio2 .sobreNos-blue-card',
    '.sobreNos-contact-img',
    '.sobreNos-forms-container h1',
    '.sobreNos-forms-container h2',
    '.sobreNos-contact-form > div',
    '.sobreNos-contact-form .sobreNos-button-container',
    '.sobreNos-mvv-card',
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
      if (el.closest('.sobreNos-grid-container-socio1')) {
        offset = -baseOffset;
      } else if (el.closest('.sobreNos-grid-container-socio2')) {
        offset = baseOffset;
      } else {
        offset = -baseOffset;
      }
    } else {
      if (el.closest('.sobreNos-grid-container-socio2') && el.classList.contains('sobreNos-blue-card')) {
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
