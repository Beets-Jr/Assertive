window.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(async (entry) => {
      if (entry.isIntersecting) {
        const initialValue = Number(entry.target.innerHTML);
        let time, increment

        increment = Math.ceil(Math.sqrt(initialValue));

        if (initialValue < 100) time = 100;
        else if (initialValue < 10000) time = 20;
        else time = 5;

        entry.target.innerHTML = 0;

        for (let i = 0; i < initialValue; i += increment) {
            await new Promise(r => setTimeout(() => {
                const newValue = entry.target.innerHTML = i + increment > initialValue
                    ? initialValue
                    : i;
                r(newValue);
            }, time))
        }
      }
    });
  });

  const numbers = document.querySelectorAll([
    '.number',
  ]);

  numbers.forEach((item) => observer.observe(item));
})
