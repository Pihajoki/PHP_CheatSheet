<?php
declare(strict_types=1); // Forces our function to use data we mean it to use.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cheat Sheet</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main>
        <?php
// When we define a variable it does not need to be $string, it does not matter what the name is.
// Do note variable names are case sensitive.
// $test and $Test are too different variables.
// But for example echo can be written: eCho, ECho, ECHO, echO

// User defined VARIABLES

    // Define string with " " | Null value = " "
    $string = "Hei";

    // Define int with a single number. | Null value = 0;
    $int = 1;

    // Define boolean with true or false, also we can use 1 & 0. | Null value = false/0.
    $bool = true;

    // Define float with decimal number. | Null value = 0;
    $float = 0.12;

    // Define Array with $name = array(). | Null value = [ ]; | We can add different data types inside of array.
    $testiarray = array("testi1", "testi2", "testi2");

    // Define a object $name = new classname(). | Null value = null;
    $object = new testi();

    // Define class
    class testi{
    
    }


// Pre-Defined VARIABLES "Superglobals"
echo "<h2><b>Supergloblas</b></h2>";

    // $_SERVER; holds information about the web server including headers, paths, and script locations.
    // EXAMPLE OF $_SERVER
    echo $_SERVER["PHP_SELF"]; // Prints path to the PHP file
    echo "<br>";
    echo $_SERVER["DOCUMENT_ROOT"]; // Prints the root to the file
    echo "<br>";
    echo $_SERVER["SERVER_NAME"]; // Prints the server name
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";

    // $_SESSION;
    // EXAMPLE OF $_SESSION
    $_SESSION["username"] = "Pihajoki"; // We set username as "Pihajoki"
    echo $_SESSION["username"]; // We print username
    echo "<br>";

    // $_COOKIE;
    // EXAMPLE OF $_COOKIE

    // $_ENV;
    // EXAMPLE OF $_ENV

    // $_GET; contains an array of variables received via the HTTP GET method.
    // EXAMPLE OF $_GET

    // $_POST;  contains an array of variables received via the HTTP POST method.
    // EXAMPLE OF $_POST

    // $_FILES;
    // EXAMPLE OF $_FILES

    // $_REQUEST contains data from submitted forms, URL query strings, and HTTP cookie
    // EXAMPLE OF $_REQUEST




// This is how we handle form data.
    // without htmlspecialchars we risk the possibility of code injection through forms.
    if($_SERVER["REQUEST_METHOD"] == "$_POST"){ // We check if the request method of the server is post. if it is we follow with the following:
        $firstname = htmlspecialchars($_POST["firstname"]); // We store the data from POST to variable firstname
        $lastname = htmlspecialchars($_POST["lastname"]); // We store the data from POST to variable lastname

        if(empty($firstname)){ // Empty checks if the user fills the value for firstname.
            exit("Locationl ../index.php"); // If the user does not fill the value, user will be sent back to the home page.
        }

    // We can print data from the one we did above
        echo "These are the data, POST submitted for us";
        echo "<br>";
        echo $firstname;
        echo "<br>";
        echo $lastname;

        header("Location: ../index.php"); // Sends the user back.
    } else {
        header("Locationl ../index.php");
    }


