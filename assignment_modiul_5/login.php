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

$errorMsg = [];  //ErrorMsg array ;

$users = json_decode(file_get_contents('users.json'), true);

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    // echo $email;
    // echo $password;
    if (empty($email) || empty($password)) {
        array_push($errorMsg, "All fild are required !"); // Error massage
    }

    // email checking
    else {

        // if email is valid
        if (isset($users[$email])) {
            $storePassword = $users[$email]["password"];

            // pasword checking
            if ($password == $storePassword) {
                // echo "hello";
                $_SESSION['login'] = true;  //session log is true
                if (isset($users[$email])) {
                    $storeRole = $users[$email]["role"];

                    // Role cheching
                    if ($storeRole == "admin") {
                        $_SESSION['role'] = "admin";
                        header('Location: admin_deshboard.php'); //go to admin deshboard
                        exit;
                    } else {
                        header('Location: user_deshboard.php'); //go to user deshboard
                        exit;
                    }
                }
            }
            // if Password is not match
            else {
                array_push($errorMsg, "Password doesn't match!");  // Error massage
            }
        }

        // if email is not valid
        else {
            array_push($errorMsg, "Email doesn't match!");  // Error massage
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .linear-gradient {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(121, 9, 41, 1) 100%, rgba(0, 212, 255, 1) 100%);
        }
    </style>
</head>

<body>
    <div>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <!-- print errors -->
                                        <?php
                                        if (count($errorMsg) > 0) {
                                            foreach ($errorMsg as $error) {
                                                echo "<div class='alert alert-danger'>$error</div>";
                                            }
                                        }
                                        ?>

                                        <div class="text-center">
                                            <img src="./photo/lotus.webp" style="width: 185px;" alt="logo">
                                            <h3 class="mt-1 mb-4 pb-1">We are The Lotus Team</h3>
                                        </div>
                                        <!-- Log in form -->
                                        <form action="login.php" method="POST">
                                            <div class="text-center mb-3">
                                                <h5>Please login to your account</h5>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="email" class="form-control" placeholder="Enter your email address" name="email">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password" />
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="login">Log In</button>
                                            </div>
                                        </form>

                                        <div class="d-flex align-items-center justify-content-between pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a class="btn btn-outline-danger" href="registration.php" role="button">Ragistration</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center linear-gradient">
                                    <div class="text-light px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are more than just a company</h4>
                                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>