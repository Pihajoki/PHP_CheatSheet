<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Teht1</title>
</head>

<body>

    <?php

    $array = [
        "testi1",
        "testi2",
        "testi3",
        "testi4",
    ];

echo "foreach-loop";
echo "<ul>";
    foreach ($array as $a) {
        echo "<li>"  . $a . "</li>" . "<br>";
    }
echo "</ul>";

echo "for-loop";
echo "<ul>";
    for ($i = 0; $i < count($array); $i++) {
        echo "<li>" . $array[$i] . "</li>" . "<br>";
        }
echo "</ul>";

?>
</body>

</html>

<!-- Tee ohjelma, joka luo taulukon (array) ja tulostaa tiedot HTML-taulukkona (table).
Kokeile tulostaa sekä for:lla, että foreachillä. -->