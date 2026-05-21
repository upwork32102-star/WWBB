<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WWBB | Hospitality & Lifestyle</title>

    <link rel="stylesheet" href="/assets/css/theme.css">
<link rel="stylesheet" href="/assets/css/header.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/bundled/lenis.min.js"></script></head>

<body>

<header class="site-header" id="siteHeader">
    <div class="header-container">

        <button class="menu-toggle" id="menuToggle" aria-label="Open Menu">
    <span></span>
    <span></span>
    <span></span>
</button>

<a href="/contact.php" class="header-btn">Book a Venue</a>

    </div>
</header>

<?php include __DIR__ . '/../components/offcanvas-menu.php'; ?>