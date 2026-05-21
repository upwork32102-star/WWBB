<?php include 'includes/layout/header.php'; ?>

<main>

    <section class="hero-slider" id="heroSlider">

        <!-- Fixed Logo Over Slider -->
        <div class="fixed-slider-logo">
            <img src="/uploads/WWBB_Logo.png" alt="WWBB Logo">
        </div>

        <!-- Slide 1 -->
        <div class="slide active">
            <div class="slide-bg" style="background-image: url('/assets/images/slider/01.jpg');"></div>
            <div class="slide-overlay"></div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <div class="slide-bg" style="background-image: url('/assets/images/slider/2.png');"></div>
            <div class="slide-overlay"></div>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
            <div class="slide-bg" style="background-image: url('/assets/images/slider/3.png');"></div>
            <div class="slide-overlay"></div>
        </div>

        <!-- Slide 4 -->
        <div class="slide">
            <div class="slide-bg" style="background-image: url('/assets/images/slider/4.jpg');"></div>
            <div class="slide-overlay"></div>
        </div>

        <!-- Arrows -->
        <div class="slider-controls">
            <button class="slider-arrow" id="prevSlide" aria-label="Previous Slide">←</button>
            <button class="slider-arrow" id="nextSlide" aria-label="Next Slide">→</button>
        </div>

        <!-- Dots -->
        <div class="slider-dots">
            <button class="slider-dot active" data-slide="0" aria-label="Slide 1"></button>
            <button class="slider-dot" data-slide="1" aria-label="Slide 2"></button>
            <button class="slider-dot" data-slide="2" aria-label="Slide 3"></button>
            <button class="slider-dot" data-slide="3" aria-label="Slide 4"></button>
        </div>

        <!-- Number -->
        <div class="slider-number">
            <span id="currentSlide">01</span>
            <small>/ 04</small>
        </div>

    </section>


    <!-- SECTION 02 - OUR PROJECTS START -->
    <section class="projects-section reveal" id="projects">

        <div class="projects-container">

            <div class="projects-head reveal-left">
                <span>02 / Our Projects</span>
                <h2>Our Venues</h2>
                <p>
                    Three distinctive spaces, each designed with its own mood, detail and hospitality experience.
                </p>
            </div>

            <div class="projects-grid reveal-right">

                <article class="project-box reveal">
                    <a href="/venues.php">
                        <img src="/assets/images/venues/1.png" alt="Studio 48">

                        <div class="project-overlay"></div>

                        <div class="project-content">
                            <span>01</span>
                            <h3>Studio 48</h3>
                            <p>Private events, creative gatherings and premium hospitality moments.</p>
                        </div>
                    </a>
                </article>

                <article class="project-box reveal">
                    <a href="/venues.php">
                        <img src="/assets/images/venues/2.webp" alt="Rebelle">

                        <div class="project-overlay"></div>

                        <div class="project-content">
                            <span>02</span>
                            <h3>Rebelle</h3>
                            <p>Elegant dining energy with refined detail and a warm atmosphere.</p>
                        </div>
                    </a>
                </article>

                <article class="project-box reveal">
                    <a href="/venues.php">
                        <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1000&q=90" alt="Sway">

                        <div class="project-overlay"></div>

                        <div class="project-content">
                            <span>03</span>
                            <h3>Sway</h3>
                            <p>A modern social space for drinks, music and late-night energy.</p>
                        </div>
                    </a>
                </article>

            </div>

        </div>

    </section>
    <!-- SECTION 02 - OUR PROJECTS END -->
<!-- ABOUT US SECTION START -->
<section class="wwbb-about-section reveal" id="about-us">
    <div class="container">
        <div class="wwbb-about-wrap">

            <div class="wwbb-about-content">
                <span class="wwbb-about-kicker">About WWBB Holdings</span>

<h2>London hospitality, built for experience.</h2>
                <p>
                    WWBB Holdings Group is a London-based hospitality group specialising in the creation,
                    development and operation of premium bars, restaurants, members clubs and late-night venues.
                </p>

                <p>
                    Our venues are designed for London’s next-generation audience, combining food, drinks,
                    music, entertainment and atmosphere into culturally relevant spaces people want to visit,
                    share and return to.
                </p>

                <div class="wwbb-about-stats">
                    <div>
                        <strong>21–45</strong>
                        <span>Target Audience</span>
                    </div>
                    <div>
                        <strong>Multi</strong>
                        <span>Revenue Model</span>
                    </div>
                    <div>
                        <strong>London</strong>
                        <span>Hospitality Focus</span>
                    </div>
                </div>

                <a href="/about.php" class="wwbb-about-btn">Discover More</a>
            </div>

            <div class="wwbb-about-image">
                <img src="/assets/images/venues/3.png" alt="Premium London hospitality venue interior">

                <div class="wwbb-about-card">
                    <span>Experience-Led Venues</span>
                    <p>
                        Premium bars, restaurants, private events and late-night concepts designed for modern London audiences.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ABOUT US SECTION END -->

</main>

<?php include 'includes/layout/newsletter.php'; ?>
<?php include 'includes/layout/footer.php'; ?>
