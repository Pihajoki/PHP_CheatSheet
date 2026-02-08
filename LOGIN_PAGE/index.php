<?php
require_once 'config_session.inc.php';
require_once 'signup_view.inc.php';
require_once 'login_view.inc.php';
?>

<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
<?php
    output_username();
?>

<?php if(!isset($_SESSION["user_id"])) { ?>
    <h3>Login</h3>
        <form action="login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button>Login</button>
        </form>
<?php } ?>

    <h3>Logout</h3>
    <form action="logout.inc.php" method="post">
        <button>Logout</button>
    </form>

    <?php
    check_login_errors();
    ?>

    <h3>Signup</h3>
        <form action="signup.inc.php" method="post">
            <?php signup_inputs(); ?>
            <button>Signup</button>
        </form>

    <?php
    check_signup_errors();
    ?>
</body>
</html>