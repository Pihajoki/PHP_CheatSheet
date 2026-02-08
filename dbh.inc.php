<?php
// THIS CONNECTS TO THE DATABASE
// THIS IS PURE PHP FILE SO THERE IS NO CLOSING TAG ?">

error_reporting(E_ALL);
ini_set("display_errors", 1);

// $palvelin = "localhost"; jos olisi shell/xampp
$palvelin = "db"; // Docker
$tietokanta = "MFDB";
$dbusername = "root";
$dbassword = "";


// How to connect to DB and error handling
try { // Tries to run code inside {}
    $pdo = new PDO("mysql:host=$palvelin;dbname=$tietokanta", $dbusername, $dbassword); // pdo = PHP data objects, another way to connect to a database *THIS CONNECTS TO A DATABASE*
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // collects error messages
    }
catch (PDOException $e) { // if fails, this catches it and runs its own code inside of {}
        echo "Connection failed: " . $e->getMessage(); // Prints error

}