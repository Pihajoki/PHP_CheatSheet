<?php

declare(strict_types=1);

function check_login_errors(){
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";
    
        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        }

            unset($_SESSION["errors_login"]);
        }
}

function output_username(){
    if (isset($_SESSION["user_id"])) {
        echo "you are logged in as " . $_SESSION["user_username"];
    } else {
        echo "You are not logged in.";
    }
}