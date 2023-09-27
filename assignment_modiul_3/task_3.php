<!-- Task 3: Array Sorting  

   Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.-->

   
<?php
function sortGradesDescending($grades) {
    rsort($grades);

    return $grades;
}

$grades = [85, 92, 78, 88, 95];
$sortedGrades = sortGradesDescending($grades);

echo "Sorted Grades (Descending Order): ";
print_r($sortedGrades);
?>
