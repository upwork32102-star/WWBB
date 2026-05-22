<?php include 'includes/layout/header.php'; ?>

<main>

    <!-- INNER HERO SLIDER START -->
    <section class="venues-hero" id="venuesHero">

        <div class="venues-hero-slide active">
            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1920&q=90" alt="Premium London restaurant">
        </div>

        <div class="venues-hero-slide">
            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=1920&q=90" alt="Luxury bar interior">
        </div>

        <div class="venues-hero-slide">
            <img src="https://images.unsplash.com/photo-1572116469696-31de0f17cc34?auto=format&fit=crop&w=1920&q=90" alt="Nightlife venue">
        </div>

        <div class="venues-hero-overlay"></div>

        <div class="venues-hero-content">
            <span>WWBB Holdings</span>
            <h1>Venues & Restaurants</h1>
            <p>
                Experience-led hospitality spaces built around food, drinks, music, culture and late-night energy.
            </p>
        </div>

        <div class="venues-hero-count">
            <span id="venueCurrentSlide">01</span>
            <small>/ 03</small>
        </div>

    </section>
    <!-- INNER HERO SLIDER END -->


    <!-- VENUES LIST START -->
    <section class="venues-page-section">
        <div class="venues-page-container">

            <div class="venues-page-head reveal">
                <span>Our Venues</span>
                <h2>Designed for atmosphere, culture and memorable hospitality.</h2>
                <p>
                    Each WWBB venue is shaped around a clear experience, from high-energy dining and cocktails
                    to private events, entertainment and late-night destination spaces.
                </p>
            </div>

            <div class="venues-list">

                <!-- VENUE 01 -->
                <article class="venue-card reveal">
                    <div class="venue-card-image">
                        <img src="/assets/images/venues/4.jpg" alt="Studio 48 Camden venue">
                        <span>01</span>
                    </div>

                    <div class="venue-card-content">
                        <span class="venue-kicker">Flagship Venue · Camden</span>
                        <h3>Studio 48</h3>
                        <p>
                            Studio 48 is a high-energy, multi-room venue in Camden combining bar, dining,
                            cocktails, entertainment and late-night experiences.
                        </p>

                        <ul>
                            <li>Main bar and social space</li>
                            <li>Premium cocktail lounge</li>
                            <li>Private karaoke room</li>
                            <li>Terrace and events area</li>
                        </ul>

                        <a href="https://studio48london.co.uk/" class="venue-btn">View Venue</a>
                    </div>
                </article>

                <!-- VENUE 02 -->
                <article class="venue-card venue-card-reverse reveal">
                    <div class="venue-card-image">
                        <img src="/assets/images/venues/5.jpeg" alt="Rebelle restaurant and bar">
                        <span>02</span>
                    </div>

                    <div class="venue-card-content">
                        <span class="venue-kicker">Dining · Music · Culture</span>
                        <h3>Rebelle</h3>
                        <p>
                            Rebelle is a culturally driven food and entertainment concept blending high-energy
                            dining with music, atmosphere and late-night experience.
                        </p>

                        <ul>
                            <li>Restaurant and bar concept</li>
                            <li>Music-led atmosphere</li>
                            <li>Bold branding and cultural energy</li>
                            <li>Built for repeat customer engagement</li>
                        </ul>

                        <a href="https://rebellelive.com/" class="venue-btn">View Venue</a>
                    </div>
                </article>

                <!-- VENUE 03 -->
                <article class="venue-card reveal">
                    <div class="venue-card-image">
<img src="https://images.unsplash.com/photo-1566417713940-fe7c737a9ef2?auto=format&fit=crop&w=1200&q=90" alt="TBC London venue">                        <span>03</span>
                    </div>

                    <div class="venue-card-content">
                        <span class="venue-kicker">Multi-Experience Destination</span>
                        <h3>Sway (TBC)</h3>
                        <p>
                            This venue is to be confirmed and is planned as a large-scale Central London destination combining sport,
                        </p>

                        <ul>
                            <li>Sports bar and dining environment</li>
                            <li>VIP club and late-night space</li>
                            <li>Karaoke and private group rooms</li>
                            <li>Events, activations and immersive experiences</li>
                        </ul>

                        <a href="#" class="venue-btn">View Venue</a>
                    </div>
                </article>

            </div>

        </div>
    </section>
    <!-- VENUES LIST END -->

</main>

<?php include 'includes/layout/newsletter.php'; ?>
<?php include 'includes/layout/footer.php'; ?>