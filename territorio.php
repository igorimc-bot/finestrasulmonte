<?php
$pageTitle = "Territorio e Attività - Oasi di Piobbico";
$currentPage = "territorio";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('assets/img/monte_nerone.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Scopri il Monte Nerone</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Un paradiso per gli amanti della natura e dello sport</p>
        </div>
    </section>

    <style>
        .activities-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        @media (min-width: 992px) {
            .activities-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>

    <section class="container" style="padding: 80px 0;">
        <div class="reveal" style="text-align: center; max-width: 800px; margin: 0 auto 60px;">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Piobbico e le sue Meraviglie</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted);">
                Piobbico è un antico borgo medievale dominato dal Castello Brancaleoni, incastonato tra il Monte Nerone
                e il Monte Montiego.
                È la base ideale per esplorare l'Appennino pesarese.
            </p>
        </div>

        <div class="activities-grid">
            <!-- Activity 1 -->
            <div class="reveal overflow-hidden"
                style="background: var(--white); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); display: flex; flex-direction: column; transition: transform 0.3s ease;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="assets/img/ciclismo.jpg" alt="Ciclismo sul Monte Nerone"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; color: var(--primary);">Ciclismo e MTB</h3>
                    <p style="color: var(--text-muted); margin-bottom: 15px;">
                        Il Monte Nerone è una meta leggendaria, tappa del <strong>Giro d'Italia Women 2025</strong>.
                        Sfida
                        te stesso con:
                    </p>
                    <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                        <li style="margin-bottom: 8px;">• <strong>Brevetto del Nerone</strong>: Scalata dei 3 versanti
                            in un
                            giorno.</li>
                        <li style="margin-bottom: 8px;">• <strong>Ascesa da Piobbico</strong>: 14km al 9% medio.</li>
                        <li style="margin-bottom: 8px;">• <strong>Bike Park</strong>: Percorsi Downhill ed Enduro.</li>
                        <li style="margin-bottom: 8px;">• <strong>Cicloturismo</strong>: Itinerari panoramici per tutti.
                        </li>
                    </ul>
                    <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                        <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                        <a href="https://www.marcheoutdoor.it/" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; margin-right: 15px; text-decoration: none; font-weight: 500;">Marche
                            Outdoor &rarr;</a>
                        <a href="https://www.komoot.com/guide/45317/cycling-around-monte-nerone" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; text-decoration: none; font-weight: 500;">Komoot
                            &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Activity 2 -->
            <div class="reveal overflow-hidden"
                style="background: var(--white); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition-delay: 0.1s; display: flex; flex-direction: column; transition: transform 0.3s ease;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="assets/img/monte nerone balza forata.jpg" alt="Trekking sul Monte Nerone"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; color: var(--primary);">Trekking e Natura</h3>
                    <p style="color: var(--text-muted); margin-bottom: 15px;">
                        Un paradiso escursionistico con decine di sentieri CAI. Da non perdere:
                    </p>
                    <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                        <li style="margin-bottom: 8px;">• <strong>Arco di Fondarca</strong>: Un anfiteatro naturale
                            nascosto.</li>
                        <li style="margin-bottom: 8px;">• <strong>Grotta di Nerone</strong>: Suggestiva cavità
                            visitabile.
                        </li>
                        <li style="margin-bottom: 8px;">• <strong>Vetta (1525m)</strong>: Vista mozzafiato sugli
                            Appennini.
                        </li>
                        <li style="margin-bottom: 8px;">• <strong>Sentiero Italia</strong>: Tappe CAI ben segnalate.
                        </li>
                    </ul>
                    <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                        <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                        <a href="https://www.pesarotrekking.it/" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; margin-right: 15px; text-decoration: none; font-weight: 500;">Pesaro
                            Trekking &rarr;</a>
                        <a href="https://www.appennino.tv/" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; text-decoration: none; font-weight: 500;">Appennino.tv
                            &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Activity 3 -->
            <div class="reveal overflow-hidden"
                style="background: var(--white); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition-delay: 0.2s; display: flex; flex-direction: column; transition: transform 0.3s ease;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="assets/img/Castello_Brancaleoni_Piobbico.jpg" alt="Castello Brancaleoni Piobbico"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; color: var(--primary);">Cultura e Borghi</h3>
                    <p style="color: var(--text-muted); margin-bottom: 15px;">
                        Arte e storia a pochi minuti di distanza. Luoghi unici da visitare:
                    </p>
                    <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                        <li style="margin-bottom: 8px;">• <strong>Castello Brancaleoni</strong>: Proprio qui a Piobbico.
                        </li>
                        <li style="margin-bottom: 8px;">• <strong>Urbino (UNESCO)</strong>: Palazzo Ducale e Raffaello.
                        </li>
                        <li style="margin-bottom: 8px;">• <strong>Urbania</strong>: La Chiesa dei Morti e le ceramiche.
                        </li>
                        <li style="margin-bottom: 8px;">• <strong>Gubbio</strong>: La città di pietra più bella
                            d'Italia.
                        </li>
                    </ul>
                    <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                        <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                        <a href="http://www.castellobrancaleoni.it/" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; margin-right: 15px; text-decoration: none; font-weight: 500;">Castello
                            Brancaleoni
                            &rarr;</a>
                        <a href="http://www.gallerianazionalemarche.it/" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; text-decoration: none; font-weight: 500;">Galleria
                            Marche &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Activity 4 -->
            <div class="reveal overflow-hidden"
                style="background: var(--white); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition-delay: 0.3s; display: flex; flex-direction: column; transition: transform 0.3s ease;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="assets/img/enogastronomia.jpg" alt="Enogastronomia Piobbico"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; color: var(--primary);">Enogastronomia</h3>
                    <p style="color: var(--text-muted); margin-bottom: 15px;">
                        I sapori autentici dell'Alta Valle del Metauro. Da non perdere:
                    </p>
                    <ul style="margin-bottom: 20px; color: var(--text-muted); list-style-type: none; padding-left: 0;">
                        <li style="margin-bottom: 8px;">• <strong>Sagra del Polentone</strong>: Un rito storico dei
                            carbonari.</li>
                        <li style="margin-bottom: 8px;">• <strong>Polenta alla Carbonara</strong>: Cucinata in grandi
                            paioli.</li>
                        <li style="margin-bottom: 8px;">• <strong>Tartufo Bianco</strong>: Pregiato tesoro dei nostri
                            boschi.</li>
                        <li style="margin-bottom: 8px;">• <strong>Club dei Brutti</strong>: Divertimento e folklore
                            unico.
                        </li>
                    </ul>
                    <div style="margin-top: auto; padding-top: 15px; border-top: 1px solid #eee;">
                        <p style="font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">Per approfondire:</p>
                        <a href="https://www.neronexperience.it/" target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; margin-right: 15px; text-decoration: none; font-weight: 500;">Nerone
                            Experience &rarr;</a>
                        <a href="https://www.piobbicowelcome.it/eventi/sagra-nazionale-del-polentone-alla-carbonara/"
                            target="_blank"
                            style="color: var(--accent); font-size: 0.9rem; text-decoration: none; font-weight: 500;">Sagra
                            del polentone alla carbonara
                            &rarr;</a>
                    </div>
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