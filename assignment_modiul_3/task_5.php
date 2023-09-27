<!-- Task 5: Password Generator

   Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password. -->

   
<?php
function generatePassword($length){
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $uppercase . $lowercase . $numbers . $specialChars;
    $password = '';

    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
            // echo "{$password}\n";

    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
            // echo "{$password}\n";

    $password .= $numbers[rand(0, strlen($numbers) - 1)];
            // echo "{$password}\n";

    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];
            // echo "{$password}\n";


    for ($i=strlen($password); $i <$length ; $i++) { 
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
            // echo "{$password}\n";
    }

    echo "Generated Password: {$password}";
            // echo strlen($password);
}

$length = 12;
$generatedPassword = generatePassword(12);
    