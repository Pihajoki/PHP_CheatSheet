<!DOCTYPE html> <!--Roni Pihajoki-->
<html lang="en">
<head>
    <title>Tehtava3</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="name" placeholder="Name">
        <button>Send</button>
    </form>

    <?php



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);

        $errors = false;
        
            if (empty($name)){
            echo "Fill in your name!";
            $errors = true;
            }

                if(!$errors){
                    echo "Your name is " . $name;
                    }
                }

?>
</body>

</html>

<!-- Tee HTML-lomake, jossa kysytään käyttäjän nimeä.
Kun käyttäjä painaa Lähetä-painiketta, tarkistetaan, onko tekstikenttä tyhjä.
Jos kenttä on tyhjä, huomautetaan asiasta käyttäjää, muuten tulostetaan "Nimesi on..." -->