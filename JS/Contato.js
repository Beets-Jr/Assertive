window.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll([
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
        offset = -baseOffset;
    }
    else {
        offset = baseOffset;
    }

    el.style.transform = `translateX(${offset}px)`;
    observer.observe(el);
  });
});

/* end parte Renan */