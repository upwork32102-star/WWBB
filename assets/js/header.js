document.addEventListener("DOMContentLoaded", () => {
    const siteHeader = document.getElementById("siteHeader");
    const menuToggle = document.getElementById("menuToggle");
    const menuClose = document.getElementById("menuClose");
    const offcanvasMenu = document.getElementById("offcanvasMenu");
    const menuOverlay = document.getElementById("menuOverlay");

    function handleHeaderScroll() {
        if (!siteHeader) return;

        if (window.scrollY > 40) {
            siteHeader.classList.add("scrolled");
        } else {
            siteHeader.classList.remove("scrolled");
        }
    }

    handleHeaderScroll();
    window.addEventListener("scroll", handleHeaderScroll, { passive: true });

    function openMenu() {
        if (!offcanvasMenu || !menuOverlay) return;
        offcanvasMenu.classList.add("active");
        menuOverlay.classList.add("active");
        document.body.classList.add("menu-open");
    }

    function closeMenu() {
        if (!offcanvasMenu || !menuOverlay) return;
        offcanvasMenu.classList.remove("active");
        menuOverlay.classList.remove("active");
        document.body.classList.remove("menu-open");
    }

    if (menuToggle) menuToggle.addEventListener("click", openMenu);
    if (menuClose) menuClose.addEventListener("click", closeMenu);
    if (menuOverlay) menuOverlay.addEventListener("click", closeMenu);

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeMenu();
        }
    });
});
/* ===============================
   Scroll To Top
================================ */

document.addEventListener("DOMContentLoaded", () => {
    const scrollTopBtn = document.getElementById("wwbbScrollTop");

    if (!scrollTopBtn) return;

    function toggleScrollTop() {
        if (window.scrollY > 500) {
            scrollTopBtn.classList.add("show");
        } else {
            scrollTopBtn.classList.remove("show");
        }
    }

    window.addEventListener("scroll", toggleScrollTop, { passive: true });

    scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    toggleScrollTop();
});