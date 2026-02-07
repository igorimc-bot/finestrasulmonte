<?php
$pageTitle = "Appartamento Vista Monte Nerone - Finestra sul monte";
$currentPage = "appartamenti";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/residence_vista_piscina.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Residence con Vista</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Il tuo rifugio esclusivo con piscina</p>
        </div>
    </section>

    <div class="container" style="padding: 60px 0; display: grid; grid-template-columns: 2fr 1fr; gap: 60px;">
        <!-- Main Content -->
        <div class="content">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Descrizione</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px; color: var(--text-muted);">
                Goditi una vacanza indimenticabile in questo splendido appartamento situato a Piobbico, con una vista
                mozzafiato sul Monte Nerone.
                L'appartamento è arredato con gusto, unendo comfort moderno e calore tradizionale.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 40px; color: var(--text-muted);">
                Ideale per famiglie o coppie che cercano relax e natura. Gli ospiti hanno accesso a una bellissima
                piscina condivisa, perfetta per rinfrescarsi nelle giornate estive.
            </p>

            <h3 style="color: var(--accent); margin-bottom: 20px;">Caratteristiche e Servizi</h3>
            <ul style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 40px;">
                <li>✓ Vista Panoramica</li>
                <li>✓ Piscina Condivisa</li>
                <li>✓ Wi-Fi Gratuito</li>
                <li>✓ Cucina Attrezzata</li>
                <li>✓ Parcheggio Gratuito</li>
                <li>✓ TV</li>
                <li>✓ Riscaldamento</li>
                <li>✓ Adatto alle famiglie</li>
            </ul>

            <h3 style="color: var(--primary); margin-bottom: 20px;">Galleria</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <img src="assets/img/residence_vista_piscina.jpg" alt="Interno"
                    style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                <img src="assets/img/hero_monte_nerone.jpg" alt="Esterno"
                    style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                <!-- Placeholders -->
                <div style="background: #eee; height: 150px; border-radius: 5px;"></div>
                <div style="background: #eee; height: 150px; border-radius: 5px;"></div>
            </div>
        </div>

        <!-- Sidebar / Booking -->
        <aside>
            <div
                style="background: var(--bg-light); padding: 30px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.05); position: sticky; top: 100px;">
                <h3 style="margin-bottom: 20px; color: var(--primary);">Prenota Ora</h3>
                <p style="margin-bottom: 20px; font-size: 0.9rem;">Contattaci per verificare la disponibilità e ricevere
                    un'offerta personalizzata.</p>

                <a href="contatti.php" class="btn-cta"
                    style="display: block; text-align: center; margin-bottom: 15px;">Richiedi Disponibilità</a>

                <div style="text-align: center; margin-top: 20px; font-size: 0.9rem;">
                    <p>Oppure chiamaci:</p>
                    <a href="tel:+393331234567" style="color: var(--accent); font-weight: bold; font-size: 1.1rem;">+39
                        333 1234567</a>
                </div>

                <hr style="margin: 20px 0; opacity: 0.2;">

                <p style="font-size: 0.85rem; opacity: 0.7; text-align: center;">
                    Puoi prenotare anche su Airbnb, ma prenotando direttamente risparmi le commissioni!
                </p>
                <a href="https://www.airbnb.it/rooms/1474621637482501658" target="_blank"
                    style="display: block; text-align: center; margin-top: 15px; color: #ff5a5f; font-weight: 600;">Vedi
                    su Airbnb &rarr;</a>
            </div>
        </aside>
    </div>
</main>

<?php include 'includes/footer.php'; ?>