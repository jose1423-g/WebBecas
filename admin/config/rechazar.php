<?php 

include("./conexion.php");
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $rechazada = 3;
        $query = "UPDATE form_data SET state_form='$rechazada' WHERE ID_form = $id";
        $result = mysqli_query($link,$query);
        
        if ($result) {
            echo "success";
            //header("location: ../views/solicitudes.php");
        }else{
            die("Error al subir la informacion".mysqli_error($link));
        }
    }

?>