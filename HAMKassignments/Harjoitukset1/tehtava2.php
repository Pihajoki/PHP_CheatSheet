<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tehtava2</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
        <input type="number" name="num01" placeholder="Number one">
        <input type="number" name="num02" placeholder="Number two">
        <button>Send</button>
    </form>

    <?php



    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $num01 = filter_input(INPUT_GET, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_GET, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $value = $num01 + $num02;
        echo "Result = " . $value;
    }
?>
</body>

</html>

<!-- Tee toinen PHP-tiedosto, joka laskee summat URL:ssä annettujen arvojen mukaan, esim. laske.php?numero1=10&numero2=30 -->