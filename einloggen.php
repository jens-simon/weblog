<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();


$benutzername = trim($_POST['benutzername']);

// Prüfe, ob der Benutzer im Array existiert und das Passwort übereinstimmt
if (
    !empty(BENUTZER_DATEN[$benutzername]) &&
    (BENUTZER_DATEN[$benutzername]['passwort'] === trim($_POST['passwort']))
) {
    loggeEin($benutzername);
} else {
    // Bei falschen Logindaten Meldung in der Session speichern
    $_SESSION['meldung'] = 'Falsche Logindaten.';
}

/*
 * Leite zur index.php um. Der Besucher wird entweder das
 * Login-Formular sehen, wenn die Daten falsch waren, oder
 * das Hauptmenu, wenn der Login erfolgreich war.
 */
redirect('index.php');
