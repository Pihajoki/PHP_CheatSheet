<!DOCTYPE html> <!--Roni Pihajoki-->
<head>
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<!-- We need to set action so a user can do something. We also need to set method so we can choose from GET or POST. (Get goes to URL) ((POST hides the data))-->
<!-- We use $_SERVER["PHP_SELF"] so the data is sent back to the same page. (PHP self means the php file.)-->
<!--echo htmlspecialchars lets us not get injected with code lol-->
        <input type="number" name="num01" placeholder="Number one">
<!-- We make sure that the user will type number. We name the attribute. Also give it a placeholder so the user knows what to type.-->
<!-- The placeholder should make sense-->

        <select name="operator"> <!--Way for us to create a dropdown inside of a form.-->
            <option value="sum">+</option> <!--Adds a dropdown menu option for sum -->
            <option value="subtract">-</option> <!--Adds a dropdown menu option for subtract -->
            <option value="multiply">*</option> <!--Adds a dropdown menu option for multiply -->
            <option value="divide">/</option> <!--Adds a dropdown menu option for divide -->
        </select>

        <input type="number" name="num02" placeholder="Number two"> <!--Lets us select a second number -->
        
        <button>Calculate</button> <!-- Adds a button -->
    </form>

    <?php


    // These GRAB our data from inputs.
    if($_SERVER["REQUEST_METHOD"] == "POST") { // We recceive the data with POST. And only run the if statement if there is data.
        // filter_input lets us filter our data to not get injected with sql or java.
        // FILTER_SANITIZE_NUMBER lets us pick ether _FLOAT or _INT
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT); // We sanitize the data for num01.

        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT); // We sanitize the data for num02.

        $operator = htmlspecialchars($_POST["operator"]); // FILTER_INPUT does not support Strings anymore, so we use htmlspecialchars


        // These handle our Errors
        // First we create a boolean to and it tells us if there is errors.
        $errors = false;

        if (empty($num01) || empty($num02) || empty($operator)){ // We check if the values are empty.
            echo "<p class='error'>Fill in all fields!</p>"; // If any of the values is empty we print a reminder to fill the fields.
            $errors = true; // We set errors as true.
        }

        if (!is_numeric($num01) || !is_numeric($num02)) { // We check if the return data IS NOT a number. ( ! )
            echo "<p class='error'>Fill the fields with NUMBERS</p>"; // If any value is NOT a numberm we print this.
            $errors = true; // We set errors as true.
        }

        // Calculate the numbers if no errors

        if(!$errors){ // We check if there is no error messages. so we use ! in front.
        
            $value = 0; // We define a default value for the number, so we can actually use it with our result echo at line 80.

            switch($operator) { // Now we actually check what operator is chosen and we calculate the numbers.
                case "sum": // We get this from the select we created.
                    $value = $num01 + $num02;
                    break;
                case "subtract": // We get this from the select we created.
                    $value = $num01 - $num02;
                    break;
                case "multiply": // We get this from the select we created.
                    $value = $num01 * $num02;
                    break;
                case "divide": // We get this from the select we created.
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "Error";
            }

            echo "<p class='lasku'>Result = " . $value . "</p>";
        }
    }


    ?>
</body>

</html>
