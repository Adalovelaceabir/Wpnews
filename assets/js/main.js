// Loading Animation
window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }
});

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('#primary-menu');

    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function() {
            primaryMenu.classList.toggle('toggled');
            const expanded = menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true';
            menuToggle.setAttribute('aria-expanded', expanded);
        });
    }
});
