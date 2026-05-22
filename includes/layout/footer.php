<script src="/assets/js/header.js"></script>
<script src="/assets/js/slider.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/venues.js"></script>
<script src="/assets/js/reservations.js"></script>
<script src="/assets/js/about.js"></script>
<!-- FOOTER START -->
<!-- FOOTER START -->
<footer class="wwbb-footer">
    <div class="wwbb-footer-inner">

        <div class="wwbb-footer-main">

            <div class="wwbb-footer-brand">
                <a href="/" class="wwbb-footer-logo" aria-label="WWBB Holdings">
                    <img src="/uploads/WWBB_Logo.png" alt="WWBB Holdings Logo">
                </a>

                <p>
                    Premium London hospitality group creating culture-led bars, restaurants,
                    members clubs and late-night venue experiences.
                </p>

                <div class="wwbb-footer-socials">
                    <a href="#" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.3 8.1h4.4V24H.3V8.1zM8.1 8.1h4.2v2.2h.1c.6-1.1 2.1-2.6 4.4-2.6 4.7 0 5.6 3.1 5.6 7.1V24H18v-8.2c0-2 0-4.5-2.7-4.5s-3.1 2.1-3.1 4.3V24H7.8V8.1h.3z"/>
                        </svg>
                    </a>

                    <a href="#" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22 12.06C22 6.48 17.52 2 11.94 2S2 6.48 2 12.06c0 5.02 3.66 9.18 8.44 9.94v-7.03H7.9v-2.91h2.54V9.84c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.9h2.78l-.44 2.91h-2.34V22C18.34 21.24 22 17.08 22 12.06z"/>
                        </svg>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2zm0 2C5.7 4 4 5.7 4 7.8v8.4C4 18.3 5.7 20 7.8 20h8.4c2.1 0 3.8-1.7 3.8-3.8V7.8C20 5.7 18.3 4 16.2 4H7.8zm4.2 3.2A4.8 4.8 0 1 1 12 16.8 4.8 4.8 0 0 1 12 7.2zm0 2A2.8 2.8 0 1 0 12 14.8 2.8 2.8 0 0 0 12 9.2zm5-2.35a1.15 1.15 0 1 1-1.15 1.15A1.15 1.15 0 0 1 17 6.85z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="wwbb-footer-links-area">

                <div class="wwbb-footer-menu">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/venues.php">Our Venues</a></li>
                        <li><a href="/about.php">About WWBB</a></li>
                        <li><a href="/reservations.php">Reservations</a></li>
                        <li><a href="/contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="wwbb-footer-menu">
                    <h4>Venues</h4>
                    <ul>
                        <li><a href="#">Studio 48</a></li>
                        <li><a href="#">Rebelle</a></li>
                        <li><a href="#">Sway (TBC)</a></li>
                        <li><a href="#">Private Hire</a></li>
                        <li><a href="#">Events</a></li>
                    </ul>
                </div>

                <div class="wwbb-footer-menu">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="mailto:Bookings@wallawallabingbing.com">Bookings@wallawallabingbing.com</a></li>
                        <li><a href="#">London, United Kingdom</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="wwbb-footer-bottom">
            <p>© 2025 WWBB Holdings. All rights reserved.</p>

            
        </div>

    </div>
</footer>
<!-- SCROLL TO TOP START -->
<button class="wwbb-scroll-top" id="wwbbScrollTop" aria-label="Scroll to top">
    <span></span>
    <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M12 5l7 7-1.4 1.4L13 8.8V20h-2V8.8l-4.6 4.6L5 12l7-7z"/>
    </svg>
</button>
<!-- SCROLL TO TOP END -->
<script src="/assets/js/header.js"></script>
<script src="/assets/js/slider.js"></script>
<script src="/assets/js/animations.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    function handleDemoForm(formId, messageId) {
        const form = document.getElementById(formId);
        const messageBox = document.getElementById(messageId);

        if (!form || !messageBox) return;

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            messageBox.textContent = "Thank you. This form is ready, but email service is not connected yet.";
            messageBox.classList.add("show");

            setTimeout(function () {
                messageBox.textContent = "";
                messageBox.classList.remove("show");
            }, 6000);
        });
    }

    handleDemoForm("contactForm", "contactFormMessage");
    handleDemoForm("careersForm", "careersFormMessage");

});
</script>
</body>
</html>

