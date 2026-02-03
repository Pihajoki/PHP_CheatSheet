<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Teht3</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="firstname" placeholder="firstname">
        <input type="text" name="lastname" placeholder="lastname">
        <button>Send</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fn = htmlspecialchars($_POST["firstname"]);
        $ln = htmlspecialchars($_POST["lastname"]);
    
        function userName($fn, $ln){
        $l = substr($ln, 0, 5);
        $f = substr($fn, 0, 2);
        echo "hamk" . strtolower($l) . strtolower($f);
        }
    }
    userName($fn, $ln);
    ?>
</body>

</html>
<!-- Tee ohjelma, joka muodostaa ja tulostaa käyttäjätunnuksen.
Käyttäjä antaa HTML-lomakkeella etu- ja sukunimensä.
Ohjelma luo tunnuksen seuraavasti:
· muuttaa kirjaimet pieniksi kirjaimiksi
· ä àa, ö ào, å àa !!! EN LÖYTÄNYT TÄSTÄ TIETOA !!!
· käyttäjätunnus: hamk + sukunimen 5 ensimmäistä kirjainta + etunimen 2 ensimmäistä kirjainta
(esim. Tommi Saksa > hamksaksato) -->