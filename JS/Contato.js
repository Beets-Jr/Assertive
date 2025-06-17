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

// inicializar EmailJS
emailjs.init("bOhuzH_X9D9DabT8f");

window.onload = function() {
  const form = document.getElementById('contact-form');
  const btn  = form.querySelector('button[type="submit"]');
  // guardamos o texto e as classes originais
  const originalText    = btn.innerText;
  const originalClasses = btn.className;

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    // estado “enviando”
    btn.disabled    = true;
    btn.innerText   = 'Enviando…';
    btn.className   = originalClasses; 

    emailjs.sendForm('contact_service', 'template_wra2fsr', this)
      .then(() => {
        // sucesso
        btn.innerText = 'Mensagem enviada!';
        btn.classList.add('success');
        form.reset();
      })
      .catch(err => {
        console.error('EmailJS error:', err);
        // erro
        btn.innerText = 'Falha ao enviar';
        btn.classList.add('error');
      })
      .finally(() => {
        // volta ao normal depois de 3s
        setTimeout(() => {
          btn.disabled  = false;
          btn.innerText = originalText;
          btn.className = originalClasses;
        }, 3000);
      });
  });
};

/* end parte Renan */