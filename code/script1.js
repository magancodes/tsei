document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('toggle');
    });

    // Animate hero text on load
    const heroTextElements = document.querySelectorAll('.hero-text .animated');
    heroTextElements.forEach((element, index) => {
        element.style.animationDelay = `${index * 0.5}s`;
        element.classList.add('fadeInUp');
    });
});
