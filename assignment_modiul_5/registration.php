<?php
session_start();
// handling the session
if (isset($_SESSION['login'])) {
    if ($_SESSION['role'] == 'admin') {
        header('Location: admin_deshboard.php'); //go to admin deshboard
    } else {
        header('Location: user_deshboard.php'); //go to user deshboard
    }
}

$usersFile = 'users.json';

$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

function saveUsers($users, $file)
{
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

$errorMsg = []; // Error array

// Registration Form Handling
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    //From Validation
    if (empty($username) || empty($email) || empty($password)) {
        array_push($errorMsg, "Please fill  all the fields!");
    } else {
        if (isset($users[$email])) {
            array_push($errorMsg, "Email already exists!");
        } else {
            $users[$email] = [
                'username' => $username,
                'password' => $password,
                'role'     => '',
            ];

            saveUsers($users, $usersFile);
            header('Location: registration_succes.php');
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include Bootstrap CSS here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div style="width: 50%;" class="mx-auto mt-5">

            <!-- print error massage -->
            <?php
            if ($errorMsg > 0) {
                foreach ($errorMsg as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            ?>

            <h2>Registration</h2>
            <form method="POST" action="registration.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <!-- Hidden Role Field -->
                <input type="hidden" name="role" value="">
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </form>
            <div class="d-flex align-items-center justify-content-between pb-4">
                <p class="mb-0 me-2">Already have an account?</p>
                <a class="btn btn-outline-danger" href="login.php" role="button">Log In</a>
            </div>
        </div>
    </div>
</body>

</html>