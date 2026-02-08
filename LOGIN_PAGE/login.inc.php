<?php
require_once "config_session.inc.php";
include('dbh.inc.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
    
    // Error Handlers
            $errors = [];

            if (is_input_empty($username, $pwd)) {
                $errors["empty_input"] = "Fill in all fields!";
            }

            $result = get_user($pdo, $username);

            if (is_user_wrong($result)) {
                $errors["empty_input"] = "Wrong username!";
            }

            if (!is_user_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
                $errors["empty_input"] = "Wrong password!";
            }


            require_once "config_session.inc.php";

            if($errors){
                $_SESSION["errors_login"] = $errors;

                header("Location: ../index.php");
                die();
            }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION['last_regeration'] = time();
        header("Location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $exception) {
        die("Query failed: " . $exception->getMessage());
    }



    die();
} else {
    header("Location: ../index.php");
    die();
}