// OPERATORS IN PHP
echo "<br>";
echo "<h2><b>Operators in PHP</b></h2>";

    // String Operator
    echo "<h3><b>String Operator</b></h3>";

    $a = "Hello"; // Define string a
    $b = "World!"; // Define string b
    $c = $a . " " . $b; // . works as a + in Java. We can connect Strings & spaces.
    echo $c; // Prints: "Hello World!"
    echo "<br>";

    // Arithmetic Operator
    echo "<h3><b>Arithmetic Operators</b></h3>";

    // We can eco calculations straight up.
    echo 10 * 2; // Multiply
    echo "<br>";
    echo 10 + 2; // Sum
    echo "<br>";
    echo 10 - 2; // Substract
    echo "<br>";
    echo 10 / 2; // Divide
    echo "<br>";
    echo 10 % 5; // Modulus (10/3=9, 10-9=1.)
    echo "<br>";
    echo 10 ** 3; // Power of. (10 * 10 * 10)
    echo "<br>";
    echo 1 + 2 * 4; // The * is ccalculated first.
    echo "<br>";
    echo (1 + 2) * 4; // The sum inside of () will be calculated first.
    echo "<br>";

    // Assignment operators
    echo "<h3><b>Assignment Operators</b></h3>";


    $numero1 = 2; // Sign 2 as the value of numero1.
    $numero1 += 4; // $numero1 = numero1 + 4; (These are the same. The final sum is 6.)
    // This could be +=. *=, /=, %=, -=, **=.
    echo $numero1;
    echo "<br>";

    // Comparison operator
    echo "<h3><b>Comparison operator</b></h3>";

    $numero2 = 2; // define int.
    $numero3 = 4; // define int.
    $numero4 = "2"; // define string.
    $numero5 = 2;
    $numero6 = 6;


    if ($numero2 == $numero3) { // We compere if numero2 and numero3 are valued equally with ==
        echo "Numbers are the same.";
        echo "<br>";
    } else {
        echo "Numbers differ.";
        echo "<br>";
    }

    if ($numero2 === $numero4) { // We compere if the numbers are equal AND the third = comperes if they are the same datatype. ===
        echo "Values are the same & share the same type";
        echo "<br>";
    } else {
        echo "Values dont share a type.";
        echo "<br>";
    }

    if ($numero2 != $numero3) { // We check that the numbers are not EQUAL.
        echo "Numbers are not equal.";
        echo "<br>";
    } else {
        echo "Numbers are equal.";
        echo "<br>";
    }


    // Logical Operators
    echo "<h3><b>Logical Operators</b></h3>";
    // "or" is the same as ||
    // "and" is the same as &&

    if ($numero2 == $numero5 && $numero3 == $numero6) { //  The first section with $n2 & $n5 are equal so its true. Second one $n3 & $n6 are not equal.
    // "and" operator in the middle needs BOTH statements to be true. So this will not print anything.
        echo "Numbers are the same.";
        echo "<br>";
    }

    if ($numero2 == $numero5 || $numero3 == $numero6) { //  The first section with $n2 & $n5 are equal so its true. Second one $n3 & $n6 are not equal.
    // "or" operator in the middle needs ONE statement to be true. So this will print "Numbers are the same".
        echo "Numbers are the same.";
        echo "<br>";
    }

        //   THIS IS TRUE         THIS IS FALSE           THIS IS FALSE
    if ($numero2 == $numero5 || $numero3 == $numero6 && $numero2 == $numero6) {
    // We can have as many of these operators we want.
    // This will print the "Numbers are the same."
    // Even tho the right side of || is coplitely wrong.
    // In theory, my code is suposed to have both of them "correct"
        echo "Numbers are the same.";
        echo "<br>";
    }

            //   THIS IS TRUE         THIS IS FALSE           THIS IS FALSE
    if ($numero2 == $numero5 || $numero3 == $numero6 && $numero2 == $numero6) {
    // We can have as many of these operators we want.
    // This will print the "Numbers are the same."
    // Even tho the right side of || is coplitely wrong.
    // In theory, my code is suposed to have both of them "correct"
        echo "Numbers are the same.";
        echo "<br>";
    }



    // Incrementing/Decrementing Operators
    echo "<h3><b>Incrementing/Decrementing Operators</b></h3>";

    $increment = 1;
    echo ++$increment; // Prints 2. ++ will add 1 to the default value.
    echo "<br>";

    $decrement = 2;
    echo --$decrement; // Prints 1. -- will substract from the default value.
    echo "<br>";

    echo $increment++; // prints 2. adds 1 after its printed (Prints 2 due to line 249 ++)
    echo $increment; // Prints 3. due to line above.




