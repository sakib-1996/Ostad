<!DOCTYPE html>
<html lang="en">

<head>
    <title>Temperature Converter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        hr {
            border-top: 1px solid black;
        }

    </style>
</head>

<body class="bg-primary-subtle">
    <p>Task 2: Temperature Converter</p>

    <div class="container">
        <div class="row">
            <div class="card p-5 bg-success-subtle col-md-6 mx-auto my-3">
                <!-- heading -->
                <div class="mx-auto">
                    <h2 class="card-title text-center mb-5">Temperature Converter</h2>
                </div>

                <form method="post">
                    <!-- input box -->
                    <div class="mb-3">
                        <label for="temp" class="form-label">Enter Temperature:</label>
                        <input type="number" name="temp" class="form-control" id="temp" required>
                    </div>

                    <!-- chose one Celsius / Fahrenheit -->
                    <h5>Chose one:</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="checked_one" id="celsius" value="celsius">
                        <label class="form-check-label" for="celsius">
                            Celsius <span class="text-danger"> (if your input in Fahrenheit)</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="checked_one" value="fahrenheit" id="fahrenheit" checked>
                        <label class="form-check-label" for="fahrenheit">
                            Fahrenheit <span class="text-danger"> (if your input in Celsius)</span>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center mb-2">
                        <input class="btn btn-primary mt-5" type="submit" value="Convert">
                    </div>
                    <hr>
                </form>

             <!-- PHP -->
                <?php

                /* catch value */
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temperature = $_POST["temp"];
                    $unit = $_POST["checked_one"];
                    // echo $temperature;
                    // echo $unit;

                    /* condition */
                    if ($unit == "celsius") {
                        $convertedTemperature = ($temperature * 9 / 5) + 32;
                        $convertedUnit = "fahrenheit";
                    }
                    if ($unit == "fahrenheit") {
                        $convertedTemperature = ($temperature - 32) * 5 / 9;
                        $convertedUnit = "celsius";
                    }

                    /*print using echo */
                    echo "<p class='mt-3 mb-5'><b>Result: $temperature °$unit is equal to $convertedTemperature °$convertedUnit.</b></p>";
                }
                ?>
             <!-- PHP End -->

            </div>
        </div>
    </div>
</body>

</html>