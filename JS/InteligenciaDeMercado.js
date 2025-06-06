window.addEventListener('DOMContentLoaded', () => {
  const observer1 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible-by-left-block-animation');
      }
    });
  });

  const observer2 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('expand-animation');
      }
    });
  });

  const turnVisibleElements = document.querySelectorAll([
    '.market-intelligence-what-is-it-card',
    '.market-intelligence-hero-title',
  ]);

  const lines = document.querySelectorAll([
    '.market-intelligence-main-functions-lines',
  ])

  turnVisibleElements.forEach((item) => observer1.observe(item));
  lines.forEach((item) => observer2.observe(item));
})

function navigateToContact (e) {
  const contact = document.getElementById('contact');
  contact.scrollIntoView({ behavior: 'smooth' });
}