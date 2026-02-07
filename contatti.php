<?php
$pageTitle = "Contatti - Finestra sul monte";
$currentPage = "contatti";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/hero_homepage.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Contattaci</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Siamo a tua disposizione per ogni informazione</p>
        </div>
    </section>

    <div class="container" style="padding: 80px 0; display: grid; grid-template-columns: 1fr 1fr; gap: 80px;">
        <!-- Contact Info -->
        <div class="contact-info reveal">
            <h2 style="color: var(--primary); margin-bottom: 30px;">Recapiti</h2>
            <p style="margin-bottom: 30px; line-height: 1.8; color: var(--text-muted);">
                Per prenotare il tuo soggiorno o per richiedere maggiori informazioni sugli appartamenti e sulle
                attività del territorio, non esitare a contattarci.
            </p>

            <div style="margin-bottom: 40px;">
                <div style="margin-bottom: 20px;">
                    <h3 style="font-size: 1.1rem; color: var(--accent); margin-bottom: 5px;">Indirizzo</h3>
                    <p>Via Monte Nerone, 12<br>61046 Piobbico (PU)</p>
                </div>
                <div style="margin-bottom: 20px;">
                    <h3 style="font-size: 1.1rem; color: var(--accent); margin-bottom: 5px;">Telefono / WhatsApp</h3>
                    <p><a href="tel:+393331234567" style="font-weight: 600;">+39 333 1234567</a></p>
                </div>
                <div style="margin-bottom: 20px;">
                    <h3 style="font-size: 1.1rem; color: var(--accent); margin-bottom: 5px;">Email</h3>
                    <p><a href="mailto:info@finestrasulmonte.it">info@finestrasulmonte.it</a></p>
                </div>
            </div>

            <h3 style="color: var(--primary); margin-bottom: 20px;">Dove Siamo</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46077.53327668584!2d12.47895055!3d43.5855055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cf0b0a8c4f0b7%3A0x4082c90e3e48c90!2s61046%20Piobbico%20PU!5e0!3m2!1sit!2sit!4v1700000000000!5m2!1sit!2sit"
                width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Contact Form -->
        <div class="contact-form reveal" style="transition-delay: 0.2s;">
            <div
                style="background: var(--white); padding: 40px; border-radius: 10px; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
                <h2 style="color: var(--primary); margin-bottom: 30px;">Scrivici</h2>
                <form action="#" method="POST">
                    <div style="margin-bottom: 20px;">
                        <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500;">Nome e
                            Cognome</label>
                        <input type="text" id="name" name="name" required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label for="email"
                                style="display: block; margin-bottom: 8px; font-weight: 500;">Email</label>
                            <input type="email" id="email" name="email" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;">
                        </div>
                        <div>
                            <label for="phone"
                                style="display: block; margin-bottom: 8px; font-weight: 500;">Telefono</label>
                            <input type="tel" id="phone" name="phone"
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;">
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="message"
                            style="display: block; margin-bottom: 8px; font-weight: 500;">Messaggio</label>
                        <textarea id="message" name="message" rows="5" required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-cta"
                        style="width: 100%; border: none; cursor: pointer; font-size: 1rem;">Invia Messaggio</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>