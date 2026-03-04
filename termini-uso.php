<?php
$pageTitle = "Termini e Condizioni d'Uso - Oasi di Piobbico";
$pageDescription = "Consulta i termini d'uso del sito web Oasi di Piobbico. Regole, licenze e limitazioni di responsabilità per l'utilizzo dei nostri contenuti e servizi.";
$pageKeywords = "termini d'uso casa vacanze, condizioni generali Oasi di Piobbico, legal note Piobbico, regole sito web";
$noIndex = true;
$currentPage = "termini-uso";
include 'includes/header.php';
?>

<main>
    <section class="hero-small"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('assets/img/hero_homepage.jpg') center/cover no-repeat; height: 40vh; display: flex; align-items: center; justify-content: center; text-align: center; color: var(--white);">
        <div class="reveal">
            <h1 style="font-size: 3rem;">Termini d'Uso</h1>
            <p style="font-size: 1.2rem; font-weight: 300;">Condizioni generali per l'utilizzo del nostro sito web</p>
        </div>
    </section>

    <div class="container" style="padding: 80px 0; max-width: 900px;">
        <div class="reveal">
            <h2 style="color: var(--primary); margin-bottom: 30px;">1. Accettazione dei Termini</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Accedendo a e utilizzando questo sito web, accetti di essere vincolato dai presenti Termini d'Uso, da
                tutte le leggi e le normative applicabili, e accetti di essere responsabile della conformità alle leggi
                locali applicabili. Se non sei d'accordo con uno qualsiasi di questi termini, ti è vietato utilizzare o
                accedere a questo sito. I materiali contenuti in questo sito web sono protetti dalle leggi sul copyright
                e sui marchi applicabili.
            </p>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 40px;">2. Licenza d'Uso</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                È concesso il permesso di scaricare temporaneamente una copia dei materiali (informazioni o software)
                sul sito web di Oasi di Piobbico solo per la visualizzazione transitoria personale e non commerciale.
                Questa è la concessione di una licenza, non un trasferimento di titolo, e con questa licenza non è
                possibile:
            </p>
            <ul
                style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8; list-style-type: disc; padding-left: 20px;">
                <li>modificare o copiare i materiali;</li>
                <li>usare i materiali per qualsiasi scopo commerciale, o per qualsiasi esposizione pubblica (commerciale
                    o non commerciale);</li>
                <li>tentare di decompilare o invertire l'ingegneria di qualsiasi software contenuto nel sito web di
                    Oasi di Piobbico;</li>
                <li>rimuovere qualsiasi copyright o altre notazioni proprietarie dai materiali;</li>
                <li>trasferire i materiali a un'altra persona o "rispecchiare" i materiali su qualsiasi altro server.
                </li>
            </ul>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 40px;">3. Limitazioni</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                In nessun caso Oasi di Piobbico o i suoi fornitori saranno responsabili per eventuali danni
                (inclusi, senza limitazioni, danni per perdita di dati o profitti, o a causa di interruzione
                dell'attività) derivanti dall'uso o dall'impossibilità di utilizzare i materiali sul sito web di
                Oasi di Piobbico,
                anche se Oasi di Piobbico o un rappresentante autorizzato di Oasi di Piobbico è stato informato
                oralmente o per iscritto della possibilità di tali danni.
            </p>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 40px;">4. Revisioni ed Errata</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                I materiali che appaiono sul sito web di Oasi di Piobbico potrebbero includere errori fisici,
                tipografici o fotografici.
                Oasi di Piobbico non garantisce che alcuno dei materiali sul suo sito web sia accurato, completo o
                attuale.
                Oasi di Piobbico può apportare modifiche ai materiali contenuti nel suo sito web in qualsiasi momento
                senza preavviso.
            </p>

            <h2 style="color: var(--primary); margin-bottom: 30px; margin-top: 40px;">5. Legge Applicabile</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted); line-height: 1.8;">
                Qualsiasi reclamo relativo al sito web di Oasi di Piobbico sarà governato dalle leggi dello Stato
                italiano senza riguardo
                alle sue disposizioni sui conflitti di legge.
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