<?php
session_start();
// handling the session
if(isset($_SESSION['login'])){
    session_destroy();
    header('Location: login.php'); //go to admin deshboard

}
?>