<?php 

session_start();

session_destroy();

$user = $_SESSION['usuario'];
if ($user == null || $user == "") {
        header("location: ../index.php");
    }

?>