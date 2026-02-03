<!DOCTYPE html> <!--Roni Pihajoki-->
<head>
    <title>Teht4</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="num1" placeholder="Number one">
        <button>Check!</button>
    </form>

    <?php


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);



    $errors = false;
    if (empty($num1)){
        echo "ERROR: Give me a number between 1 and 9";
    }

    $numerot = array(5,3,8,7,1,9);

        for ($i = 0; $i < count($numerot); $i++) {
            if($num1 == $numerot[$i]){
                echo "Numero löytyi!" . "<br>";
        } else {
            echo "Ei löytynyt" . "<br>";
        }
            if($i == count($numerot)) {
                break;
            }
}
}
    


    ?>
</body>

</html>
<!-- Käyttäjä antaa HTML-lomakkeella numeron väliltä 1 - 9.
Tämän jälkeen tutkitaan, löytyykö ko. numero taulukosta, joka on muodostettu seuraavasti:
$numerot = array(5,3,8,7,1,9);

Jos löytyy, tulostetaan "Numero löytyi!".
Jos ei löytynyt, tulosta "Ei löytynyt".
Vinkki: break-komento lopettaa for-lauseen looppauksen. -->