<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Teht2</title>
</head>
<style>
    p{
        color:red;
    }
</style>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="text1" placeholder="Text to turn red">
        <button>Send</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $text = htmlspecialchars($_POST["text1"]);

        function redText($text){
            echo "<p>" . $text . "</p>";
        }
    }
    redText($text);
    ?>
</body>

</html>
<!-- Tee funktio, joka tulostaa parametrina saamansa tekstin punaisella.
Teksti annetaan HTML-lomakkeella. -->