// Control Structures in PHP
echo "<br>";
echo "<h2><b>Control structures in PHP</b></h2>";

    $bool1 = true;
    $int1 = 1;
    $int2 = 4;
    $nimi = "Roni";

    if (!$bool1) { // ! in front of booleam is checking if the condition is false.
        echo "its false.";
        echo "<br>";
    }



    // Wrong way.
    if ($int1 < $int2) { // < lesser than && > more than.
        echo "WRONG WAY: First condition is true!";
        echo "<br>";

            if ($int1 > $int2) { // THIS IS NESTING. IT MAKES CODE MESSY. DONT DO IT. (So if, inside of if...etc)
                echo "WRONG WAY: Second condition is true!";
                echo "<br>";
            }
    }

    // Right way.
    if ($int1 < $int2 && !$bool1) { // First it checks if our first condidion is true. Then && we add our boolean. It will check if its false. (It's true.) So this wont print.
        echo "Right way: First condition is true!";
        echo "<br>";
    } else if ($int1 < $int2 && $bool1) { // Same as previous, but checks if boolean is true. !THIS IS CORRECT WAY!
        echo "Right way: Second condition is true!";
        echo "<br>";
    } else { // This is added just so we know if both are wrong. Known as "Default code"
        echo "None of the conditions were true!";
        echo "<br>";
    }
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // To avoid nesting, we use else if () {
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    // CASE
    // We use switch to check single value. we use if statements for multiple value.
    switch ($nimi){ // we define the value we want to check inside of switch. This block of code goes to different directions, depending on certain result.
        case "Roni": // case VALUE: Value = the value we are comparing  $nimi to.
            echo "The name is correct!";
            echo "<br>";
            break; // we need to stop the case with break.

        case "Dimi": // Here its incorrect so this wont print.
            echo "The name is correct!";
            echo "<br>";
            break;
        
        default: // Default reply if cases are all incorrect.
            echo "None of the names are correct.";
    }




    // MATCH
    $result = match ($nimi) { // Inside of match(), we place the variable we want to check.
        "Roni" => "Name is Roni", // => This changes the value of $nimi to "The name is Roni" WE ALWAYS END MATCH IN , EVEN IF ITS THE LAST ONE.
        "Dimi", "Viitakoski" => "Name is Dimi", // We can also have multiple values we compere, and if any are correct we change the value.
        default => "Non of the names match.",
    }; // MATCH NEEDS TO END ON A ; THIS IS SAME AS CREATING A VARIABLE.


        echo $result;




