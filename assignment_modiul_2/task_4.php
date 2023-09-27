<!-- Task 4: Fibonacci Series printing using a Function -->

<?php
function printFibonacci($n) {
    $first = 0;
    $second = 1;
    
    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);
