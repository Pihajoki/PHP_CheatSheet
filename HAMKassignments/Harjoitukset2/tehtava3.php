<!DOCTYPE html> <!--Roni Pihajoki-->
<head>
    <title>Teht3</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="thing1" placeholder="First one">
        <input type="text" name="thing2" placeholder="Second one">
        <input type="text" name="thing3" placeholder="Third one">
        <button>Send!</button>
    </form>

    <?php


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $thing1 = htmlspecialchars($_POST["thing1"]);
        $thing2 = htmlspecialchars($_POST["thing2"]);
        $thing3 = htmlspecialchars($_POST["thing3"]);


    $errors = false;
    if (empty($thing1) || empty($thing2) || empty($thing3)){
        echo "ERROR: Fill in all fields!";
    }

    $arrayThings = [];

        if(!$errors){
        $arrayThings[] = $thing1;
        $arrayThings[] = $thing2;
        $arrayThings[] = $thing3;
    }
}

    sort($arrayThings);

    for ($i = 0; $i < count($arrayThings); $i++) {
        echo $arrayThings[$i] . "<br>";
        }

    ?>
</body>

</html>
<!-- Tee HTML-lomake, jonka avulla käyttäjä voi antaa arvoja (esim. auto, vene, lentokone).
Lomakkeella siis on esim. 3 tekstikenttää.
Kun käyttäjä painaa Lähetä-painiketta,
tiedot lähetetään PHP-tiedostolle,
joka tekee annetuista arvoista taulukon (array),
lajittelee taulukon aakkosten mukaan ja lopuksi tulostaa sen. -->