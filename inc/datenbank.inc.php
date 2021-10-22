<?php 

$optionen = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // nur zur Entwicklung!
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
];

$db = new PDO(
    'mysql:host=localhost;dbname=weblog', // neue DB!
    'root',
    '',
    $optionen
);