<!-- Task 3: Break on Condition -->

<?php
function ibonacciCount($n){
    $first = 0;
    $second = 1;

    for ($count = 0; $count < $n; $count++) {
        if ($first > 100) {
            break; 
        }

        echo $first . " ";

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

ibonacciCount(10)
?>