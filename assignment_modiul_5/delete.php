<?php 

session_start();
// handling the session
if(!isset($_SESSION['login'])){
  header('Location: login.php'); //go to admin deshboard 
}

else{
    header('Location: admin_deshboard.php'); //go to admin deshboard 
}


$usersFile = 'users.json';
$jsnoString = file_get_contents($usersFile);
$email=$_GET['email'];

if(removeIndexFromJSON($jsnoString,$email)){
	 header('Location: admin_deshboard.php'); //go to admin deshboard
}

function removeIndexFromJSON($jsonString, $indexToRemove) {
    // Decode the JSON string into an associative array
    $data = json_decode($jsonString, true);

    // Check if the index exists
    if (isset($data[$indexToRemove])) {
        // Remove the specified index
        unset($data[$indexToRemove]);

        // Encode the modified array back to JSON
        $jsonString = json_encode($data);
    	file_put_contents('users.json', $jsonString);
        return true;
    } else {
        // Index not found, return the original JSON string
        return false;
    }
}


?>
