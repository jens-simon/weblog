<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();


// Eingeloggt und ID in URL vorhanden
if (!istEingeloggt() || empty($_GET['id'])) {
    redirect('index.php');
}

// Ermittle Eintrag anhand der übermittelten ID
$sql = 'SELECT * FROM eintraege WHERE id=?';
$statement = $db->prepare($sql);
$eintrag = $statement->execute([$_GET['id']]);





?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Eintrag speichern</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

            <header>
                <h1>Folgender Eintrag wurde erfolgreich gespeichert:</h1>
            </header>

            <article class="zitat">
                <header class="eintrag_oben">
                    <h1><?= bereinige($eintrag['titel']) ?></h1>
                </header>

                <p>
                    <?= nl2br(bereinige($eintrag['inhalt'])) ?>
                </p>
            </article>

            <p>
                <a href="index.php" class="backlink">Zurück zur Hauptseite</a>
            </p>

        </section>

        <aside id="menu">
            <?php require 'inc/hauptmenu.tpl.php'; ?>
        </aside>

        <footer id="fuss">
            Das ist das Ende
        </footer>

    </div>

</body>

</html>