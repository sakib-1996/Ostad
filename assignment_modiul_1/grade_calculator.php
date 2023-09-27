<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        .card:hover {
            box-shadow: 10px 10px 10px rgba(105, 103, 103, 0.37);
            transition: 0.5s;
        }
        hr {
            border-top: 1px solid black;
        }
    </style>
</head>

<body class="bg-primary-subtle">
    <p>Task 3: Grade Calculator</p>
    
    <div class="container mt-5">
        <div class="row">

            <div class="card p-5 bg-warning-subtle col-md-6 mx-auto my-3">
                <h1 class="mb-4">Grade Calculator</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="test1">Test 1 Score:</label>
                        <input type="number" class="form-control" id="test1" name="test1">
                    </div>
                    <div class="form-group">
                        <label for="test2">Test 2 Score:</label>
                        <input type="number" class="form-control" id="test2" name="test2">
                    </div>
                    <div class="form-group">
                        <label for="test3">Test 3 Score:</label>
                        <input type="number" class="form-control" id="test3" name="test3">
                    </div>
                    <div class="d-flex justify-content-center my-2">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                    <hr>
                </form>

             <!-- PHP -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // catch input 
                    $test1 = $_POST["test1"];
                    $test2 = $_POST["test2"];
                    $test3 = $_POST["test3"];

                    if (!empty($test1) && !empty($test2) && !empty($test3)) {
                        // Calculate the average
                        $average = ($test1 + $test2 + $test3) / 3;

                        if ($average >= 90) {
                            $grade = 'A';
                        } elseif ($average >= 80) {
                            $grade = 'B';
                        } elseif ($average >= 70) {
                            $grade = 'C';
                        } elseif ($average >= 60) {
                            $grade = 'D';
                        } else {
                            $grade = 'F';
                        }

                        // echo the result
                        echo "<div class='mt-4 alert alert-success'>";
                        echo "Average Scre: " . number_format($average, 2) . "<br>";
                        echo "Letter Grade: " . $grade;
                        echo "</div>";
                    } else {
                        echo "<div class='mt-4 alert alert-danger'>Please fill in all test scores.</div>";
                    }
                }
                ?>
             <!-- PHP End -->

            </div>
        </div>
    </div>
</body>
</html>