// Arrays
echo "<br>";
echo "<h2><b>Arrays</b></h2>";


    echo "<br>";
    echo "<h3><b>Default Array</b></h3>";
        // First way to make an array
        $fruits = array("Apple", "Banana", "Cherry", "Pear");

            // Second way to make an array
        $fruits2 = ["Apple", "Banana", "Cherry", "Pear"];

            // Same as second way, but can be easier to see as a list.
        $fruits2 = [
            "Apple",
            "Banana",
            "Cherry",
            "Pear"
                    ];
    
        // Print single index in the array, here we print "Banana"
        echo $fruits[1] . "<br>";

        // Can add values to our array later on.
        $fruits[] = "Orange";

        // Prit the proof that ORange has been added.
        echo $fruits[4] . "<br>";

        // Instead of adding "Kiwi" to fruits, we can replace lets say "Banana" in index 1
        $fruits[1] = "Kiwi";
        echo $fruits[1] . "<br>"; // Proof that it replaced it.

        // How to remove data from an index. So this removes Kiwi and moves Cherry from [2] to [1]
        array_splice($fruits, 0, 1);
        echo $fruits[1] . "<br>";


        // We are not deleting data now, but we are adding data.
        // (array name, index we effect, the range of effect, What se are adding there.)
        array_splice($fruits, 1, 0, "Dragonfruit");
        // Here is a comparison what happens if we change the values:
        //($fruits, 1, 0, "Dragonfruit") prints Array ( [0] => Kiwi [1] => Dragonfruit [2] => Cherry [3] => Pear [4] => Orange )
        //($fruits, 1, 1, "Dragonfruit") prints Array ( [0] => Kiwi [1] => Dragonfruit [2] => Pear [3] => Orange )
        //($fruits, 0, 1, "Dragonfruit") prints Array ( [0] => Dragonfruit [1] => Cherry [2] => Pear [3] => Orange )
        //($fruits, 1, 2, "Dragonfruit") prints Array ( [0] => Kiwi [1] => Dragonfruit [2] => Orange )
        //($fruits, 1, 3, "Dragonfruit") prints Array ( [0] => Kiwi [1] => Dragonfruit)
        //($fruits, 0, 4, "Dragonfruit") prints Array ( [0] => Dragonfruit )

        print_r($fruits); // Array ( [0] => Kiwi [1] => Dragonfruit [2] => Cherry [3] => Pear [4] => Orange )
        echo "<br>";

        // Create another array
        $test = ["Starberry", "Banana", "Lemon"];

        // Now lets combine there two arrays.
        array_splice($fruits, 2, 0, $test);
        print_r($fruits);
        // Array ( [0] => Kiwi [1] => Dragonfruit [2] => Starberry [3] => Banana [4] => Lemon [5] => Cherry [6] => Pear [7] => Orange )
        echo "<br>";






    // Asociate Array
        echo "<br>";
        echo "<h2><b>Asociate Array</b></h2>";

        $tasks = [
            "Laundry" => "Roni",
            "Paying bills" => "Dimi",
            "Baking" => "Janika",
            "Dishes" => "Mankka"
        ];

        echo $tasks["Baking"] . "<br>";

        // Prints the Array (shows the index & values)
        print_r($tasks); // Array ( [Laundry] => Roni [Paying bills] => Dimi [Baking] => Janika [Dishes] => Mankka )
        echo "<br>";
        
        // We can see the amount of indexes inside of our Array.
        // This is used for grabbing data from a database.
        // As we receive data from DB it is returned as an Array.
        // So we can check if we actually received any data.
        echo count($tasks) . "<br>";
        
        // We can sort an Array decending.
    //    sort($tasks); <-- This sorts it.
        print_r($tasks); // Array ( [0] => Dimi [1] => Janika [2] => Mankka [3] => Roni )
        echo "<br>";



        // This is how we add data inside of Asociate Array
        $tasks["dusting"] = "Jussi";
        print_r($tasks); // Array ( Roni [Paying bills] => Dimi [Baking] => Janika [Dishes] => Mankka [dusting] => Jussi )
        echo "<br>";
        
        



// Array in side of Array "Multi dimensional array"
    echo "<br>";
    echo "<h2><b>Array in side of Array</b></h2>";

        $food = [
        array("steak", "pork"), // Array inside of array
        "fruits" => array("apple", "banana", "cherry"), // Here array gets a name "fruits"
        ];
        
        // We need to add another [] if we want to print array index thats inside of another array
        echo $food[0][1] . "<br>"; // This prints out pork
        echo $food["fruits"][2] . "<br>"; // We can change the first "index" to an array we want to use. Here its fruits. which prints cherry



// Built-in Functions
echo "<br>";
echo "<h2><b>Built-in Functions</b></h2>";


    echo "<br>";
    echo "<h3><b>String Functions</b></h3>";

        $s1 = "Hello World!";

        echo strlen($s1) . "<br>"; // strlrn() tells us how many char are there in the string

        echo strpos($s1, "o") . "<br>"; // We can get the specific position of a certain char.
        echo strpos($s1, "Wo") . "<br>"; // We can get the position of multiple chars.
        // str_replace("word to replace", "word that replaces it", string where it happens)
        echo str_replace("World!", "MyyrYork!", $s1) . "<br>"; // We can replace words inside of our string.

        echo strtolower($s1) . "<br>"; // Everything to lower case

        echo strtoupper($s1) . "<br>"; // Everything to upper case

        // (From where, index we start from, how many chars)
        echo substr($s1, 2, 2) . "<br>"; // We start from index 2 and grab 2 chars

        echo substr($s1, 2, -2) . "<br>"; // With -2 we remove the first two chars


        //print_r stands for print_readable
        // Prints data in readable format
        print_r(explode(" ", $s1)); // We divide the word from the " " (space), and then divide it into two so arrays.
        // this could be used for example dividing information from emails.
        // firstname.lastname@test.fi
        //explode"."
        //explode"@"


