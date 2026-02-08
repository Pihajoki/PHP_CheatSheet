<?php
require_once "config_session.inc.php";
include('dbh.inc.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

        try {
            require_once "dbh.inc.php";
            require_once "signup_model.inc.php";
            require_once "signup_contr.inc.php";

            // Error Handlers
            $errors = [];

            if (is_input_empty($username, $pwd, $email)) {
                $errors["empty_input"] = "Fill in all fields!";
            }
            if (is_email_invalid($email)) {
                $errors["invalid_email"] = "invalid email used!";
            }
            if (is_username_taken($pdo, $username)) {
                $errors["username_taken"] = "Username already taken!";
            }
            if (is_email_registered($pdo, $email)) {
                $errors["email_used"] = "Email already registered!";
            }

            require_once "config_session.inc.php";

            if($errors){
                $_SESSION["errors_signup"] = $errors;

                $signupData = [
                    "username" => $username,
                    "email" => $email,
                ];

                $_SESSION["signup_data"] = $signupData;

                header("Location: ../index.php");
                die();
            }

        user_created($pdo, $username, $pwd, $email);
        header("Location: ../index.php?=signup=success");
        $pdo = null;
        $stmt = null;
        die();

            $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $pwd, $email]);
            $pdo = null;
            $stmt = null;
            header("Location: ../index.php");
            die();
        }



        catch (PDOException $exception) {
            die("Query failed: " . $exception->getMessage());
        }

} else {
    header("Location: ../index.php");
    die();
}