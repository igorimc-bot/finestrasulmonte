<?php
$pageTitle = "Territorio e Attività - Finestra sul monte";
$currentPage = "territorio";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url('assets/img/hero_monte_nerone.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Scopri il Monte Nerone</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Un paradiso per gli amanti della natura e dello sport</p>
        </div>
    </section>

    <section class="container" style="padding: 80px 0;">
        <div class="reveal" style="text-align: center; max-width: 800px; margin: 0 auto 60px;">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Piobbico e le sue Meraviglie</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted);">
                Piobbico è un antico borgo medievale dominato dal Castello Brancaleoni, incastonato tra il Monte Nerone
                e il Monte Montiego.
                È la base ideale per esplorare l'Appennino pesarese.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <!-- Activity 1 -->
            <div class="reveal"
                style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                <span style="font-size: 3rem; display: block; margin-bottom: 20px;">🚵</span>
                <h3 style="margin-bottom: 15px; color: var(--primary);">Ciclismo e MTB</h3>
                <p style="color: var(--text-muted); margin-bottom: 15px;">
                    Il Monte Nerone è una meta leggendaria, tappa del <strong>Giro d'Italia Women 2025</strong>. Sfida
                    te stesso con:
                </p>
                <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                    <li style="margin-bottom: 8px;">• <strong>Brevetto del Nerone</strong>: Scalata dei 3 versanti in un
                        giorno.</li>
                    <li style="margin-bottom: 8px;">• <strong>Ascesa da Piobbico</strong>: 14km al 9% medio.</li>
                    <li style="margin-bottom: 8px;">• <strong>Bike Park</strong>: Percorsi Downhill ed Enduro.</li>
                    <li style="margin-bottom: 8px;">• <strong>Cicloturismo</strong>: Itinerari panoramici per tutti.
                    </li>
                </ul>
                <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                    <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                    <a href="https://www.marcheoutdoor.it/" target="_blank"
                        style="color: var(--accent); font-size: 0.9rem; margin-right: 10px;">Marche Outdoor &rarr;</a>
                    <a href="https://www.komoot.com/guide/45317/cycling-around-monte-nerone" target="_blank"
                        style="color: var(--accent); font-size: 0.9rem;">Komoot &rarr;</a>
                </div>
            </div>

            <!-- Activity 2 -->
            <div class="reveal"
                style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition-delay: 0.1s; display: flex; flex-direction: column;">
                <span style="font-size: 3rem; display: block; margin-bottom: 20px;">🥾</span>
                <h3 style="margin-bottom: 15px; color: var(--primary);">Trekking e Natura</h3>
                <p style="color: var(--text-muted); margin-bottom: 15px;">
                    Un paradiso escursionistico con decine di sentieri CAI. Da non perdere:
                </p>
                <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                    <li style="margin-bottom: 8px;">• <strong>Arco di Fondarca</strong>: Un anfiteatro naturale
                        nascosto.</li>
                    <li style="margin-bottom: 8px;">• <strong>Grotta di Nerone</strong>: Suggestiva cavità visitabile.
                    </li>
                    <li style="margin-bottom: 8px;">• <strong>Vetta (1525m)</strong>: Vista mozzafiato sugli Appennini.
                    </li>
                    <li style="margin-bottom: 8px;">• <strong>Sentiero Italia</strong>: Tappe CAI ben segnalate.</li>
                </ul>
                <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                    <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                    <a href="https://www.pesarotrekking.it/" target="_blank"
                        style="color: var(--accent); font-size: 0.9rem; margin-right: 10px;">Pesaro Trekking &rarr;</a>
                    <a href="https://www.appennino.tv/" target="_blank"
                        style="color: var(--accent); font-size: 0.9rem;">Appennino.tv &rarr;</a>
                </div>
            </div>

            <!-- Activity 3 -->
            <div class="reveal"
                style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition-delay: 0.2s; display: flex; flex-direction: column;">
                <span style="font-size: 3rem; display: block; margin-bottom: 20px;">🏰</span>
                <h3 style="margin-bottom: 15px; color: var(--primary);">Cultura e Borghi</h3>
                <p style="color: var(--text-muted); margin-bottom: 15px;">
                    Arte e storia a pochi minuti di distanza. Luoghi unici da visitare:
                </p>
                <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                    <li style="margin-bottom: 8px;">• <strong>Castello Brancaleoni</strong>: Proprio qui a Piobbico.
                    </li>
                    <li style="margin-bottom: 8px;">• <strong>Urbino (UNESCO)</strong>: Palazzo Ducale e Raffaello.</li>
                    <li style="margin-bottom: 8px;">• <strong>Urbania</strong>: La Chiesa dei Morti e le ceramiche.</li>
                    <li style="margin-bottom: 8px;">• <strong>Gubbio</strong>: La città di pietra più bella d'Italia.
                    </li>
                </ul>
                <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                    <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                    <a href="http://www.castellobrancaleoni.it/" target="_blank"
                        style="color: var(--accent); font-size: 0.9rem; margin-right: 10px;">Castello Brancaleoni
                        &rarr;</a>
                    <a href="http://www.gallerianazionalemarche.it/" target="_blank"
                        style="color: var(--accent); font-size: 0.9rem;">Galleria Marche &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="height: 400px; background: #eee;">
        <!-- Placeholder for Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46077.53327668584!2d12.47895055!3d43.5855055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cf0b0a8c4f0b7%3A0x4082c90e3e48c90!2s61046%20Piobbico%20PU!5e0!3m2!1sit!2sit!4v1700000000000!5m2!1sit!2sit"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<?php include 'includes/footer.php'; ?>