// Math Functions
    echo "<br>";
    echo "<h3><b>Math Functions</b></h3>";

        $n1 = -5.5;
        $n2 = 2;
        $n3 = 16;

        // abs = absolute value
        echo abs($n1) . "<br>";

        // Rounds the number up to the closest full number
        echo round($n1) . "<br>";


        // Power of. (value we want to multiply by itself, the value how many times we do it)
        echo pow($n2, 3) . "<br>";

        // Square of.
        echo sqrt($n3) . "<br>";

        // We get a random number between 1 & 100.
        echo rand(1, 100) . "<br>";


    
// Array functions
    echo "<br>";
    echo "<h3><b>Array Functions</b></h3>";


        $a1 = ["test1", "testi2", "testi3"];
        $a2 = ["1testi", "2testi", "3testi"];


        echo count($a1) . "<br>"; // Shows us how many pieces of data is inside this array.

        echo is_array($a1) . "<br>"; // Will return 1 or 0, as true or false. If the asked value is array we get 1. if not we get 0.

        array_push($a1, "testi4"); // This will add testi4 to our array.
        print_r($a1);
        echo "<br>";

        array_pop($a1); // Removes the last index in array.
        print_r($a1);
        echo "<br>";

        
        print_r(array_reverse($a1)); // Reverses the array
        echo "<br>";

        print_r(array_merge($a1, $a2)); // Merges the arrays together. (The array is added to the end.)
        echo "<br>";


// Time and date
    echo "<br>";
    echo "<h3><b>Time & Date</b></h3>";

        // Shows the current date and time.
        echo date("Y-m-d H:i:s") . "<br>";


        // Shows the seconds from 1/1/1970 00:00:00 GMT
        echo time() . "<br>";


        // We can see the amount of seconds from 1/1/1970 to time we set in $date.
        $date = "2000-04-22 12:00:00";
        echo strtotime($date) . "<br>";



// User defined Functions (objects)
echo "<br>";
echo "<h2><b>User defined Functions (objects)</b></h2>";


    echo "<br>";
    echo "<h3><b>String Functions</b></h3>";

    // Function is meant to do ONLY ONE THING

    strlen("Roni"); // Would print the amount of char inside "Roni". So it would be 4.


    // We create an function
    function sayHello() {
        return "Hello World!"; // Never Echo from function.
    }

    
    echo sayHello() . "<br>"; // We call the value of the function by printing it.


    // sign the value of the function to $hW
    $hW = sayHello();
    echo $hW . "<br>"; // we test that $hW received the value.



    function sayName($greetings, $name) {
        return $greetings . " " . $name . "!"; // We can add data to our function like this.
    }


    $sN = sayName("terve", "Roni"); // We send data to the function.
    echo $sN . "<br>";



    function forceString(string $nimi) { // This forces user to use string when sending data to our function.
        return $nimi;
    }

    echo forceString("FORCED") . "<br>";

    // !!!!!!!!!!!! LINE 1 !!!!!!!!!!!!!
    // We declare strict_types in line 1
    // !!!!!!!!!!!! LINE 1 !!!!!!!!!!!!!


    function calculator(int $num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }
    
    $numbers = calculator(13, 15);
    echo $numbers . "<br>";


    $saari = "Korkeasaari"; // We define normal string variable.
    
    function saarenmaa(){ // Function scope is only inside it without "global"
        global $saari; // Global makes it possible for function saarenmaa to see $saari and use it.
        return $saari;
    }

    echo saarenmaa() . "<br>";

        ?>
    </main>
</body>

</html>
