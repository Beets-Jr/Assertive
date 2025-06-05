window.addEventListener('DOMContentLoaded', () => {
    const videoContainer = document.querySelector(['.video']);

    [
        {top: '75px', left: '4%'},
        {bottom: '75px', left: '6%'},
        {top: '150px', left: '20%'},
        {top: '100px', right: '12%'},
        {bottom: '100px', right: '7%'},
    ].forEach((item) => {
        const circle = document.createElement('div');
        circle.classList.add('video-background-circle');
        Object.entries(item).forEach(([key, value]) => {
            circle.style[key] = value;
        })

        videoContainer.appendChild(circle);
    });
})
