<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Teht2</title>
</head>

<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <select name="operator">
            <option value="count">count</option>
            <option value="rsort">rsort</option>
            <option value="sort">sort</option>
            <option value="normal">normal</option>
        </select>
        
        <button>Sort!</button>
</form>


    <?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $operator = htmlspecialchars($_POST["operator"]);

    $cars = [
        "Mazda",
        "Toyota",
        "Nissan",
        "Lexus",
    ];

    switch($operator) {
        case "count":
            echo count($cars);
            break;
        
        case "rsort":
            rsort($cars);
            print_r($cars);
            break;
        
        case "sort":
            sort($cars);
            print_r($cars);
            break;
        
        case "normal":
            print_r(array_reverse($cars));
            break;

        default:
        echo "Error.";
    }
}

?>
</body>
</html>


<!-- Tee PHP:llä taulukko, jossa on autojen merkkejä.
Www-sivulla on kolme linkkiä tai painiketta,
joita painamalla taulukon tiedot näytetään käyttäen eri lajitteluja (esim. sort, rsort, ?). -->