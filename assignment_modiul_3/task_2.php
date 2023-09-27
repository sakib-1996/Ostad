<!-- Task 2: Array Manipulation

   Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array. -->

   
<?php
function removeEvenNumbers($numbers) {

    $oddNumbers = [];

    // Loop
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }

    // Print the the array with odd numbers.
    print_r($oddNumbers);
}

$numbers = [1,2,3,4,5,6,7,8,9,10];

// Call the function 
removeEvenNumbers($numbers);
?>
