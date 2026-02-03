<!DOCTYPE html> <!--Roni Pihajoki-->
<head>
    <title>Teht1</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="pituus" placeholder="Number one">
        <input type="number" name="leveys" placeholder="Number two">
        <input type="number" name="korkeus" placeholder="Number three">
        <button>Check!</button>
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pituus = filter_input(INPUT_POST, "pituus", FILTER_SANITIZE_NUMBER_FLOAT);
        $leveys = filter_input(INPUT_POST, "leveys", FILTER_SANITIZE_NUMBER_FLOAT);
        $korkeus = filter_input(INPUT_POST, "korkeus", FILTER_SANITIZE_NUMBER_FLOAT);

        function pintaAla($pituus, $leveys, $korkeus) {
            $tulos = $pituus * $leveys * $korkeus;
            return $tulos;
        }

        echo pintaAla($pituus, $leveys, $korkeus);
    }

    


    ?>
</body>

</html>
<!-- Tee funktio, joka laskee huoneen tilavuuden (pituus * leveys * korkeus).
Pituus, leveys ja korkeus annetaan funktiolle parametreina.
Arvot voit antaa esimerkiksi kovakoodaten, lomakkeelta tai URL:stä.
Laskutoimitus siis pitää kirjoittaa funktioon. -->