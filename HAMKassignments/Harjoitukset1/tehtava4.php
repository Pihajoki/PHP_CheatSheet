<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Tehtava4</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="num01" placeholder="Number one">
        <button>Send</button>
    </form>

    <?php



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = rand(1, 100);

                switch ($num01){
                    case $num01 < $num02:
                        echo "Your number is smaller";
                        echo "<br>";
                        break;

                    case $num01 > $num02:
                        echo "Your number is bigger";
                        echo "<br>";
                        break;
                    
                    case $num01 == $num02:
                        echo "Great pick! Our numbers are the same.";
                        echo "<br>";
                        break;
                
                    default:
                    echo "Error.";
                }
    }

?>
</body>

</html>

<!-- Käyttäjä antaa numeron HTML-lomakkeella,
minkä jälkeen ohjelma antaa ilmoituksen onko käyttäjän antama numero
PHP-ohjelman arpomaa numeroa pienempi, suurempi vai sama.
Jos se on sama, ohjelma onnittelee käyttäjää hyvästä suorituksesta. -->