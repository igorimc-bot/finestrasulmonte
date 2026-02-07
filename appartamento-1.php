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

            <?php
            $galleryData = [
                'salotto' => [
                    'title' => 'Salotto',
                    'amenities' => ['TV', 'Riscaldamento', 'Acqua calda', 'Arredi da esterni', 'Caffè', 'Calici da vino', 'Frigorifero', 'Freezer', 'Fornelli', 'Ferro da stiro', 'Estintore', 'Macchina del caffè', 'Wi-fi', 'Teglia da forno', 'Tavolo da pranzo', 'Soggiorno privato', 'Sono permessi soggiorni a lungo termine'],
                    'images' => ['salotto_1.avif', 'salotto_2.avif', 'salotto_3.avif', 'salotto_4.avif', 'salotto_5.avif']
                ],
                'zona_pranzo' => [
                    'title' => 'Zona Pranzo',
                    'amenities' => ['Calici da vino', 'Riscaldamento', 'Tavolo da pranzo', 'Acqua calda', 'Arredi da esterni', 'Caffè', 'Cucina', 'Essenziali', 'Estintore', 'Forno', 'Freezer', 'Fornelli', 'Frigorifero', 'Ingresso privato', 'Macchina del caffè', 'Prodotti per la pulizia', 'Rilevatore di monossido di carbonio', 'Servizi di base per cucinare', 'Soggiorno privato', 'Sono permessi soggiorni a lungo termine', 'Stendibiancheria per abiti', 'Teglia da forno', 'TV', 'Wi-fi', 'Piatti e posate'],
                    'images' => ['zona_pranzo_1.avif', 'zona_pranzo_2.avif', 'zona_pranzo_3.avif']
                ],
                'camera_1' => [
                    'title' => 'Camera da Letto 1',
                    'amenities' => ['Letto a 2 piazze', 'Biancheria da letto', 'Cuscini e coperte extra', 'Essenziali', 'Grucce', 'Riscaldamento', 'Arredi da esterni', 'Sono permessi soggiorni a lungo termine', 'Soggiorno privato', 'Wi-fi'],
                    'images' => ['camera_da_letto_1.avif', 'camera_da_letto_2.avif', 'camera_da_letto_3.avif', 'camera_da_letto_4.avif']
                ],
                'camera_2' => [
                    'title' => 'Camera da Letto 2',
                    'amenities' => ['2 letti singoli', 'Biancheria da letto', 'Cuscini e coperte extra', 'Essenziali', 'Grucce', 'Riscaldamento', 'Sono permessi soggiorni a lungo termine', 'Soggiorno privato', 'Spazio per conservare l\'abbigliamento', 'Wi-fi'],
                    'images' => ['camera_da_letto2_1.avif', 'camera_da_letto2_2.avif', 'camera_da_letto2_3.avif']
                ],
                'bagno' => [
                    'title' => 'Bagno Completo',
                    'amenities' => ['Acqua calda', 'Asciugacapelli', 'Bidet', 'Gel doccia', 'Riscaldamento', 'Prodotti per la pulizia', 'Essenziali', 'Lavatrice', 'Sapone per il corpo', 'Shampoo', 'Soggiorno privato', 'Sono permessi soggiorni a lungo termine', 'Stendibiancheria per abiti', 'Wi-fi'],
                    'images' => ['bagno_completo_1.avif', 'bagno_completo_2.avif']
                ],
                'esterni' => [
                    'title' => 'Esterni',
                    'amenities' => ['Doccia all\'aperto', 'Griglia per barbecue', 'Lettini prendisole', 'Parcheggio gratuito nella proprietà', 'Piscina', 'Zona pranzo all\'aperto'],
                    'images' => ['esterni.avif', 'esterni_2.avif', 'esterni_3.avif', 'esterni_4.avif', 'esterni_5.avif', 'esterni_6.avif']
                ],
                'piscina' => [
                    'title' => 'Piscina',
                    'amenities' => ['Lettini prendisole', 'Parcheggio gratuito nella proprietà', 'Piscina', 'Doccia all\'aperto'],
                    'images' => ['piscina_1.avif', 'piscina_2.jpeg']
                ]
            ];
            ?>

            <h3 style="color: var(--primary); margin-bottom: 20px;">Galleria Fotografica</h3>

            <!-- Filters -->
            <div class="gallery-filters">
                <button class="filter-btn active" onclick="filterGallery('all', this)">Tutto</button>
                <?php foreach ($galleryData as $id => $data): ?>
                    <button class="filter-btn"
                        onclick="filterGallery('<?php echo $id; ?>', this)"><?php echo $data['title']; ?></button>
                <?php endforeach; ?>
            </div>

            <!-- Descriptions -->
            <div id="gallery-descriptions">
                <?php foreach ($galleryData as $id => $data): ?>
                    <div class="gallery-description" id="desc-<?php echo $id; ?>">
                        <h4 style="margin-bottom: 15px; color: var(--accent);"><?php echo $data['title']; ?> - Servizi</h4>
                        <ul style="column-count: 2; column-gap: 40px; font-size: 0.95rem; color: var(--text-muted);">
                            <?php foreach ($data['amenities'] as $amenity): ?>
                                <li style="margin-bottom: 5px;">• <?php echo $amenity; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Image Grid -->
            <div class="gallery-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                <?php foreach ($galleryData as $id => $data): ?>
                    <?php foreach ($data['images'] as $img): ?>
                        <img src="assets/img/Residence con Vista Monte Nerone/<?php echo $img; ?>"
                            alt="<?php echo $data['title']; ?>" class="gallery-item show" data-category="<?php echo $id; ?>"
                            style="width: 100%; border-radius: 5px; height: 180px; object-fit: cover; cursor: pointer; transition: transform 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'"
                            onclick="openLightbox(this.src)">
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Simple Lightbox Script -->
            <div id="lightbox"
                style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 2000; align-items: center; justify-content: center; cursor: pointer;"
                onclick="this.style.display='none'">
                <img id="lightbox-img" src=""
                    style="max-width: 90%; max-height: 90%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
            </div>

            <script>
                function filterGallery(category, btn) {
                    // Update buttons
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    // Filter images
                    const images = document.querySelectorAll('.gallery-item');
                    images.forEach(img => {
                        if (category === 'all' || img.getAttribute('data-category') === category) {
                            img.classList.add('show');
                        } else {
                            img.classList.remove('show');
                        }
                    });

                    // Update description
                    document.querySelectorAll('.gallery-description').forEach(d => d.classList.remove('active'));
                    if (category !== 'all') {
                        const desc = document.getElementById('desc-' + category);
                        if (desc) desc.classList.add('active');
                    }
                }

                function openLightbox(src) {
                    document.getElementById('lightbox-img').src = src;
                    document.getElementById('lightbox').style.display = 'flex';
                }
            </script>
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