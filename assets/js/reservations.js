document.addEventListener("DOMContentLoaded", () => {
    const openButtons = document.querySelectorAll("[data-modal]");
    const closeButtons = document.querySelectorAll("[data-close-modal]");
    const modals = document.querySelectorAll(".reservation-modal");

    function openModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;

        modal.classList.add("active");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        modals.forEach((modal) => modal.classList.remove("active"));
        document.body.style.overflow = "";
    }

    openButtons.forEach((button) => {
        button.addEventListener("click", () => {
            openModal(button.dataset.modal);
        });
    });

    closeButtons.forEach((button) => {
        button.addEventListener("click", closeModal);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeModal();
        }
    });
});