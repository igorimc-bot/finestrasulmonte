<?php
$pageTitle = "Home - Finestra sul monte";
$currentPage = "home";
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero"
        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('assets/img/hero_homepage.jpg') center/cover no-repeat; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="hero-content reveal">
            <h1 style="font-size: clamp(3rem, 10vw, 5rem); margin-bottom: 20px;">Finestra sul Monte</h1>
            <p style="font-size: 1.2rem; font-weight: 300; max-width: 600px; margin: 0 auto 40px; font-style: italic;">
                La tua oasi di pace a Piobbico, ai piedi del Monte Nerone.
            </p>
            <a href="#appartamenti" class="btn-cta" style="padding: 15px 40px; font-size: 1rem;">Scopri gli
                Appartamenti</a>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro container">
        <div class="reveal"
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px; align-items: center;">
            <div class="intro-text">
                <h2 style="font-size: 2.5rem; margin-bottom: 30px;">Benvenuti nella Natura</h2>
                <p style="margin-bottom: 20px; font-size: 1.1rem;">
                    Immersi nel verde dell'Appennino marchigiano, i nostri appartamenti offrono il rifugio perfetto per
                    chi cerca relax, sport ed escursioni.
                    Situati a Piobbico, godono di una vista spettacolare sul Monte Nerone.
                </p>
                <p style="margin-bottom: 20px; font-size: 1.1rem;">
                    Ideale per famiglie, coppie e gruppi di ciclisti o escursionisti che vogliono esplorare i sentieri e
                    le bellezze del territorio.
                </p>

                <div style="display: flex; gap: 40px; margin-top: 30px;">
                    <div>
                        <span
                            style="display: block; font-size: 1.5rem; font-family: var(--font-heading); color: var(--accent);">2</span>
                        <span
                            style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Appartamenti</span>
                    </div>
                    <div>
                        <span
                            style="display: block; font-size: 1.5rem; font-family: var(--font-heading); color: var(--accent);">100%</span>
                        <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Natura</span>
                    </div>
                    <div>
                        <span
                            style="display: block; font-size: 1.5rem; font-family: var(--font-heading); color: var(--accent);">∞</span>
                        <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Relax</span>
                    </div>
                </div>
            </div>
            <div class="intro-img" style="position: relative;">
                <!-- Placeholder image for now -->
                <div
                    style="width: 100%; height: 400px; background-color: #eee; display: flex; align-items: center; justify-content: center; color: #aaa; border-radius: 5px; box-shadow: 20px 20px 0 var(--accent);">
                    <img src="assets/img/intro_view.jpg" alt="Vista Monte Nerone"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; display: block;"
                        onerror="this.style.display='none'; this.parentNode.innerText='Vista Monte Nerone (Immagine mancante)'">
                </div>
            </div>
        </div>
    </section>

    <!-- Apartments Section -->
    <section id="appartamenti" style="background-color: var(--white);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="color: var(--primary); margin-bottom: 15px;">I Nostri Appartamenti</h2>
                <p style="opacity: 0.8; max-width: 600px; margin: 0 auto;">Eleganza, comfort e vista panoramica per il
                    tuo soggiorno indimenticabile.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">

                <!-- Apartment 1 -->
                <div class="reveal"
                    style="background: var(--bg-light); border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <div style="height: 250px; background-color: #ddd;">
                        <img src="assets/img/residence_vista_piscina.jpg" alt="Appartamento 1"
                            style="width: 100%; height: 100%; object-fit: cover;"
                            onerror="this.src='https://placehold.co/600x400?text=Appartamento+1'">
                    </div>
                    <div style="padding: 30px;">
                        <h3 style="margin-bottom: 15px; color: var(--primary);">Residence con Vista</h3>
                        <p style="margin-bottom: 20px; font-size: 0.95rem; opacity: 0.8;">
                            Splendido appartamento con vista sul Monte Nerone e accesso alla piscina. Perfetto per
                            godersi la tranquillità delle Marche.
                        </p>
                        <ul style="margin-bottom: 30px; font-size: 0.9rem; color: var(--text-muted);">
                            <li>✓ Vista Panoramica</li>
                            <li>✓ Piscina</li>
                            <li>✓ Wi-Fi Gratuito</li>
                        </ul>
                        <a href="appartamento-1.php" class="btn-cta" style="display: inline-block;">Dettagli</a>
                    </div>
                </div>

                <!-- Apartment 2 -->
                <div class="reveal"
                    style="background: var(--bg-light); border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition-delay: 0.2s;">
                    <div style="height: 250px; background-color: #ddd;">
                        <img src="assets/img/piobbico_piscina.jpg" alt="Appartamento 2"
                            style="width: 100%; height: 100%; object-fit: cover;"
                            onerror="this.src='https://placehold.co/600x400?text=Appartamento+2'">
                    </div>
                    <div style="padding: 30px;">
                        <h3 style="margin-bottom: 15px; color: var(--primary);">Oasi di Piobbico</h3>
                        <p style="margin-bottom: 20px; font-size: 0.95rem; opacity: 0.8;">
                            Un'oasi di pace con piscina e ogni comfort. Ideale per famiglie e gruppi che cercano una
                            base per esplorare il territorio.
                        </p>
                        <ul style="margin-bottom: 30px; font-size: 0.9rem; color: var(--text-muted);">
                            <li>✓ Piscina Privata</li>
                            <li>✓ Ampio Giardino</li>
                            <li>✓ Cucina Attrezzata</li>
                        </ul>
                        <a href="appartamento-2.php" class="btn-cta" style="display: inline-block;">Dettagli</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Territory / Activities Section -->
    <section class="territorio" style="background-color: var(--primary); color: var(--white);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
                <div class="reveal">
                    <h2 style="color: var(--accent); margin-bottom: 25px;">Il Monte Nerone e Dintorni</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px; opacity: 0.9;">
                        Piobbico sorge in una splendida valle dominata dal maestoso Monte Nerone. Un paradiso per gli
                        amanti della natura e dello sport outdoor.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px; opacity: 0.9;">
                        Escursioni, trekking, mountain bike e ciclismo su strada sono solo alcune delle attività che
                        potrai praticare. Scopri i sentieri mozzafiato e i panorami unici del nostro territorio.
                    </p>
                    <a href="territorio.php" class="btn-cta"
                        style="background: transparent; color: var(--accent) !important; border-color: var(--accent);">Scopri
                        il Territorio</a>
                </div>
                <div class="reveal" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <!-- Placeholders for activity icons/images -->
                    <div
                        style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; text-align: center;">
                        <span style="font-size: 2.5rem; display: block; margin-bottom: 10px;">🚴</span>
                        <h3>Ciclismo</h3>
                    </div>
                    <div
                        style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; text-align: center;">
                        <span style="font-size: 2.5rem; display: block; margin-bottom: 10px;">🥾</span>
                        <h3>Trekking</h3>
                    </div>
                    <div
                        style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; text-align: center;">
                        <span style="font-size: 2.5rem; display: block; margin-bottom: 10px;">👨‍👩‍👧‍👦</span>
                        <h3>Famiglie</h3>
                    </div>
                    <div
                        style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; text-align: center;">
                        <span style="font-size: 2.5rem; display: block; margin-bottom: 10px;">🍷</span>
                        <h3>Enogastronomia</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta" style="text-align: center; padding: 120px 5%;">
        <div class="reveal">
            <h2 style="font-size: 3rem; margin-bottom: 20px;">Prenota la tua Vacanza</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; max-width: 700px; margin-inline: auto;">
                Contattaci per disponibilità e prezzi. Ti risponderemo al più presto per organizzare il tuo soggiorno
                perfetto.
            </p>
            <a href="contatti.php" class="btn-cta" style="padding: 18px 50px; font-size: 1.1rem;">Contattaci Ora</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>