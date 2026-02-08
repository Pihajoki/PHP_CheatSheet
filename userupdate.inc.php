<?php
require_once 'config.php';
include('dbh.inc.php');

// Checks that the user got to the form the correct way
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Checks if the user send data through the form
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

        try {
            require_once "dbh.inc.php"; // Adds our connection file.

            $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 9;";
            // In a real website we would use session of WHERE id = 9;
            // Now the id is hard coded to user selain


            $stmt = $pdo->prepare($query); // This submits the query to the data base

            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":email", $email);


            $stmt->execute(); // This sends the data.

            // These two free up resources fast.
            $pdo = null;
            $stmt = null;


            // sends user to home page
            header("Location: ../index.php");

            // Kill of the script
            die(); // If its a script with no connection we would use exit();
        }
        catch (PDOException $e) {
            die("Query failed: " . $e->getMessage()); // kills the process and displays error message
        }

} else {
    header("Location: ../index.php"); // If not they will be send to homepage
}
