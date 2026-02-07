<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? "Finestra sul monte - Piobbico" ?></title>
    <meta name="description"
        content="<?= $pageDescription ?? 'Appartamenti vacanze con vista sul Monte Nerone a Piobbico. Relax, natura e comfort per la tua vacanza ideale.' ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>

<body>

    <header id="main-header">
        <nav>
            <div class="logo">
                <a href="index.php">FINESTRA SUL MONTE</a>
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
                <li><a href="contatti.php" class="btn-cta"
                        style="padding: 10px 20px; color: white !important;">Prenota</a></li>
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