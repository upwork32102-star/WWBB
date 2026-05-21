document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".venues-hero-slide");
    const count = document.getElementById("venueCurrentSlide");

    if (!slides.length) return;

    let current = 0;

    function showVenueSlide(index) {
        slides.forEach((slide) => slide.classList.remove("active"));
        slides[index].classList.add("active");

        if (count) {
            count.textContent = String(index + 1).padStart(2, "0");
        }
    }

    setInterval(() => {
        current = (current + 1) % slides.length;
        showVenueSlide(current);
    }, 4200);
});