<?php

function holeEintraege( $db, $umgedreht = false)
{


    /*if (file_exists(PFAD_EINTRAEGE)) {
        $eintraege = unserialize(file_get_contents(PFAD_EINTRAEGE));
        if ($umgedreht === true) {
            $eintraege = array_reverse($eintraege);
        }
    } else {
        $eintraege = [];
    }
*/
$sql = 'SELECT * FROM eintraege';

$statement = $db->query($sql);
$eintraege = $statement->fetchAll();


    return $eintraege;
}

function bereinige($benutzerEingabe, $encoding = 'UTF-8')
{
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function speichereEintraege($eintraege)
{
    file_put_contents(PFAD_EINTRAEGE, serialize($eintraege));
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function istEingeloggt()
{
    return isset($_SESSION['eingeloggt']);
}

function loggeEin($benutzername)
{
    $_SESSION['eingeloggt'] = $benutzername;
}

function loggeAus()
{
    unset($_SESSION['eingeloggt']);
}
