window.addEventListener('DOMContentLoaded', () => {
    const videoContainer = document.querySelector(['.video']);

    [
        {top: '5rem', left: '4%'},
        {bottom: '5rem', left: '6%'},
        {top: '10rem', left: '20%'},
        {top: '7rem', right: '12%'},
        {bottom: '7rem', right: '7%'},
    ].forEach((item) => {
        const circle = document.createElement('div');
        circle.classList.add('video-background-circle');
        Object.entries(item).forEach(([key, value]) => {
            circle.style[key] = value;
        })

        videoContainer.appendChild(circle);
    });
})
