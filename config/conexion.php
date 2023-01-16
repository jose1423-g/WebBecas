<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_central";

$link = mysqli_connect($servername, $username, $password, $database);

    if(!$link){
        die("Error de depuracion". mysqli_connect_errno());
        die("Error al conectarse".mysqli_connect_error());
        exit;
    }

    //echo "Se realizo una conexion exsitosa con la base de datos";
    //echo "Informacion del host". mysqli_get_host_info($link);

    //mysqli_close($conect);

?>