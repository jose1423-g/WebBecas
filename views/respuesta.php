<?php 
include("../config/conexion.php");
session_start();
$user =  $_SESSION["No_control"];
if (isset($user)) {
    $consulta = mysqli_query($link ," SELECT * FROM usuario WHERE No_control = $user");
    $row = mysqli_fetch_assoc($consulta);
    $id = $row['ID_user'];   
    $tabla = mysqli_query($link, "SELECT * FROM usuario WHERE ID_user = '$id'");

} elseif ($user == null || $user == "") {
    header("location: ../index.php");
} 
include("../components/header.php");
?>


<div class="container">
    <div class="position-absolute top-50 start-50 translate-middle mt-3">
        <div class="col mt-3 shadow px-5 py-3 mb-5" style="width: 20rem;"> 
            <div class="text-center">
                <img class="my-3 img-fluid" src="../img/checked.png" alt="checked" width="220px">
            </div>
            <h3 class="mb-3 text-center fw-bold text-green">Enviado</h3>
            <p class="mb-3 text-center">Gracias por postularte</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary w-100" id="btn_volver">Regresar</buttom>
            </div>
        </div>
    </div>
</div>


<?php
include("../components/footer.php");
?>