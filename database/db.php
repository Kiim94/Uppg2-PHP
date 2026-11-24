<?php

//variabler för var projektet ska "hostas", namn på databasen, användarens/skaparens/programmerarens användarnamn och lösen
//hårdkodat dessa, har riktig info på annat ställe
$host = "localhost";
$dbname = "uppg2-bucketlist";
$username = "root";
$password = "";

try {
    //skapa nytt PDO-objekt - gör att kommunikation mellan projekt och databas fungerar
    //pdo är databasanslutningen: den behöver nås av de klasser som behöver kommunicera med databasen (lägga till, radera osv)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}
?>