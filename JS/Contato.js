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


window.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  const btn  = form.querySelector('button[type="submit"]');
  const originalText = btn.innerText;

  form.addEventListener('submit', async e => {
    e.preventDefault();              // para não navegar
    btn.disabled = true;
    btn.innerText = 'Enviando…';

    // coleta dos campos do form
    const data = Object.fromEntries(new FormData(form));

    try {
      const res = await fetch('/enviar', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
      });

      if (!res.ok) throw new Error(res.statusText);

      // sucesso
      btn.innerText = '✔ Enviado!';
      form.reset();
    } catch (err) {
      console.error(err);
      btn.innerText = '✖ Falha ao enviar';
    } finally {
      setTimeout(() => {
        btn.disabled  = false;
        btn.innerText = originalText;
      }, 3000);
    }
  });
});


/* end parte Renan */