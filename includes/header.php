<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php if (isset($noIndex) && $noIndex): ?>
    <meta name="robots" content="noindex, nofollow">
  <?php else: ?>
    <meta name="robots" content="index, follow">
  <?php endif; ?>

  <!-- Primary Meta Tags -->
  <?php
  $siteName = "Oasi di Piobbico";
  $defaultTitle = "Oasi di Piobbico - Vacanze sul Monte Nerone";
  $defaultDesc = "Appartamenti vacanze con vista sul Monte Nerone a Piobbico. Relax, natura e comfort per la tua vacanza ideale nelle Marche. Piscina, giardino e Wi-Fi.";
  $currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $ogImage = "https://" . $_SERVER['HTTP_HOST'] . "/assets/img/homepage_hero.jpeg";
  ?>
  <title><?= $pageTitle ?? $defaultTitle ?></title>
  <meta name="description" content="<?= $pageDescription ?? $defaultDesc ?>">
  <meta name="keywords"
    content="<?= $pageKeywords ?? 'Oasi di Piobbico, appartamenti Piobbico, vacanze Marche, Monte Nerone, agriturismo, relax, natura, trekking, piscina, casa vacanze' ?>">
  <meta name="author" content="Oasi di Piobbico">
  <link rel="canonical" href="<?= $currentUrl ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $currentUrl ?>">
  <meta property="og:title" content="<?= $pageTitle ?? $defaultTitle ?>">
  <meta property="og:description" content="<?= $pageDescription ?? $defaultDesc ?>">
  <meta property="og:image" content="<?= $ogImage ?>">
  <meta property="og:site_name" content="<?= $siteName ?>">
  <meta property="og:locale" content="it_IT">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= $currentUrl ?>">
  <meta property="twitter:title" content="<?= $pageTitle ?? $defaultTitle ?>">
  <meta property="twitter:description" content="<?= $pageDescription ?? $defaultDesc ?>">
  <meta property="twitter:image" content="<?= $ogImage ?>">

  <!-- GEO & Schema.org (JSON-LD) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LodgingBusiness",
      "name": "Oasi di Piobbico",
      "image": "<?= $ogImage ?>",
      "description": "<?= $defaultDesc ?>",
      "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>",
      "telephone": "+393331234567",
      "email": "info@oasidipiobbico.it",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Via Monte Nerone, 12",
        "addressLocality": "Piobbico",
        "postalCode": "61046",
        "addressRegion": "PU",
        "addressCountry": "IT"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 43.5855055,
        "longitude": 12.4789505
      },
      "priceRange": "€€",
      "starRating": {
        "@type": "Rating",
        "ratingValue": "5"
      },
      "amenityFeature": [
        {
          "@type": "LocationFeatureSpecification",
          "name": "Swimming Pool",
          "value": "True"
        },
        {
          "@type": "LocationFeatureSpecification",
          "name": "Free Wi-Fi",
          "value": "True"
        }
      ]
    }
    </script>

  <!-- Core Web Vitals & Performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap">
  </noscript>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="512x512" href="assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="512x512" href="assets/img/apple-touch-icon.png">
</head>

<body>

  <header id="main-header">
    <nav>
      <div class="logo">
        <a href="index.php">OASI DI PIOBBICO</a>
      </div>
      <ul class="nav-links">
        <li><a href="index.php" <?php if ($currentPage == 'home')
          echo 'class="active"'; ?>>Home</a></li>
        <li><a href="appartamenti.php" <?php if ($currentPage == 'appartamenti')
          echo 'class="active"'; ?>>Appartamenti</a></li>
        <li><a href="territorio.php" <?php if ($currentPage == 'territorio')
          echo 'class="active"'; ?>>Territorio</a></li>
        <li><a href="contatti.php" <?php if ($currentPage == 'contatti')
          echo 'class="active"'; ?>>Contatti</a>
        </li>
        <li><a href="contatti.php" class="btn-cta" style="padding: 10px 20px; color: white !important;">Prenota</a></li>
      </ul>
      <div class="mobile-toggle">
        <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 1H30" stroke="currentColor" stroke-width="2" />
          <path d="M0 10H30" stroke="currentColor" stroke-width="2" />
          <path d="M0 19H30" stroke="currentColor" stroke-width="2" />
        </svg>
      </div>
    </nav>
  </header>