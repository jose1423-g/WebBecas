<?php 

    include("./conexion.php");
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $aprobada = 2;
        $query = "UPDATE form_data SET state_form='$aprobada' WHERE ID_form = $id";
        $result = mysqli_query($link,$query);
        
        if ($result) {
            echo "success";
            //header("loccation: ../views/solicitudes.php");
        }else{
            die("Error al subir la informacion".mysqli_error($link));
        }
    }



?>