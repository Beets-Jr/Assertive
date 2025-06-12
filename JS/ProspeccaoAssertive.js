document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll([
    '.hero-content',
    '.grid-section img',
    '.grid-section div',
    '.bigger-grid-section img',
    '.bigger-grid-section div',
    '.information-container .dot',
    '.information-container div'
  ].join(','));

  elements.forEach(el => {
    el.classList.add('reveal');

    if (el.classList.contains('left'))   el.classList.add('from-left');
    if (el.classList.contains('right'))  el.classList.add('from-right');
  });

  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        obs.unobserve(entry.target);         
      }
    });
  }, { threshold: 0.10 });

  elements.forEach(el => io.observe(el));
});
