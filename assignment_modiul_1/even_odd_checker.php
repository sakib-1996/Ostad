<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <style>
        .pt-5 {
            padding-bottom: 100px;
        }

        hr {
            border-top: 1px solid black;
        }

        .card:hover {
            box-shadow: 10px 10px 10px rgba(105, 103, 103, 0.37);
            transition: 0.5s;
        }
    </style>
</head>

<body class="bg-primary-subtle">
    <p>Task 4: Even or Odd Checker</p>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto card my-3 p-5 bg-warning-subtle">
                <h1 class="mb-4">Even or Odd Checker</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="number">Enter a number:</label>
                        <input type="text" class="form-control" id="number" name="number">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary my-3">Check</button>
                    </div>
                    <hr>
                </form>
             <!-- PHP -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Retrieve and validate input number
                    $number = $_POST["number"];

                    if (!empty($number) && is_numeric($number)) {
                        // Check if the number is even or odd
                        if ($number % 2 == 0) {
                            $result = "Even";
                        } else {
                            $result = "Odd";
                        }

                        // Display the result
                        echo "<div class='mt-4 alert alert-success'>";
                        echo "The number $number is $result.";
                        echo "</div>";
                    } else {
                        echo "<div class='mt-4 alert alert-danger'>Please enter a valid number.</div>";
                    }
                }
                ?>
             <!-- PHP End -->

            </div>

        </div>

    </div>


</body>

</html>