<?php
$pageTitle = "Cookie Policy - Finestra sul monte";
$currentPage = "cookie-policy";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/hero_homepage.jpg') center/cover no-repeat; height: 40vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Cookie Policy</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Informativa completa sull'utilizzo dei cookie</p>
        </div>
    </section>

    <div class="container" style="padding: 80px 0; max-width: 900px;">
        <div class="reveal">
            <h2 style="color: var(--primary); margin-bottom: 30px;">Cosa sono i cookie?</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                I cookie sono piccoli file di testo che i siti visitati dagli utenti inviano ai loro terminali, dove
                vengono memorizzati
                per essere poi ritrasmessi agli stessi siti alla visita successiva. I cookie delle c.d. "terze parti"
                vengono, invece,
                impostati da un sito web diverso da quello che l'utente sta visitando. Questo perché su ogni sito
                possono essere presenti
                elementi (immagini, mappe, suoni, specifici link a pagine web di altri domini, ecc.) che risiedono su
                server diversi da
                quello del sito visitato.
            </p>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 40px;">Tipologie di cookie utilizzati
            </h2>

            <h3 style="color: var(--accent); margin-bottom: 15px;">Cookie Necessari (Tecnici)</h3>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Si tratta di cookie indispensabili per il corretto funzionamento del sito. Consentono la navigazione
                delle pagine,
                la condivisione dei nostri contenuti e la memorizzazione delle tue preferenze di consenso. Senza questi
                cookie non potremmo
                fornire i servizi per i quali accedi al sito. Non vengono utilizzati per scopi ulteriori.
            </p>

            <h3 style="color: var(--accent); margin-bottom: 15px;">Cookie Analitici (o Statistici)</h3>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Questi cookie ci permettono di comprendere in che modo gli utenti interagiscono con il sito fornendo
                informazioni
                relative alle sezioni visitate, il tempo trascorso sul sito e le eventuali problematiche o messaggi di
                errore riscontrati.
                Questo ci aiuta a migliorare la resa del nostro sito web. Tutte le informazioni raccolte sono aggregate
                e quindi anonime.
            </p>

            <h3 style="color: var(--accent); margin-bottom: 15px;">Cookie di Marketing (o di Profilazione)</h3>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Questi cookie sono volti a creare profili relativi all'utente e vengono utilizzati al fine di inviare
                messaggi
                pubblicitari in linea con le preferenze manifestate dallo stesso nell'ambito della navigazione in rete.
            </p>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 40px;">Gestione delle preferenze sui
                cookie</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Al momento del primo accesso a qualunque pagina del sito, è presente un banner che contiene
                un'informativa breve.
                Proseguendo la navigazione mediante accesso ad altra area del sito o selezionando un elemento dello
                stesso, acconsenti
                all'uso dei cookie.
            </p>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Puoi modificare le tue preferenze in qualsiasi momento cliccando sul link dedicato che trovi nel footer
                del sito.
                Inoltre, puoi opporti alla registrazione di cookie sul tuo hard disk configurando il tuo browser di
                navigazione
                in modo da disabilitare i cookie.
            </p>

            <div style="margin-top: 40px;">
                <button onclick="document.getElementById('cookie-modal').style.display = 'flex'" class="btn-cta"
                    style="border: none; cursor: pointer; display: inline-block;">Personalizza le tue scelte sui
                    Cookie</button>
            </div>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 60px;">Contatti</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Per ulteriori informazioni sui cookie utilizzati da questo sito web puoi scriverci all'indirizzo: <a
                    href="mailto:info@oasidipiobbico.it"
                    style="color: var(--accent); text-decoration: underline;">info@oasidipiobbico.it</a>
            </p>

            <div
                style="margin-top: 60px; padding-top: 20px; border-top: 1px solid #eee; font-size: 0.9rem; color: #777;">
                <p>Ultimo aggiornamento:
                    <?php echo date("d/m/Y"); ?>
                </p>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>