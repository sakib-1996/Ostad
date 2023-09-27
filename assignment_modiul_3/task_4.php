<!-- Task 4: Multidimensional Array

  Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

  
<?php
function calculateAndPrintAverageGrades($studentGrades) {

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
                // echo "{$total}  ";

        $count = count($grades);
                // echo "{$count}  ";

        $average = $total / $count;
                // echo "{$average} \n";
        
        $grade = getGrade($average);

        echo "{$student}'s Average Grade: {$grade}\n";
    }
}

// grade chacking function
    function getGrade($average) {
        if ($average >= 80) {
            return 'A+';
        } 
        elseif ($average >= 70) {
            return 'A';
        }
        elseif($average >= 60){
            return 'A-';
        } 
        elseif ($average >= 50) {
            return 'B';
        } 
        elseif ($average >= 40) {
            return 'C';
        } 
        elseif ($average >= 33) {
            return 'D';
        } 
        else {
            return 'F';
        }
    }

$studentGrades = [
    "Student1" => array("Math" => 10, "English" => 90, "Science" => 80),
    "Student2" => array("Math" => 85, "English" => 92, "Science" => 78),
    "Student3" => array("Math" => 88, "English" => 95, "Science" => 90)
];

calculateAndPrintAverageGrades($studentGrades);
?>

