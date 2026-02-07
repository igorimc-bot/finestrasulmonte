<?php
$pageTitle = "Oasi di Piobbico - Finestra sul monte";
$currentPage = "appartamenti";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/piobbico_piscina.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
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

            <?php
            $galleryData = [
                'salotto' => [
                    'title' => 'Salotto',
                    'amenities' => ['Riscaldamento', 'TV', 'Acqua calda', 'Caffè', 'Calici da vino', 'Cucina', 'Cucinino', 'Essenziali', 'Estintore', 'Fornelli', 'Forno', 'Freezer', 'Frigorifero', 'Ingresso privato', 'Macchina del caffè', 'Piatti e posate', 'Servizi di base per cucinare', 'Sono permessi soggiorni a lungo termine', 'Soggiorno privato', 'Tavolo da pranzo', 'Wi-fi', 'Rilevatore di monossido di carbonio', 'Asciugacapelli', 'Cuscini e coperte extra', 'Grucce'],
                    'images' => ['salotto_1.avif', 'salotto_2.avif', 'salotto_3.avif']
                ],
                'zona_pranzo' => [
                    'title' => 'Zona Pranzo',
                    'amenities' => ['Calici da vino', 'Riscaldamento', 'Tavolo da pranzo', 'Acqua calda', 'Arredi da esterni', 'Cucinino', 'Cucina', 'Estintore', 'Fornelli', 'Forno', 'Freezer', 'Frigorifero', 'Ingresso privato', 'Piatti e posate', 'Rilevatore di monossido di carbonio', 'Servizi di base per cucinare', 'Soggiorno privato', 'Sono permessi soggiorni a lungo termine', 'TV', 'Wi-fi', 'Essenziali', 'Macchina del caffè', 'Prodotti per la pulizia'],
                    'images' => ['zona_pranzo_1.avif', 'zona_pranzo_2.jpeg', 'zona_pranzo_3.avif']
                ],
                'camera_1' => [
                    'title' => 'Camera da Letto 1',
                    'amenities' => ['Letto a 2 piazze', 'Biancheria da letto', 'Cuscini e coperte extra', 'Essenziali', 'Grucce', 'Riscaldamento', 'Arredi da esterni', 'Soggiorno privato', 'Sono permessi soggiorni a lungo termine', 'Wi-fi', 'Spazio per conservare l\'abbigliamento'],
                    'images' => ['camera_da_letto_1.jpeg', 'camera_da_letto_1_2.jpeg', 'camera_da_letto_1_3.jpeg']
                ],
                'camera_2' => [
                    'title' => 'Camera da Letto 2',
                    'amenities' => ['Letto singolo', 'Biancheria da letto', 'Cuscini e coperte extra', 'Riscaldamento', 'Grucce', 'Wi-fi', 'Spazio per conservare l\'abbigliamento', 'Sono permessi soggiorni a lungo termine', 'Soggiorno privato', 'Parcheggio gratuito nella proprietà'],
                    'images' => ['camera_da_letto_2.avif', 'camera_da_letto_2_2.avif', 'camera_da_letto_2_3.avif']
                ],
                'bagno' => [
                    'title' => 'Bagno Completo',
                    'amenities' => ['Acqua calda', 'Asciugacapelli', 'Gel doccia', 'Bidet', 'Prodotti per la pulizia', 'Riscaldamento', 'Essenziali', 'Lavatrice', 'Sapone per il corpo', 'Shampoo', 'Soggiorno privato', 'Sono permessi soggiorni a lungo termine', 'Wi-fi'],
                    'images' => ['bagno_completo_1.jpeg', 'bagno_completo_2.jpeg', 'bagno_completo_3.avif']
                ],
                'cortile' => [
                    'title' => 'Cortile',
                    'amenities' => ['Doccia all\'aperto', 'Zona pranzo all\'aperto', 'Lettini prendisole', 'Braciere', 'Parcheggio gratuito nella proprietà', 'Piscina', 'Sono permessi soggiorni a lungo termine'],
                    'images' => ['cortile.avif', 'cortile_2.avif']
                ],
                'esterni' => [
                    'title' => 'Esterni',
                    'amenities' => ['Parcheggio gratuito nella proprietà', 'Sono permessi soggiorni a lungo termine', 'Piscina', 'Lettini prendisole', 'Doccia all\'aperto'],
                    'images' => ['esterni.avif', 'esterni_2.webp', 'esterni_3.avif', 'esterni_4.avif', 'esterni_5.jpeg', 'esterni_6.jpeg']
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
                        <img src="assets/img/Oasi di Piobbico/<?php echo $img; ?>" alt="<?php echo $data['title']; ?>"
                            class="gallery-item show" data-category="<?php echo $id; ?>"
                            style="width: 100%; border-radius: 5px; height: 180px; object-fit: cover; cursor: pointer; transition: transform 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'"
                            onclick="openLightbox(this.src)">
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <!-- Enhanced Lightbox -->
            <div id="lightbox" onclick="if(event.target === this) closeLightbox()">
                <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
                <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1)">&#10094;</button>
                <img id="lightbox-img" src="">
                <button class="lightbox-nav lightbox-next" onclick="changeImage(1)">&#10095;</button>
            </div>

            <script>
                let currentCategory = 'all';
                let currentImages = [];
                let currentIndex = 0;

                function filterGallery(category, btn) {
                    currentCategory = category;

                    // Update buttons
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    // Filter images
                    const allImages = document.querySelectorAll('.gallery-item');
                    allImages.forEach(img => {
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
                    const lightbox = document.getElementById('lightbox');
                    const img = document.getElementById('lightbox-img');

                    // Get currently visible images
                    const selector = currentCategory === 'all' ? '.gallery-item' : `.gallery-item[data-category="${currentCategory}"]`;
                    currentImages = Array.from(document.querySelectorAll(selector));

                    // Find index of clicked image
                    currentIndex = currentImages.findIndex(image => image.src === src);

                    // Show lightbox
                    img.src = src;
                    lightbox.classList.add('active');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                }

                function closeLightbox() {
                    const lightbox = document.getElementById('lightbox');
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }

                function changeImage(direction) {
                    currentIndex += direction;

                    // Loop
                    if (currentIndex >= currentImages.length) currentIndex = 0;
                    if (currentIndex < 0) currentIndex = currentImages.length - 1;

                    const img = document.getElementById('lightbox-img');

                    // Small fade effect for image transition
                    img.style.opacity = '0';
                    setTimeout(() => {
                        img.onload = () => { img.style.opacity = '1'; };
                        img.src = currentImages[currentIndex].src;
                    }, 200);
                }

                // Keyboard navigation
                document.addEventListener('keydown', function (e) {
                    if (!document.getElementById('lightbox').classList.contains('active')) return;

                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowLeft') changeImage(-1);
                    if (e.key === 'ArrowRight') changeImage(1);
                });
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
                <a href="https://www.airbnb.it/rooms/1474741731463526524" target="_blank"
                    style="display: block; text-align: center; margin-top: 15px; color: #ff5a5f; font-weight: 600;">Vedi
                    su Airbnb &rarr;</a>
            </div>
        </aside>
    </div>
</main>

<?php include 'includes/footer.php'; ?>