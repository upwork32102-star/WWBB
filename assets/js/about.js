document.addEventListener("DOMContentLoaded", () => {
    const timeline = document.querySelector(".wwbb-timeline");
    const progress = document.querySelector(".wwbb-timeline-progress");
    const items = document.querySelectorAll(".wwbb-timeline-item");

    if (!timeline || !progress || !items.length) return;

    function updateTimeline() {
        const rect = timeline.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        const start = windowHeight * 0.75;
        const end = rect.height - windowHeight * 0.25;

        let scrolled = start - rect.top;
        let progressValue = Math.min(Math.max(scrolled / end, 0), 1);

        progress.style.height = `${progressValue * 100}%`;

        items.forEach((item) => {
            const itemRect = item.getBoundingClientRect();

            if (itemRect.top < windowHeight * 0.72) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
    }

    updateTimeline();

    window.addEventListener("scroll", updateTimeline, { passive: true });
    window.addEventListener("resize", updateTimeline);
});