<?php include 'includes/layout/header.php'; ?>

<main>

    <!-- CAREERS HERO START -->
    <section class="careers-page-hero">
        <div class="careers-page-hero-bg">
            <img src="https://images.unsplash.com/photo-1559329007-40df8a9345d8?auto=format&fit=crop&w=1920&q=90" alt="WWBB hospitality careers team">
        </div>

        <div class="careers-page-hero-overlay"></div>

        <div class="careers-page-hero-content">
            <span>Careers at WWBB Holdings</span>
            <h1>Join our hospitality team.</h1>
            <p>
                Build your career with a London hospitality group creating premium restaurants,
                bars, members clubs and late-night venue experiences.
            </p>
        </div>
    </section>
    <!-- CAREERS HERO END -->


    <!-- CAREERS APPLICATION SECTION START -->
    <section class="careers-application-section reveal" id="open-roles">
        <div class="container">

            <div class="careers-application-grid">

                <div class="careers-application-content">
                    <span class="wwbb-newsletter-kicker">Work With Us</span>

                    <h2>Build your career in premium London hospitality.</h2>

                    <p>
                        WWBB Holdings is always looking for confident, creative and service-focused people
                        who want to grow within London’s hospitality scene.
                    </p>

                    <p>
                        From restaurants and cocktail bars to members clubs and late-night venues, our teams
                        work across exciting spaces built around food, drinks, music, culture and guest experience.
                    </p>
                </div>

                <div class="careers-application-form-wrap">
<form class="careers-application-form" id="careersForm" action="#" method="post" enctype="multipart/form-data">
                        <div class="wwbb-floating-field careers-floating-field">
                            <input type="text" name="full_name" id="careerFullName" placeholder=" " required>
                            <label for="careerFullName">Full Name</label>
                        </div>

                        <div class="wwbb-floating-field careers-floating-field">
                            <input type="email" name="email" id="careerEmail" placeholder=" " required>
                            <label for="careerEmail">Email Address</label>
                        </div>

                        <div class="wwbb-floating-field careers-floating-field">
                            <input type="tel" name="phone" id="careerPhone" placeholder=" " required>
                            <label for="careerPhone">Phone Number</label>
                        </div>

                        <div class="wwbb-floating-field careers-floating-field">
                            <input type="text" name="position" id="careerPosition" placeholder=" " required>
                            <label for="careerPosition">Position Interested In</label>
                        </div>

                        <div class="wwbb-floating-field careers-floating-field careers-textarea-field">
                            <textarea name="message" id="careerMessage" placeholder=" "></textarea>
                            <label for="careerMessage">Tell Us About Your Experience</label>
                        </div>

                        <div class="careers-upload-field">
                            <label for="careerCV">Upload CV</label>
                            <input type="file" name="cv_file" id="careerCV" accept=".pdf,.doc,.docx">
                        </div>
<div class="form-status-message" id="careersFormMessage"></div>

                        <button type="submit" class="wwbb-newsletter-btn careers-application-btn">
                            Submit
                        </button>

                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- CAREERS APPLICATION SECTION END -->

</main>

<?php include 'includes/layout/newsletter.php'; ?>
<?php include 'includes/layout/footer.php'; ?>