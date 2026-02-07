<?php
$pageTitle = "Territorio e Attività - Finestra sul monte";
$currentPage = "territorio";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/hero_monte_nerone.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
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
                style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                <span style="font-size: 3rem; display: block; margin-bottom: 20px;">🚵</span>
                <h3 style="margin-bottom: 15px; color: var(--primary);">Ciclismo e MTB</h3>
                <p style="color: var(--text-muted);">
                    Il Monte Nerone è una meta leggendaria per i ciclisti, con salite impegnative e percorsi MTB che
                    attraversano boschi e crinali panoramici.
                </p>
            </div>

            <!-- Activity 2 -->
            <div class="reveal"
                style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition-delay: 0.1s;">
                <span style="font-size: 3rem; display: block; margin-bottom: 20px;">🥾</span>
                <h3 style="margin-bottom: 15px; color: var(--primary);">Trekking</h3>
                <p style="color: var(--text-muted);">
                    Decine di sentieri segnati CAI vi porteranno alla scoperta di grotte, forre e vette. Non perdete
                    l'escursione all'Arco di Fondarca o alla Grotta di Nerone.
                </p>
            </div>

            <!-- Activity 3 -->
            <div class="reveal"
                style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition-delay: 0.2s;">
                <span style="font-size: 3rem; display: block; margin-bottom: 20px;">🏰</span>
                <h3 style="margin-bottom: 15px; color: var(--primary);">Cultura e Borghi</h3>
                <p style="color: var(--text-muted);">
                    Visitate il Castello Brancaleoni a Piobbico, oppure spostatevi verso Urbania, Urbino (Patrimonio
                    UNESCO) e Gubbio, tutti raggiungibili in breve tempo.
                </p>
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