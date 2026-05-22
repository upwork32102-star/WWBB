<?php include 'includes/layout/header.php'; ?>

<main>

    <!-- CONTACT HERO START -->
    <section class="contact-page-hero">
        <div class="contact-page-hero-bg">
            <img src="https://images.unsplash.com/photo-1559329007-40df8a9345d8?auto=format&fit=crop&w=1920&q=90" alt="WWBB Holdings contact">
        </div>

        <div class="contact-page-hero-overlay"></div>

        <div class="contact-page-hero-content">
            <span>Contact WWBB Holdings</span>

            <h1>Get in touch with our team.</h1>

            <p>
                For reservations, press enquiries, private events, careers or general information,
                contact WWBB Holdings and our team will help you with the right details.
            </p>
        </div>
    </section>
    <!-- CONTACT HERO END -->


    <!-- CONTACT SECTION START -->
    <section class="contact-main-section">
        <div class="contact-container">

            <div class="contact-main-grid">

                <!-- LEFT CONTENT -->
                <div class="contact-info-area">

                    <span class="contact-kicker">Contact Details</span>

                    <h2>We would love to hear from you.</h2>

                    <p>
                        Whether you are planning a visit, looking for private event information,
                        requesting media details or exploring career opportunities, our team is here to help.
                    </p>

                    <div class="contact-info-list">

                        <div class="contact-info-item">
                            <span>Email</span>
                            <a href="mailto:Bookings@wallawallabingbing.com">Bookings@wallawallabingbing.com</a>
                        </div>

                       

                        <div class="contact-info-item">
                            <span>Location</span>
                            <p>London, United Kingdom</p>
                        </div>

                        <div class="contact-info-item">
                            <span>Enquiries</span>
                            <p>Reservations, press, private events, careers and general information.</p>
                        </div>

                    </div>

                </div>


                <!-- RIGHT FORM -->
                <div class="contact-form-area">

<form class="contact-form" id="contactForm" action="#" method="post">
                        <div class="contact-floating-field">
                            <input type="text" name="full_name" id="contactName" placeholder=" " required>
                            <label for="contactName">Full Name</label>
                        </div>

                        <div class="contact-floating-field">
                            <input type="email" name="email" id="contactEmail" placeholder=" " required>
                            <label for="contactEmail">Email Address</label>
                        </div>

                        <div class="contact-floating-field">
                            <input type="tel" name="phone" id="contactPhone" placeholder=" ">
                            <label for="contactPhone">Phone Number</label>
                        </div>

                        <div class="contact-floating-field">
                            <select name="enquiry_type" id="contactEnquiry" required>
                                <option value="" selected disabled></option>
                                <option value="Reservations">Reservations</option>
                                <option value="Private Events">Private Events</option>
                                <option value="Press Enquiry">Press Enquiry</option>
                                <option value="Careers">Careers</option>
                                <option value="General Enquiry">General Enquiry</option>
                            </select>
                            <label for="contactEnquiry">Enquiry Type</label>
                        </div>

                        <div class="contact-floating-field contact-textarea-field">
                            <textarea name="message" id="contactMessage" placeholder=" " required></textarea>
                            <label for="contactMessage">Your Message</label>
                        </div>
<div class="form-status-message" id="contactFormMessage"></div>

                        <button type="submit" class="contact-submit-btn">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </section>
    <!-- CONTACT SECTION END -->


    <!-- CONTACT CTA START -->
    <section class="contact-cta-section">
        <div class="contact-container">

            <div class="contact-cta-box">

                <div>
                    <span class="contact-kicker">WWBB Holdings</span>
                    <h2>Premium London hospitality, built around service and atmosphere.</h2>
                </div>

                <a href="/venues.php" class="contact-cta-btn">Explore Venues</a>

            </div>

        </div>
    </section>
    <!-- CONTACT CTA END -->

</main>

<?php include 'includes/layout/newsletter.php'; ?>
<?php include 'includes/layout/footer.php'; ?>