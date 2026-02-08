\<?php
// Hashing sensitivtive DATA. NOT PASSWORDS.
$sensitiveData = "Pihajoki";
$salt = bin2hex(random_bytes(16)); // Generate random string
$pepper = "ASecretPepperString"; // KEYWORD

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash); // Hashing


// WE check that the new data matches the old data.

$sensitiveData = "Pihajoki";

$storedSalt = $salt;

$storedHash = $hash;


$pepper = "ASecretPepperString"; // KEYWORD
$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash); // Hashing


if ($storedHash === $verificationHash) {
    echo "The data are the same";
} else {
    echo "The data is NOT the same";
}


// HASHING PASSWORDS!!!!


$pwdSignup = "Test123"; // Set up test password.

$options = ['cost' => 12]; // WE create an array that we can set the strenghts of the hash. (10-12 recommended)

$hashedPWD = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); // Hash with the built in function.


// How to login

$pwdLogin = "Test123"; // We let the user to write password again

if(password_verify($pwdLogin, $hashedPWD)) { // Verify that the new pwd matches the hash in our DB.
    echo "They are the same";
} else {
    echo "they are not the same";
}