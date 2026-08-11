<?php
include 'includes/header.php';
?>

<main class="payment-page">

    <!-- Payment Hero -->
    <section class="payment-hero">

        <span class="section-tag">
            PRESTIGE BEAUTY
        </span>

        <h1>
            Complete Your <span>Payment</span>
        </h1>

        <p>
            Secure your appointment and complete your booking.
        </p>

    </section>


    <!-- Payment Content -->
    <section class="payment-section">

        <div class="payment-container">

            <!-- Payment Methods -->
            <div class="payment-main">

                <span class="section-tag">
                    PAYMENT
                </span>

                <h2>Choose Payment Method</h2>

                <div class="payment-methods">

                    <button
                        type="button"
                        class="payment-method active"
                        data-payment="transfer">

                        <span class="payment-method-icon">
                            <i class="fa-solid fa-building-columns"></i>
                        </span>

                        <span class="payment-method-info">
                            <strong>Bank Transfer</strong>

                            <small>
                                Transfer directly to our account.
                            </small>
                        </span>

                    </button>


                    <button
                        type="button"
                        class="payment-method"
                        data-payment="card">

                        <span class="payment-method-icon">
                            <i class="fa-solid fa-credit-card"></i>
                        </span>

                        <span class="payment-method-info">
                            <strong>Card Payment</strong>

                            <small>
                                Pay securely with your card.
                            </small>
                        </span>

                    </button>

                </div>


                <!-- Bank Transfer -->
                <div
                    class="payment-panel transfer-panel"
                    id="bank-transfer-panel">

                    <h3>Bank Transfer</h3>

                    <p>
                        Transfer the total booking amount to the
                        account below. Your appointment will be
                        confirmed after your payment has been verified.
                    </p>


                    <div class="bank-details">

                        <div>
                            <span>Bank Name</span>

                            <strong>
                                YOUR BANK NAME
                            </strong>
                        </div>


                        <div>
                            <span>Account Name</span>

                            <strong>
                                PRESTIGE BEAUTY
                            </strong>
                        </div>


                        <div>
                            <span>Account Number</span>

                            <strong>
                                0000000000
                            </strong>
                        </div>

                    </div>


                    <div class="payment-amount">

                        <span>
                            Amount to transfer
                        </span>

                       <strong id="transfer-amount">$0.00</strong>

                    </div>


                    <p class="payment-note">

                        After completing the transfer, keep your
                        payment receipt. Your booking will be
                        confirmed after payment verification.

                    </p>

                </div>


                <!-- Card Payment -->
               <div
               class="payment-panel card-panel"
               id="card-payment-panel"
               style="display: none;">
               <span>💳</span>
               <h3>Card Payment</h3>
                <p>
                        Card payments will be available soon.
                        Please use bank transfer for now.
                    </p>

                </div>
                <button
                    type="button"
                    class="btn-primary confirm-payment-btn">

                    Confirm Payment

                </button>

            </div>


            <!-- Booking Summary -->
            <aside class="payment-summary">

                <span class="section-tag">
                    YOUR BOOKING
                </span>

                <h2>Booking Summary</h2>

                <div
                    id="payment-summary-items"
                    class="payment-summary-items">

                    <!-- JavaScript will load basket items here -->

                </div>


                <div class="payment-summary-total">

                    <span>Total</span>

                   <strong id="payment-total">$0.00</strong>
                </div>

            </aside>

        </div>

    </section>

</main>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const basket = JSON.parse(
        localStorage.getItem("prestigeBooking")
    ) || [];

    const summaryItems = document.getElementById("payment-summary-items");
    const paymentTotal = document.getElementById("payment-total");
    const transferAmount = document.getElementById("transfer-amount");

    let total = 0;

    if (basket.length === 0) {

        summaryItems.innerHTML = `
            <p class="empty-payment-booking">
                No services selected.
            </p>
        `;

    } else {

        basket.forEach(function (item) {

            const price = Number(item.price) || 0;

            total += price;

            const row = document.createElement("div");

            row.className = "payment-service-item";

            row.innerHTML = `
                <span>${item.service}</span>
                <strong>$${price.toFixed(2)}</strong>
            `;

            summaryItems.appendChild(row);
        });
    }

    // Update total
    paymentTotal.textContent = `$${total.toFixed(2)}`;

    // Update bank transfer amount
        if (transferAmount) {
        transferAmount.textContent = `$${total.toFixed(2)}`;
    }


    // ==========================================
    // PAYMENT METHOD SWITCHING
    // ==========================================

    const paymentButtons =
        document.querySelectorAll(".payment-method");

    const paymentPanels =
        document.querySelectorAll(".payment-panel");

    if (paymentButtons.length && paymentPanels.length) {

        function setPaymentMethod(selectedButton) {

            paymentButtons.forEach(button => {
                const isActive = button === selectedButton;
                button.classList.toggle("active", isActive);
            });

            const selectedKey = selectedButton.dataset.payment;

            paymentPanels.forEach(panel => {
                const shouldShow =
                    (selectedKey === "transfer" && panel.id === "bank-transfer-panel") ||
                    (selectedKey === "card" && panel.id === "card-payment-panel");

                panel.style.display = shouldShow ? "block" : "none";
            });
        }

        paymentButtons.forEach(button => {
            button.addEventListener("click", function () {
                setPaymentMethod(button);
            });
        });

    }

});
</script>


<?php
include 'includes/footer.php';
?>