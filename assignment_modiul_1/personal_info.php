<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Information Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <style>
        .card:hover {
            box-shadow: 10px 10px 10px rgba(105, 103, 103, 0.37);
            transition: 0.5s;
            cursor: pointer;
        }

        .card:hover {
            box-shadow: 10px 10px 10px rgba(105, 103, 103, 0.37);
            transition: 0.5s;
        }
    </style>
</head>

<body class="bg-primary-subtle">
    <p>Task 1: Personal Information Page </p>

    <div class="container">
        <div class="row">
            <div class="card col-md-6 mx-auto bg-success-subtle my-3 p-5">
                <div>
                    <h2 class="card-title text-center mb-5">Personal Information</h2>

                 <!-- PHP -->
                    <?php
                    // personal information variables
                    $name = "Abdullah Mohammad Sakib";
                    $age = 21;
                    $country = "Bangladesh";
                    $introduction = "I am $name. I'm $age years old and I come from $country.";

                    // print personal information using echo
                    echo "<p>Name: $name</p>";
                    echo "<p>Age: $age</p>";
                    echo "<p>Country: $country</p>";
                    echo "<p class='card-text'><b>Hello,<br>$introduction</b></p>";
                    ?>
                 <!-- PHP End -->

                </div>
            </div>
        </div>
    </div>
</body>

</html>