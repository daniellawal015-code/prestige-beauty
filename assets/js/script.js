console.log("JS connected");

// Sticky Navbar
window.addEventListener("scroll", function () {

    const navbar = document.getElementById("navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

});

// Reveal Sections
const sections = document.querySelectorAll("section");

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        }

    });

}, {
    threshold: 0.15
});

sections.forEach(section => {

    section.classList.add("hidden");
    observer.observe(section);

});

// =======================
// Gallery Filter
// =======================

document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".gallery-filter button");
    const cards = document.querySelectorAll(".gallery-card");

    buttons.forEach(button => {

        button.addEventListener("click", function () {

            buttons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            const filter = this.dataset.filter;

            cards.forEach(card => {

                if (filter === "all" || card.classList.contains(filter)) {

                    card.style.display = "";

                } else {

                    card.style.display = "none";

                }

            });

        });

    });

});
// FAQ

const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {

    item.querySelector(".faq-question").addEventListener("click", () => {

        item.classList.toggle("active");

    });

});