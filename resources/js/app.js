import './bootstrap';

const toggle = document.querySelector('[data-menu-toggle]');
const menu = document.querySelector('[data-menu]');

if (toggle && menu) {
    toggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });
}

// Subtle reveal for content blocks; respects reduced-motion preferences.
if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const targets = document.querySelectorAll('.service-card, .about-photo, .form-panel');
    targets.forEach((target) => {
        target.style.opacity = '0';
        target.style.transform = 'translateY(16px)';
        target.style.transition = 'opacity .55s ease, transform .55s ease';
    });
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    targets.forEach((target) => observer.observe(target));
}
