<?php 
session_start();
// handling the session
if(!isset($_SESSION['login'])){
  header('Location: login.php'); 
   
}

echo "<h1>User dashboard</h1>";
echo "<a href='logout.php'>Logout</a>"
?>