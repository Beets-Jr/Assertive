const observer = new IntersectionObserver(entries => {
  entries.forEach(async (entry) => {
    if (entry.isIntersecting) {
      const targetElement = entry.target;
      const finalValue = Number(targetElement.getAttribute('data-value'));
      let time, increment;

      increment = finalValue / 20;

      time = 50

      for (let i = 0; i <= finalValue; i += increment) {
        await new Promise(r => setTimeout(() => {
          const value = i + increment > finalValue ? finalValue : i;
          targetElement.innerHTML = '+' + value.toLocaleString('pt-BR');
          r();
        }, time));
      }
    }
  });
});

const numbers = document.querySelectorAll('.number');
numbers.forEach (item => {
  const value = parseInt(item.textContent);
  item.setAttribute('data-value', value);
  item.textContent = '0'; 
  observer.observe(item);
});

document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    card.addEventListener('click', (e) => {
      if (!e.currentTarget.classList.contains('is-flipped')) {
        cards.forEach(c => c.classList.remove('is-flipped'));
      }
      e.currentTarget.classList.toggle('is-flipped');
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll([
    '.card-inner'
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
