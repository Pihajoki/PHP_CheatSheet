<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tehtava1</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="num01" placeholder="Number one">
        <input type="number" name="num02" placeholder="Number two">
        <button>Send</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $value = $num01 + $num02;
        echo "Result = " . $value;
    }
    ?>
</body>

</html>

<!-- Tee HTML-lomake, johon käyttäjä kirjoittaa kaksi numeroa.
Kun käyttäjä painaa Lähetä-painiketta,
PHP-tiedosto laskee numeroiden summan ja tulostaa sen käyttäjälle. -->