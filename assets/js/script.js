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
/* =========================================
   BOOKING SERVICE SELECTION
========================================= */

const bookingServiceCards = document.querySelectorAll(
    ".booking-service-card"
);

bookingServiceCards.forEach(card => {

    card.addEventListener("click", function () {

        bookingServiceCards.forEach(item => {
            item.classList.remove("selected");
        });

        this.classList.add("selected");

        const selectedService = this.dataset.service;
        const serviceName = serviceLabelMap[selectedService] || "Selected Service";

        revealBookingDetails(serviceName);

        console.log("Selected service:", selectedService);

    });

});
// =========================================
// PRESTIGE BEAUTY — BOOKING BASKET
// =========================================

document.addEventListener("DOMContentLoaded", function () {

    const bookingButtons = document.querySelectorAll(".add-to-booking");

    // Get existing basket from localStorage
    let bookingBasket = JSON.parse(
        localStorage.getItem("prestigeBooking")
    ) || [];

    // Create basket button
    const basketButton = document.createElement("button");

    basketButton.className = "booking-basket-button";
    basketButton.type = "button";
    basketButton.innerHTML = `
        <span>🛒</span>
        <span class="basket-count">0</span>
    `;

    document.body.appendChild(basketButton);

    // Create basket panel
    const basketPanel = document.createElement("div");

    basketPanel.className = "booking-basket-panel";

    basketPanel.innerHTML = `
        <div class="basket-header">
            <div>
                <span class="section-tag">YOUR SELECTION</span>
                <h3>Your Booking</h3>
            </div>

            <button type="button" class="basket-close">
                ×
            </button>
        </div>

        <div class="basket-items"></div>

        <div class="basket-footer">

            <div class="basket-total">
                <span>Total</span>
                <strong class="basket-total-price">$0</strong>
            </div>

            <button
                type="button"
                class="basket-continue">
                Continue Browsing
            </button>

            <button
                type="button"
                class="basket-checkout">
                Checkout
            </button>

        </div>
    `;

    document.body.appendChild(basketPanel);

    const basketCount = basketButton.querySelector(".basket-count");
    const basketItems = basketPanel.querySelector(".basket-items");
    const basketTotal = basketPanel.querySelector(".basket-total-price");
    const basketClose = basketPanel.querySelector(".basket-close");
    const basketContinue = basketPanel.querySelector(".basket-continue");

    // -----------------------------------------
    // Save basket
    // -----------------------------------------

    function saveBasket() {

        localStorage.setItem(
            "prestigeBooking",
            JSON.stringify(bookingBasket)
        );

    }

    // -----------------------------------------
    // Calculate total
    // -----------------------------------------

    function calculateTotal() {

        return bookingBasket.reduce(
            (total, item) => total + Number(item.price),
            0
        );

    }

    // -----------------------------------------
    // Update basket
    // -----------------------------------------

    function updateBasket() {

        basketCount.textContent = bookingBasket.length;

        basketItems.innerHTML = "";

        if (bookingBasket.length === 0) {

            basketItems.innerHTML = `
                <div class="basket-empty">
                    <div class="basket-empty-icon">🛒</div>

                    <h4>Your booking is empty</h4>

                    <p>
                        Choose a service to begin your
                        Prestige Beauty experience.
                    </p>
                </div>
            `;

        } else {

            bookingBasket.forEach((item, index) => {

                const basketItem = document.createElement("div");

                basketItem.className = "basket-item";

                basketItem.innerHTML = `
                    <div class="basket-item-info">
                        <strong>${item.service}</strong>
                        <span>$${Number(item.price).toFixed(2)}</span>
                    </div>

                    <button
                        type="button"
                        class="basket-remove"
                        data-index="${index}">
                        ×
                    </button>
                `;

                basketItems.appendChild(basketItem);

            });

        }

        basketTotal.textContent =
            `$${calculateTotal().toFixed(2)}`;

        // Remove buttons
        const removeButtons =
            basketPanel.querySelectorAll(".basket-remove");

        removeButtons.forEach(button => {

            button.addEventListener("click", function () {

                const index =
                    Number(this.dataset.index);

                bookingBasket.splice(index, 1);

                saveBasket();

                updateBasket();

            });

        });

    }

    // -----------------------------------------
    // Add service to basket
    // -----------------------------------------

    bookingButtons.forEach(button => {

        button.addEventListener("click", function () {

            const service =
                this.dataset.service;

            const price =
                Number(this.dataset.price);

            // Prevent duplicate services
            const alreadyAdded =
                bookingBasket.some(
                    item => item.service === service
                );

            if (alreadyAdded) {

                basketPanel.classList.add("open");

                return;

            }

            bookingBasket.push({
                service: service,
                price: price
            });

            saveBasket();

            updateBasket();

            // Open basket automatically
            basketPanel.classList.add("open");

        });

    });

    // -----------------------------------------
    // Open basket
    // -----------------------------------------

    basketButton.addEventListener("click", function () {

        basketPanel.classList.add("open");

    });

    // -----------------------------------------
    // Close basket
    // -----------------------------------------

    basketClose.addEventListener("click", function () {

        basketPanel.classList.remove("open");

    });

    basketContinue.addEventListener("click", function () {

        basketPanel.classList.remove("open");

    });

    // -----------------------------------------
    // Initial load
    // -----------------------------------------

    updateBasket();

});