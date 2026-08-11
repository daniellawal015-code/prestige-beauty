<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main class="checkout-page">

    <section class="checkout-hero">

        <span class="section-tag">PRESTIGE BEAUTY</span>

        <h1>Complete Your <span>Booking</span></h1>

        <p>
            You're one step closer to your luxury beauty experience.
        </p>

    </section>


    <section class="checkout-section">

        <div class="checkout-container">

            <!-- LEFT: CUSTOMER & APPOINTMENT -->
            <div class="checkout-form-card">

                <span class="section-tag">
                    YOUR DETAILS
                </span>

                <h2>Appointment Information</h2>

                <form id="checkout-form">

                    <div class="form-group">

                        <label for="full-name">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="full-name"
                            name="full_name"
                            placeholder="Enter your full name"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Enter your phone number"
                            required
                        >

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="appointment-date">
                                Appointment Date
                            </label>

                            <input
                                type="date"
                                id="appointment-date"
                                name="appointment_date"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="appointment-time">
                                Appointment Time
                            </label>

                            <select
                                id="appointment-time"
                                name="appointment_time"
                                required
                            >

                                <option value="">
                                    Select a time
                                </option>

                                <option value="09:00">
                                    9:00 AM
                                </option>

                                <option value="10:00">
                                    10:00 AM
                                </option>

                                <option value="11:00">
                                    11:00 AM
                                </option>

                                <option value="12:00">
                                    12:00 PM
                                </option>

                                <option value="13:00">
                                    1:00 PM
                                </option>

                                <option value="14:00">
                                    2:00 PM
                                </option>

                                <option value="15:00">
                                    3:00 PM
                                </option>

                                <option value="16:00">
                                    4:00 PM
                                </option>

                                <option value="17:00">
                                    5:00 PM
                                </option>

                            </select>

                        </div>

                    </div>


                    <button
                        type="submit"
                        class="btn-primary checkout-submit">

                        Continue to Payment

                    </button>

                </form>
                <div class="payment-card" id="payment-section">

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
                    Pay directly to our bank account.
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
                    Secure card payment.
                </small>
            </span>

        </button>

    </div>


    <div
        class="payment-panel transfer-panel">

        <h3>Bank Transfer</h3>

        <p>
            Transfer the booking amount to the account below.
            Your appointment will be confirmed after payment
            has been verified.
        </p>

        <div class="bank-details">

            <div>
                <span>Bank Name</span>
                <strong>YOUR BANK NAME</strong>
            </div>

            <div>
                <span>Account Name</span>
                <strong>PRESTIGE BEAUTY</strong>
            </div>

            <div>
                <span>Account Number</span>
                <strong>0000000000</strong>
            </div>

        </div>

        <p class="payment-note">
            Please keep your transfer receipt. You may be asked
            to provide proof of payment.
        </p>

    </div>


    <div
        class="payment-panel card-panel"
        style="display:none;">

        <h3>Card Payment</h3>

        <p>
            Card payments will be available soon.
        </p>

        <p class="payment-note">
            Please use Bank Transfer for now.
        </p>

    </div>


    <button
        type="button"
        class="btn-primary confirm-booking-btn">

        Confirm Booking

    </button>

</div>

            </div>


            <!-- RIGHT: BOOKING SUMMARY -->
            <aside class="checkout-summary-card">

                <span class="section-tag">
                    YOUR BOOKING
                </span>

                <h2>Booking Summary</h2>

                <div
                    id="checkout-items"
                    class="checkout-items">
                </div>


                <div class="checkout-summary-total">

                    <span>Total</span>

                    <strong id="checkout-total">
                        $0.00
                    </strong>

                </div>

            </aside>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/script.js"></script>
