<footer>
    <div class="footer-content">
        <div class="footer-info">
            <h3>Finestra sul monte</h3>
            <p>Piobbico, Monte Nerone</p>
            <p>Il tuo rifugio ideale tra natura, sport e relax nel cuore delle Marche.</p>
        </div>
        <div class="footer-links">
            <h4>Esplora</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="appartamenti.php">Appartamenti</a></li>
                <li><a href="territorio.php">Territorio</a></li>
                <li><a href="contatti.php">Contatti</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>Contattaci</h4>
            <p>Piobbico (PU), Marche, Italia</p>
            <p>Email: info@oasidipiobbico.it</p>
            <p>Tel: +39 333 1234567</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Finestra sul monte. Tutti i diritti riservati.</p>
    </div>
</footer>


<!-- Cookie Banner -->
<div id="cookie-banner" class="cookie-banner" style="display: none;">
    <div class="cookie-content">
        <h3>Informativa sui Cookie</h3>
        <p>Utilizziamo cookie tecnici essenziali per garantire il corretto funzionamento del sito e, con il tuo
            consenso, cookie di profilazione e statistici per offrirti un'esperienza personalizzata e analizzare il
            traffico. Cliccando su "Accetta tutti" acconsenti all'uso di tutti i cookie. Cliccando su "Rifiuta non
            necessari" manterrai i soli cookie tecnici. Puoi personalizzare le tue scelte cliccando su "Preferenze".</p>
        <div class="cookie-actions">
            <button id="cookie-accept-all" class="btn-cookie btn-cookie-primary">Accetta tutti</button>
            <button id="cookie-reject-all" class="btn-cookie btn-cookie-secondary">Rifiuta non necessari</button>
            <button id="cookie-preferences-btn" class="btn-cookie btn-cookie-outline">Preferenze</button>
        </div>
    </div>
</div>

<!-- Cookie Preferences Modal -->
<div id="cookie-modal" class="cookie-modal" style="display: none;">
    <div class="cookie-modal-content">
        <div class="cookie-modal-header">
            <h3>Preferenze Cookie</h3>
            <button id="close-cookie-modal" class="cookie-modal-close">&times;</button>
        </div>
        <div class="cookie-modal-body">
            <p style="margin-bottom: 20px; font-size: 0.9rem; color: #555;">Qui puoi gestire le tue preferenze sui
                cookie. Le modifiche avranno effetto immediato sulla tua esperienza di navigazione.</p>
            <div class="cookie-option">
                <div class="cookie-option-info">
                    <h4>Cookie Necessari (Sempre Attivi)</h4>
                    <p>Essenziali per il funzionamento delle funzionalità base del sito web. Non possono essere
                        disattivati nei nostri sistemi.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" checked disabled>
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="cookie-option">
                <div class="cookie-option-info">
                    <h4>Cookie Analitici</h4>
                    <p>Ci permettono di contare le visite e le fonti di traffico, in modo da poter misurare e migliorare
                        le prestazioni del nostro sito. Tutte le informazioni raccolte sono aggregate e anonime.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" id="toggle-analytics">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="cookie-option">
                <div class="cookie-option-info">
                    <h4>Cookie di Marketing</h4>
                    <p>Tracciano i visitatori sui siti web. L'intento è visualizzare annunci pertinenti e coinvolgenti
                        per il singolo utente, integrando funzionalità di social media.</p>
                </div>
                <label class="switch">
                    <input type="checkbox" id="toggle-marketing">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="cookie-modal-footer">
            <button id="cookie-save-preferences" class="btn-cookie btn-cookie-primary">Salva preferenze</button>
        </div>
    </div>
</div>

<script src="assets/js/main.js"></script>
</body>

</html>