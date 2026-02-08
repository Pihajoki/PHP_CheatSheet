<?php
require_once 'config.php';
include('dbh.inc.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];


        try {
            require_once "dbh.inc.php";

            $query = "SELECT * FROM comments WHERE username = :usersearch";
            
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":usersearch", $userSearch);

            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


            $pdo = null;
            $stmt = null;


        }
            catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Search</title>
</head>

<body>
    <section>
    <h3>This is our search results</h3>

    <?php
        if (empty($results)) {
            echo "<div>";
            echo "<p>No comments made.</p>";
            echo "</div>";
        }
        else {
            foreach ($results as $row) {
                echo "<div>";
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                echo "</div>";
            }
        }
    ?>
    </section>

<!--
        ?php
        echo "<h3>testing sessions</h3>";
            echo $_SESSION["username"];
        ?
-->

</body>
</html>