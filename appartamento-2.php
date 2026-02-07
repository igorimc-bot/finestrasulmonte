<?php
$pageTitle = "Oasi di Piobbico - Finestra sul monte";
$currentPage = "appartamenti";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/hero_monte_nerone.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Oasi di Piobbico</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Natura, piscina e vista sul Monte Nerone</p>
        </div>
    </section>

    <div class="container" style="padding: 60px 0; display: grid; grid-template-columns: 2fr 1fr; gap: 60px;">
        <!-- Main Content -->
        <div class="content">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Descrizione</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px; color: var(--text-muted);">
                Immerso nel verde, l'appartamento "Oasi di Piobbico" è la soluzione perfetta per chi desidera staccare
                dalla frenesia quotidiana.
                Spazioso e luminoso, offre tutti i comfort per farvi sentire come a casa.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 40px; color: var(--text-muted);">
                La proprietà dispone di un ampio giardino e di una fantastica piscina, dove potrete rilassarvi ammirando
                il profilo del Monte Nerone.
                Ottima base per escursioni e gite in bicicletta.
            </p>

            <h3 style="color: var(--accent); margin-bottom: 20px;">Caratteristiche e Servizi</h3>
            <ul style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 40px;">
                <li>✓ Vista Monte Nerone</li>
                <li>✓ Piscina</li>
                <li>✓ Ingresso Indipendente</li>
                <li>✓ Cucina Completa</li>
                <li>✓ Giardino</li>
                <li>✓ Wi-Fi</li>
                <li>✓ Animali Ammessi (su richiesta)</li>
                <li>✓ Lavatrice</li>
            </ul>

            <h3 style="color: var(--primary); margin-bottom: 20px;">Galleria</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <img src="assets/img/piobbico_piscina.jpg" alt="Piscina"
                    style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                <img src="assets/img/hero_monte_nerone.jpg" alt="Vista"
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
                <a href="https://www.airbnb.it/rooms/1474741731463526524" target="_blank"
                    style="display: block; text-align: center; margin-top: 15px; color: #ff5a5f; font-weight: 600;">Vedi
                    su Airbnb &rarr;</a>
            </div>
        </aside>
    </div>
</main>

<?php include 'includes/footer.php'; ?>