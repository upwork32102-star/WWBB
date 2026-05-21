/* ===============================
   SAFE LENIS SMOOTH SCROLL
================================ */

if (typeof Lenis !== "undefined") {
    const lenis = new Lenis({
        duration: 1.35,
        smoothWheel: true,
        wheelMultiplier: 0.85,
        touchMultiplier: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
}


/* ===============================
   SCROLL REVEAL ANIMATION
================================ */

const revealItems = document.querySelectorAll(".reveal, .reveal-left, .reveal-right");

if (revealItems.length > 0) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: "0px 0px -70px 0px"
    });

    revealItems.forEach((item) => {
        revealObserver.observe(item);
    });
}