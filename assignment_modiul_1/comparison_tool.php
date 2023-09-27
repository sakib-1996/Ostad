<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Comparison Tool</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        .p-5{
            padding-bottom: 100px;
        }
    </style>
</head>
<body class="bg-primary-subtle">
    <p>Task 6: Comparison Tool</p>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 card bg-warning-subtle mx-auto p-5">

                <h1 class="mb-4">Number Comparison Tool</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="number1">Enter the first number:</label>
                        <input type="text" class="form-control" id="number1" name="number1">
                    </div>
                    <div class="form-group">
                        <label for="number2">Enter the second number:</label>
                        <input type="text" class="form-control" id="number2" name="number2">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary my-2">Compare</button>
                    </div>
                </form>

             <!-- PHP -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // catch value
                    $number1 = $_POST["number1"];
                    $number2 = $_POST["number2"];

                    if (!empty($number1) && !empty($number2) && is_numeric($number1) && is_numeric($number2)) {

                        // find the larger number
                        if ($number1 > $number2) {
                            $largerNumber = "The larger number is : ". $number1;
                        } 
                        if ($number1 < $number2) {
                            $largerNumber = "The larger number is : ". $number2;
                        }
                        if ($number1 == $number2) {
                            $largerNumber = "This are equal numbers";
                        }

                        // echo the result
                        echo "<div class='mt-4 alert alert-success'>";
                        echo $largerNumber;
                        echo "</div>";
                    } else {
                        echo "<div class='mt-4 alert alert-danger'>Please enter your valid numbers.</div>";
                    }
                }
                ?>
             <!-- PHP End-->

            </div>
        </div>
    </div>


</body>
</html>
