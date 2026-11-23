import './bootstrap';

// Smooth Scroll Reveal Engine using IntersectionObserver
document.addEventListener('DOMContentLoaded', () => {
    // Triggers strictly after user scrolls into the section (not at top)
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -80px 0px',
        threshold: 0.18,
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-on-scroll').forEach(el => {
        revealObserver.observe(el);
    });

    // Support dynamic elements or Livewire page refreshes
    document.addEventListener('livewire:navigated', () => {
        document.querySelectorAll('.reveal-on-scroll:not(.is-revealed)').forEach(el => {
            revealObserver.observe(el);
        });
    });
});
