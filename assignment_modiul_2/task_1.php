<!-- Task 1: Looping with Increment using a Function -->

<?php

// Print the even number using for loop
        function printEvenNumbersUsingForLoop($start, $end) {
            for ($i = $start; $i <= $end; $i++) {
                // echo $i;
                if ($i % 2 == 0) {
                    echo $i . ' ';
                }
            }
        }

        echo "Print the even number using for loop: ";
        printEvenNumbersUsingForLoop( 1, 20);
        echo "\n ";


// Print the even number using while loop

    // wrong

        // function printEvenNumberUsingWhileLoop($start, $end) {
        //     $i = $start;
        //     while ($i <= $end) {
        //         if ($i % 2 == 0) {
        //             echo $i . ' ';
        //         }
        //         $i++;
        //     }
        // }
        
        // echo "Print the even number using while loop: ";
        // printEvenNumberUsingWhileLoop(1, 20);
        // echo "\n";

    // currect

    function printEvenNumbers($start, $end, $step) {
        $current = $start;
        while ($current <= $end) {
            if ($current % 2 != 0) {
                // echo $current . " ";
                $current ++;
    
            }
            else{
                echo $current . " ";
                $current += $step;
            }
            // $current += $step;
        }
    }
    
    // Call the function 
    printEvenNumbers(1, 20, 2);
    
    
    
// Print the even number using do-while loop
        function printEvenNumbersUsingDoWhile($start, $end) {
            $i = $start;
            do {
                if ($i % 2 == 0) {
                    echo $i . ' ';
                }
                $i++;
            } while ($i <= $end);
        }
        
        echo "Print the even number using do-while loop: ";
        printEvenNumbersUsingDoWhile(1, 20);
        echo "\n";

?>
