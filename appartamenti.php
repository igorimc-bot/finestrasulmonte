<?php
$pageTitle = "I Nostri Appartamenti - Finestra sul monte";
$currentPage = "appartamenti";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/hero_monte_nerone.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">I Nostri Appartamenti</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Scegli la soluzione perfetta per le tue vacanze</p>
        </div>
    </section>

    <section class="container" style="padding: 80px 0;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 60px;">

            <!-- Apartment 1 -->
            <div class="reveal"
                style="background: var(--bg-light); border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <div style="height: 300px; background-color: #ddd;">
                    <img src="assets/img/residence_vista_piscina.jpg" alt="Appartamento 1"
                        style="width: 100%; height: 100%; object-fit: cover;"
                        onerror="this.src='https://placehold.co/600x400?text=Appartamento+1'">
                </div>
                <div style="padding: 40px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.8rem; color: var(--primary);">Residence con Vista</h3>
                    <p style="margin-bottom: 20px; font-size: 1rem; opacity: 0.8; line-height: 1.8;">
                        Splendido appartamento con vista sul Monte Nerone e accesso alla piscina. Perfetto per godersi
                        la tranquillità delle Marche.
                        Ideale per 4 persone.
                    </p>
                    <ul
                        style="margin-bottom: 30px; font-size: 0.95rem; color: var(--text-muted); display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                        <li>✓ Vista Panoramica</li>
                        <li>✓ Piscina</li>
                        <li>✓ Wi-Fi Gratuito</li>
                        <li>✓ Parcheggio</li>
                    </ul>
                    <a href="appartamento-1.php" class="btn-cta" style="display: inline-block;">Scopri Dettagli</a>
                </div>
            </div>

            <!-- Apartment 2 -->
            <div class="reveal"
                style="background: var(--bg-light); border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition-delay: 0.2s;">
                <div style="height: 300px; background-color: #ddd;">
                    <img src="assets/img/piobbico_piscina.jpg" alt="Appartamento 2"
                        style="width: 100%; height: 100%; object-fit: cover;"
                        onerror="this.src='https://placehold.co/600x400?text=Appartamento+2'">
                </div>
                <div style="padding: 40px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.8rem; color: var(--primary);">Oasi di Piobbico</h3>
                    <p style="margin-bottom: 20px; font-size: 1rem; opacity: 0.8; line-height: 1.8;">
                        Un'oasi di pace con piscina e ogni comfort. Ideale per famiglie e gruppi che cercano una base
                        per esplorare il territorio.
                        Ampio giardino a disposizione.
                    </p>
                    <ul
                        style="margin-bottom: 30px; font-size: 0.95rem; color: var(--text-muted); display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                        <li>✓ Piscina Privata</li>
                        <li>✓ Ampio Giardino</li>
                        <li>✓ Cucina Attrezzata</li>
                        <li>✓ BBQ</li>
                    </ul>
                    <a href="appartamento-2.php" class="btn-cta" style="display: inline-block;">Scopri Dettagli</a>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>