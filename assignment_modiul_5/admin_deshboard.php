<?php
session_start();
// handling the session
if (!isset($_SESSION['login'])) {
    header('Location: login.php'); //go to admin deshboard 
}
// echo $_SESSION['role'];
if ($_SESSION['role'] == 'user' || $_SESSION['role'] == '') {
    header('Location: user_deshboard.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Role Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-4">

        <!--  Table -->
        <div class="card">
            <!-- log out button -->
            <div class="d-flex justify-content-end m-3">
                <a href='logout.php' class='btn btn-outline-danger'>Logout</a>
            </div>

            <div class="card-header bg-secondary text-center text-light">
                Admin Deshboard
            </div>
            <div class="card-body">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php
                        $users = json_decode(file_get_contents('users.json'), true);
                        for ($i = 0; $i < count($users); $i++) {

                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>
                                    <?php $keys = array_keys($users)[$i];
                                    $username = $users[$keys]['username'];
                                    echo $username;
                                    ?>
                                </td>
                                <td><?php $keys = array_keys($users)[$i];
                                    echo $keys; ?></td>
                                <td>
                                    <?php $keys = array_keys($users)[$i];
                                    $username = $users[$keys]['role'];
                                    echo $username;
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary me-3" href="edit.php?email=<?php echo $keys; ?>" role="button">Edit</a>

                                    <a class="btn btn-danger" href="delete.php?email=<?php echo $keys; ?>" role="button">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }


                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div>

        </div>


    </div>

</body>

</html>