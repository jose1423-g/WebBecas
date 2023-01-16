<?php 
include("conexion.php");
    session_start();

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    if($usuario == "" || $pass == ""){
        echo "LLena todo los campos";
    }else{
    $query = mysqli_query($link, "SELECT * FROM admin WHERE usuario = '$usuario' AND pass = '$pass'");
    $result = mysqli_num_rows($query);

    if ($result == 1) {
        $_SESSION['usuario'] = $usuario;
        echo "success";
    }elseif ($result == 0) {
        echo "Error user o password";
    }
        
    }








?>