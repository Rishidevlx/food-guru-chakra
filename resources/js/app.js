import './bootstrap';

// Smooth Scroll Reveal Engine & Interactive Counters using IntersectionObserver
document.addEventListener('DOMContentLoaded', () => {
    // Triggers strictly after user scrolls into the section (not at top)
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -80px 0px',
        threshold: 0.18,
    };

    function startCounterAnimation(el) {
        if (!el || el.dataset.animated === 'true') return;
        el.dataset.animated = 'true';

        const target = parseInt(el.getAttribute('data-counter'), 10) || 0;
        const suffix = el.getAttribute('data-counter-suffix') || '';
        const prefix = el.getAttribute('data-counter-prefix') || '';
        const duration = parseInt(el.getAttribute('data-counter-duration'), 10) || 2400; // Slow, smooth & premium

        const startTime = performance.now();

        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Smooth cubic ease out
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const currentVal = Math.floor(easeOut * target);

            el.textContent = `${prefix}${currentVal}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                el.textContent = `${prefix}${target}${suffix}`;
            }
        }

        requestAnimationFrame(updateCounter);
    }

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);

                // When scroll reveal triggers, find any counters inside and trigger animation after reveal transition begins
                const counters = entry.target.querySelectorAll('[data-counter]');
                if (counters.length > 0) {
                    setTimeout(() => {
                        counters.forEach(counter => startCounterAnimation(counter));
                    }, 400); // Wait for the reveal fade-in before slowly counting up
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-on-scroll').forEach(el => {
        revealObserver.observe(el);
    });

    // Also observe standalone counters directly if not wrapped in reveal-on-scroll
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    startCounterAnimation(entry.target);
                }, 400);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('[data-counter]').forEach(el => {
        if (!el.closest('.reveal-on-scroll')) {
            counterObserver.observe(el);
        }
    });

    // Support dynamic elements or Livewire page refreshes
    document.addEventListener('livewire:navigated', () => {
        document.querySelectorAll('.reveal-on-scroll:not(.is-revealed)').forEach(el => {
            revealObserver.observe(el);
        });
        document.querySelectorAll('[data-counter]:not([data-animated="true"])').forEach(el => {
            if (!el.closest('.reveal-on-scroll')) {
                counterObserver.observe(el);
            }
        });
    });
});
