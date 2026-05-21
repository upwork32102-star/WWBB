<?php include 'includes/layout/header.php'; ?>

<?php

$posts = [

    'wwbb-holdings-portfolio-growth' => [
        'category' => 'Brand News',
        'date' => '2026',
        'title' => 'WWBB Holdings continues to grow its premium London hospitality portfolio.',
        'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1600&q=90',
        'excerpt' => 'A closer look at how WWBB Holdings is building memorable restaurants, bars and late-night venue experiences across London.',
        'content' => [
            'WWBB Holdings continues to develop a strong presence within London hospitality through a growing collection of premium venues. Each space is shaped around atmosphere, service, design and memorable guest experience.',
            'The group focuses on creating places where food, drinks, interiors and culture work together. This approach allows each venue to feel distinctive while still carrying the wider WWBB standard of quality.',
            'From restaurants and cocktail bars to late-night spaces, WWBB Holdings aims to create hospitality experiences that feel refined, social and full of energy.',
        ],
    ],

    'venue-experiences-detail-service-atmosphere' => [
        'category' => 'Hospitality',
        'date' => '2026',
        'title' => 'Creating venue experiences built around detail, service and atmosphere.',
        'image' => 'https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&w=1600&q=90',
        'excerpt' => 'Our approach focuses on thoughtful interiors, warm service and food-led experiences that leave a lasting impression.',
        'content' => [
            'Great hospitality is built through small details. At WWBB Holdings, every venue is planned with attention to service, mood, interiors and guest comfort.',
            'The guest journey matters from the first welcome to the final moment of the visit. This is why our teams focus on consistency, personality and care.',
            'By combining strong operations with creative design, WWBB venues aim to offer experiences that guests remember and return to.',
        ],
    ],

    'food-drinks-music-nightlife-vision' => [
        'category' => 'Culture',
        'date' => '2026',
        'title' => 'Food, drinks, music and nightlife brought together under one vision.',
        'image' => 'https://images.unsplash.com/photo-1470337458703-46ad1756a187?auto=format&fit=crop&w=1600&q=90',
        'excerpt' => 'WWBB venues are designed to connect hospitality with London’s energy, culture and late-night social scene.',
        'content' => [
            'London hospitality is not only about food and drinks. It is also about music, movement, people and atmosphere.',
            'WWBB Holdings creates venues where culture and hospitality meet naturally. Our spaces are designed for dining, socialising, celebrating and late-night experiences.',
            'This wider vision helps each venue connect with guests who want more than a standard restaurant or bar visit.',
        ],
    ],

    'refined-social-memorable-dining-spaces' => [
        'category' => 'Dining',
        'date' => '2026',
        'title' => 'Designing dining spaces that feel refined, social and memorable.',
        'image' => 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1600&q=90',
        'excerpt' => 'From relaxed dinners to special occasions, our venues are shaped around comfort, detail and a strong sense of place.',
        'content' => [
            'A strong dining space should feel comfortable, elegant and full of character. WWBB Holdings designs venues that support both relaxed meals and special occasions.',
            'Interiors, lighting, layout and service all work together to create the right feeling. Every detail helps shape the guest experience.',
            'The aim is to create dining spaces that people remember not only for the food, but also for the full atmosphere.',
        ],
    ],

    'inside-our-hospitality-space-design' => [
        'category' => 'Venues',
        'date' => '2026',
        'title' => 'Inside the design approach behind our hospitality spaces.',
        'image' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1600&q=90',
        'excerpt' => 'Each WWBB venue is created with a clear identity, balancing interiors, lighting, service and atmosphere.',
        'content' => [
            'Each venue within WWBB Holdings is developed with a clear identity. The design process considers how guests will move, gather, dine and socialise inside the space.',
            'Good hospitality design should support both beauty and function. This means the venue must look strong while also working smoothly for guests and teams.',
            'Through careful planning, WWBB creates spaces that feel stylish, practical and connected to the wider brand vision.',
        ],
    ],

    'private-dining-celebrations-brand-events' => [
        'category' => 'Events',
        'date' => '2026',
        'title' => 'Premium spaces for private dining, celebrations and brand events.',
        'image' => 'https://images.unsplash.com/photo-1572116469696-31de0f17cc34?auto=format&fit=crop&w=1600&q=90',
        'excerpt' => 'Our venues support a range of experiences, from intimate dinners to private events and cultural gatherings.',
        'content' => [
            'WWBB venues are designed to support more than everyday dining. They also provide strong settings for private dining, celebrations and brand-led events.',
            'The spaces can be shaped around different guest needs, from intimate dinners to larger social gatherings.',
            'With strong atmosphere, service and setting, WWBB Holdings offers venues that can support memorable private and professional events.',
        ],
    ],

];

$slug = isset($_GET['slug']) ? $_GET['slug'] : 'wwbb-holdings-portfolio-growth';

if (!array_key_exists($slug, $posts)) {
    $slug = 'wwbb-holdings-portfolio-growth';
}

$post = $posts[$slug];

?>

<main>

    <!-- SINGLE PRESS HERO START -->
    <section class="single-press-hero">
        <div class="single-press-hero-bg">
            <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
        </div>

        <div class="single-press-hero-overlay"></div>

        <div class="single-press-hero-content">
            <span><?php echo $post['category']; ?></span>

            <h1><?php echo $post['title']; ?></h1>

            <p><?php echo $post['excerpt']; ?></p>
        </div>
    </section>
    <!-- SINGLE PRESS HERO END -->


    <!-- SINGLE PRESS CONTENT START -->
    <section class="single-press-content-section">
        <div class="single-press-container">

            <div class="single-press-layout">

                <article class="single-press-article">

                    <div class="single-press-meta">
                        <span><?php echo $post['category']; ?></span>
                        <span><?php echo $post['date']; ?></span>
                    </div>

                    <h2><?php echo $post['title']; ?></h2>

                    <?php foreach ($post['content'] as $paragraph) : ?>
                        <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>

                    <div class="single-press-image">
                        <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                    </div>

                    <p>
                        For further media details, photography requests or brand information, please contact the
                        WWBB Holdings team through our official contact page.
                    </p>

                    <a href="/press.php" class="single-press-back-btn">Back To Press</a>

                </article>

                <aside class="single-press-sidebar">

                    <div class="single-press-sidebar-box">
                        <span class="sidebar-small-title">Press Enquiries</span>

                        <h3>Need more information?</h3>

                        <p>
                            Contact our team for media details, photography requests, interviews or brand information.
                        </p>

                        <a href="/contact.php">Contact Us</a>
                    </div>

                    <div class="single-press-sidebar-box light-box">
                        <span class="sidebar-small-title">WWBB Holdings</span>

                        <h3>Premium London hospitality.</h3>

                        <p>
                            Restaurants, bars, members clubs and late-night venue experiences shaped around service,
                            culture and atmosphere.
                        </p>
                    </div>

                </aside>

            </div>

        </div>
    </section>
    <!-- SINGLE PRESS CONTENT END -->

</main>

<?php include 'includes/layout/newsletter.php'; ?>
<?php include 'includes/layout/footer.php'; ?>