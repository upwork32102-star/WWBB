const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".slider-dot");
const currentSlide = document.getElementById("currentSlide");
const nextSlide = document.getElementById("nextSlide");
const prevSlide = document.getElementById("prevSlide");

let activeIndex = 0;
let autoPlay;

function numberFormat(index) {
    return index + 1 < 10 ? `0${index + 1}` : `${index + 1}`;
}

function showSlide(index) {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    dots.forEach((dot) => {
        dot.classList.remove("active");
    });

    slides[index].classList.add("active");
    dots[index].classList.add("active");

    if (currentSlide) {
        currentSlide.textContent = numberFormat(index);
    }

    activeIndex = index;
}

function goNext() {
    let nextIndex = activeIndex + 1;

    if (nextIndex >= slides.length) {
        nextIndex = 0;
    }

    showSlide(nextIndex);
}

function goPrev() {
    let prevIndex = activeIndex - 1;

    if (prevIndex < 0) {
        prevIndex = slides.length - 1;
    }

    showSlide(prevIndex);
}

function startAutoPlay() {
    autoPlay = setInterval(goNext, 5500);
}

function resetAutoPlay() {
    clearInterval(autoPlay);
    startAutoPlay();
}

if (nextSlide) {
    nextSlide.addEventListener("click", () => {
        goNext();
        resetAutoPlay();
    });
}

if (prevSlide) {
    prevSlide.addEventListener("click", () => {
        goPrev();
        resetAutoPlay();
    });
}

dots.forEach((dot) => {
    dot.addEventListener("click", () => {
        const index = Number(dot.getAttribute("data-slide"));
        showSlide(index);
        resetAutoPlay();
    });
});

startAutoPlay();