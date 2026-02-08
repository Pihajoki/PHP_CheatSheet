<?php

$palvelin = "db";
$tietokanta = "LoginSite";
$dbusername = "root";
$dbassword = "";

try {
    $pdo = new PDO("mysql:host=$palvelin;dbname=$tietokanta", $dbusername, $dbassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch (PDOException $exception) {
    die("Connection failed: " . $exception->getMessage());
}