<?php
require_once 'config.php'; // We use session with this.

// $_SESSION["username"] = "Pihajoki";
// unset($_SESSION["username"]); // This purges one session Variable
// session_unset(); // This purges ALL of our session variables
// session_destroy(); // This unsets the session ID on the server, not the ID cookie in browser.

// IF YOU WANT TO CLEAR A SESSION COMPLETELY
// session_unset();
// session_destroy();
?>
<!-- How to start a session -->

<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Form</title>
</head>

<body>

    <!-- Signup form-->
    <h3>Signup</h3>
        <form action="formhandler.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="text" name="email" placeholder="E-mail">
            <button>Signup</button>
        </form>


<!--Change account-->
    <h3>Change</h3>
        <form action="userupdate.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="text" name="email" placeholder="E-mail">
            <button>Update</button>
        </form>


<!--Delete account-->
    <h3>Delete</h3>
        <form action="userdele.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button>Delete</button>
        </form>

<!-- Search form-->
    <h3>Search</h3>
        <form action="search.php" method="post">
            <label for="search">Search for user:</label>
            <input id="search" type="text" name="usersearch" placeholder="Search...">
            <button>Search</button>
        </form>


<!--
        ?php
        echo "<h3>testing sessions</h3>";
            echo $_SESSION["username"];
        ?
-->
    
</body>
</html>