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
// common idea: https://dribbble.com/shots/20364660-Nibble-Health-Identity-Social-Posting
// carousel animation: https://codepen.io/aija/details/xvXWoK

let CHECKED = false;
document.addEventListener("pointerdown", (e) => {
	CHECKED = !CHECKED;
	document.documentElement.style.setProperty("--light", CHECKED ? 1 : 0);
});
