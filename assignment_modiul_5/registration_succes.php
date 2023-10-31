<?php 
session_start();
// handling the session
if(isset($_SESSION['login'])){
    if($_SESSION['role'] == 'admin'){
        header('Location: admin_deshboard.php'); //go to admin deshboard
    }else{
        header('Location: user_deshboard.php'); //go to user deshboard
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card bg-dark text-light">
                    <div class="card-body">
                        <h2 class="text-center">Registration Successful</h2>
                        <p class="text-center">Thank you for registering with our website.</p>
                        <p class="text-center"><a class="btn btn-primary" href="login.php" role="button">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>