<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <style>
        hr {
            border-top: 1px solid black;
        }

        .pt-5 {
            padding-bottom: 100px;
        }

        .card:hover {
            box-shadow: 10px 10px 10px rgba(105, 103, 103, 0.37);
            transition: 0.5s;
        }
    </style>
</head>

<body class="bg-primary-subtle">
    <p>Task 7: Simple Calculator</p>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto card p-5 bg-warning-subtle">
                <h1 class="mb-4">Simple Calculator</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="num1">Enter the first number:</label>
                        <input type="number" class="form-control" id="num1" name="num1">
                    </div>
                    <div class="form-group">
                        <label for="num2">Enter the second number:</label>
                        <input type="number" class="form-control" id="num2" name="num2">
                    </div>
                    <div class="form-group">
                        <label for="operation">Select an operation:</label>
                        <select class="form-control" id="operation" name="operation">
                            <option value="add">Addition (+)</option>
                            <option value="subtract">Subtraction (-)</option>
                            <option value="multiply">Multiplication (*)</option>
                            <option value="divide">Division (/)</option>
                        </select>
                    </div>
                    <div class="my-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                    <hr>
                </form>

             <!-- PHP -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // catch value
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operation"];

                    if (!empty($num1) && !empty($num2)) {

                        if ($operation == "add") {
                            $result = $num1 + $num2;
                            $operationText = "Addition";
                        } elseif ($operation == "subtract") {
                            $result = $num1 - $num2;
                            $operationText = "Subtraction";
                        } elseif ($operation == "multiply") {
                            $result = $num1 * $num2;
                            $operationText = "Multiplication";
                        } elseif ($operation == "divide") {
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                                $operationText = "Division";
                            } else {
                                echo "<div class='mt-4 alert alert-danger'>Division by zero is not allowed.</div>";
                            }
                        }

                        // echo the result
                        if (isset($result)) {
                            echo "<div class='mt-4 alert alert-success'>";
                            echo "$operationText Result: $result";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class='mt-4 alert alert-danger'>Please enter valid numbers.</div>";
                    }
                }
                ?>
             <!-- php end -->
            
            </div>
        </div>
    </div>

</body>

</html>