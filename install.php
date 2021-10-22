<?php

require_once 'inc/datenbank.inc.php';

// falls die Tabellen schon existieren, wegräumen
$db->query('DROP TABLE IF EXISTS eintraege');

$db->query(
    'CREATE TABLE eintraege (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        inhalt TEXT,
        autor VARCHAR(255),
        erstellt_am DATETIME
    ) DEFAULT CHARSET = utf8'
);




$db->query(
    '
    INSERT INTO eintraege (titel, inhalt, autor, erstellt_am) VALUES
    ("Blindheit per Definition", "Mit Blindheit per Definition geschlagen, dennoch nicht unsichtbar, präsentiere ich mich als unbeachtetes ..",  "inewton", NOW() ),
    ("Blindheit per Definition2", "Mit Blindheit2 per Definition geschlagen, dennoch nicht unsichtbar, präsentiere ich mich als unbeachtetes ..",  "inewton", NOW());
  
  
         '
);    


//echo "fertig! bitte die Datei deaktivieren!";
//rename('install.php','install_deaktiviert.php');
//unlink('install.php');