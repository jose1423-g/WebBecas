<?php 

session_start();

session_destroy();

$user  = $_SESSION['Nocontrol'];
if ($user == null || $user == "") { 
header("location: ../index.php");

}


?>