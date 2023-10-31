<?php

session_start();
$msg = false;
// handling the session
if (!isset($_SESSION['login'])) {
    header('Location: login.php'); //go to admin deshboard

}
$usersFile = 'users.json';

function updateUser($usersFile, $indexEmail, $role)
{
    $data = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
    foreach ($data as $key => $entry) {

        if ($key  === $indexEmail) {
            $data[$key]['role'] = $role;
            // echo $data[$key ]['role'];
        }
    }

    // echo "<pre>";
    // print_r($data);
    // die();
    $newJsonString = json_encode($data);
    file_put_contents($usersFile, $newJsonString);
    return true;
}

if ($_POST) {
    if (updateUser($usersFile, $_POST['email'], $_POST['role'])) {
        $msg = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <?php
        if ($msg) { ?>
        <!-- error massage print -->
            <div class="alert alert-primary">
                Successfully updated!
            </div>
        <?php }
        ?>

        <div class="card-header bg-secondary text-center text-light">
            Roles Edit
        </div>
        <div class="card-body">

            <?php
            $users = json_decode(file_get_contents('users.json'), true);
            // echo "<pre>";
            // print_r($users);
            // echo "</pre>";
            $email = $_GET['email'];
            // print_r($users[$email]);

            $role = $users[$email]['role'];
            ?>

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Role Name</th>
                    </tr>
                <tbody>
                    <tr>
                        <td><?php echo $users[$email]['username'] ?? '' ?></td>
                        <td><?php echo $_GET['email'] ?? ''; ?></td>
                        <td><?php echo $role ?? '' ?></td>
                    </tr>
                </tbody>

                </thead>
            </table>

            <!-- Role change  -->
            <div class="row">
                <form action="" method="post">
                    <input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">
                    <div class="col-4">
                        <P class="">* Change role for <!-- php code and asign user_email  --> </P>
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option value="">Open this select menu</option>
                            <option value="admin" <?php echo $role === 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="user" <?php echo  $role === 'user' ? 'selected' : '' ?>>User</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <!-- <a class="btn btn-primary" href="#" role="button">Link</a> -->
                        <input type="submit" class="btn btn-primary mt-2" name="Update">
                    </div>
                </form>
            </div>

            <div class="mt-5">
                <a class="btn btn-danger" href="admin_deshboard.php" role="button">Back to deshboard</a>
            </div>

        </div>
    </div>

</body>

</html>