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

                <form id="checkout-form" action="payment.php" method="POST">

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
                
            </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/script.js"></script>
