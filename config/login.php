<?php 

include("./conexion.php");
//error_reporting(0);
session_start();
if (isset($_POST["numcontrol"]) && isset($_POST["password"])) {

        $numcontrol =  mysqli_real_escape_string($link, $_POST['numcontrol']);
        $password = mysqli_real_escape_string($link, $_POST['password']);

        $consulta = mysqli_query($link, "SELECT * FROM usuario WHERE No_control = '$numcontrol' AND pass = '$password'");
        $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
        $count =  mysqli_num_rows($consulta);
                if ($count == 1) {
                   $_SESSION['No_control'] = $numcontrol;
                    exit("success");
                }elseif($count == 0){
                    echo "Error user o password";
                }
            }                         
        
?>