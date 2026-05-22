<?php include 'includes/layout/header.php'; ?>

<main>

    <!-- RESERVATION HERO START -->
    <section class="reservation-hero">
        <div class="reservation-hero-bg">
            <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=1920&q=90" alt="Restaurant reservations">
        </div>

        <div class="reservation-hero-overlay"></div>

        <div class="reservation-hero-content">
            <span>Book Your Experience</span>
            <h1>Reservations</h1>
            <p>
                Reserve your table, private experience or upcoming visit across our WWBB venues.
            </p>
        </div>
    </section>
    <!-- RESERVATION HERO END -->


    <!-- RESERVATION SECTION START -->
    <section class="reservation-page-section">
        <div class="reservation-container">

            <div class="reservation-head">
                <span>Choose a Venue</span>
                <h2>Book your next WWBB experience.</h2>
                <p>
                    Select your preferred venue below. Studio 48 and Rebelle bookings can be completed directly on this page.
                    The third venue is currently TBC (to be confirmed).
                </p>
            </div>

            <div class="reservation-grid">

                <!-- STUDIO 48 -->
                <article class="reservation-card">
                    <div class="reservation-card-image">
                        <img src="/assets/images/venues/6.jpg" alt="Studio 48 reservation">
                    </div>

                    <div class="reservation-card-content">
                        <span class="reservation-tag">Camden · Bar · Events</span>
                        <h3>Studio 48</h3>
                        <p>
                            A high-energy multi-room venue for dining, cocktails, entertainment, private hire and late-night experiences.
                        </p>

                        <button class="reservation-open-btn" data-modal="studioModal">
                            Book Studio 48
                        </button>
                    </div>
                </article>

                <!-- REBELLE -->
                <article class="reservation-card">
                    <div class="reservation-card-image">
                        <img src="/assets/images/venues/7.webp" alt="Rebelle reservation">
                    </div>

                    <div class="reservation-card-content">
                        <span class="reservation-tag">Dining · Music · Culture</span>
                        <h3>Rebelle</h3>
                        <p>
                            A culturally driven restaurant and bar concept built around food, music, atmosphere and late-night energy.
                        </p>

                        <button class="reservation-open-btn" data-modal="rebelleModal">
                            Book Rebelle
                        </button>
                    </div>
                </article>

                <!-- SWAY -->
                <article class="reservation-card reservation-card-featured">
                    <div class="reservation-card-image">
<img src="https://images.unsplash.com/photo-1566417713940-fe7c737a9ef2?auto=format&fit=crop&w=1000&q=90" alt="TBC venue reservation">                    </div>

                    <div class="reservation-card-content">
                        <span class="reservation-tag">Central London · Destination Venue</span>
                        <h3>Sway (TBC)</h3>
                        <p>
                            A large-scale destination venue combining sport, dining, nightlife, entertainment and premium VIP culture.
                        </p>

                        <a href="#" target="_blank" rel="noopener" class="reservation-link-btn">
                            TBC
                        </a>
                    </div>
                </article>

            </div>

        </div>
    </section>
    <!-- RESERVATION SECTION END -->


    <!-- STUDIO 48 MODAL START -->
    <div class="reservation-modal" id="studioModal">
        <div class="reservation-modal-overlay" data-close-modal></div>

        <div class="reservation-modal-box">
            <button class="reservation-modal-close" data-close-modal aria-label="Close modal">×</button>

            <div class="reservation-modal-head">
                <span>Reservation</span>
                <h3>Book Studio 48</h3>
            </div>

            <div class="reservation-embed-area">
                <!-- PASTE STUDIO 48 BOOKING SCRIPT / IFRAME HERE -->
                <div class="reservation-placeholder">
                    Studio 48 booking script will appear here.
                </div>
            </div>
        </div>
    </div>
    <!-- STUDIO 48 MODAL END -->


    <!-- REBELLE MODAL START -->
    <div class="reservation-modal" id="rebelleModal">
        <div class="reservation-modal-overlay" data-close-modal></div>

        <div class="reservation-modal-box">
            <button class="reservation-modal-close" data-close-modal aria-label="Close modal">×</button>

            <div class="reservation-modal-head">
                <span>Reservation</span>
                <h3>Book Rebelle</h3>
            </div>

            <div class="reservation-embed-area">
                <!-- PASTE REBELLE BOOKING SCRIPT / IFRAME HERE -->
                <div class="reservation-placeholder">
                    Rebelle booking script will appear here.
                </div>
            </div>
        </div>
    </div>
    <!-- REBELLE MODAL END -->

</main>

<?php include 'includes/layout/newsletter.php'; ?>
<?php include 'includes/layout/footer.php'; ?>