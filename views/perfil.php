<?php
include("../config/conexion.php");
session_start();
$user =  $_SESSION["No_control"];
if (isset($user)) {
    $consulta = mysqli_query($link ," SELECT * FROM usuario WHERE No_control = $user");
    $row = mysqli_fetch_assoc($consulta);
    $id = $row['ID_user'];   
    $tabla = mysqli_query($link, "SELECT * FROM usuario WHERE ID_user = '$id'");
    $historial = mysqli_query($link, "SELECT tipo_beca, state_form FROM form_data WHERE ID_user = $id");

} elseif ($user == null || $user == "") {
    header("location: ../index.php");
} 
?>
<?php include("../components/header.php"); ?>

    <main class="margin-top">
        <div class="container mb-3">
            <div class="row d-block d-lg-flex justify-content-center">
                <div class="col col-lg-5 mb-3 mb-lg-0">
                    <div class="d-block border">
                        <div class="p-1 bg-blue">
                            <h3 class="text-center text-white">Datos Generales</h3>
                        </div>
                        <?php  while ($fila = mysqli_fetch_assoc($tabla)) {
                                $nombre  = $fila['nombre'];
                                $curp  = $fila['CURP'];
                                $nocontrol = $fila['No_control'];
                                $carrera  = $fila['Carrera'];              
                                $calle = $row['Calle'];
                                $Nointerior = $row['NO_interior'];
                                $colonia = $row['Colonia'];
                                $postal = $row['Cod_postal'];
                                $fecha = $row['Fech_Nacimiento'];
                                $correo = $row['Correo_inst'];              
                            ?>
                             <div class="border-bottom p-2">
                                <p class="fw-bold fs-4 m-0">No.Control</p>
                                <p class="fs-5 m-0"><?php echo $nocontrol; ?></p>
                            </div>
                            <div class="border-bottom p-2">
                                <p class="fw-bold fs-4 m-0">Nombre</p>
                                <p class="fs-5 m-0"><?php echo $nombre; ?></p>
                            </div>
                            <div class="border-bottom p-2">
                                <p class="fw-bold fs-4 m-0">CURP</p>
                                <p class="fs-5 m-0"><?php echo $curp; ?></p>
                            </div>
                            <div class="border-bottom p-2">
                                <p class="fw-bold fs-4 m-0">Carrera</p>
                                <p class="fs-5 m-0"><?php echo $carrera; ?></p>
                            </div>
                    </div>
                </div>

                <div class="col col-lg-5 mb-3 mb-lg-0">
                    <div class="d-block border">
                        <div class="p-1 bg-blue">
                            <h3 class="text-center text-white">Datos Personales</h3>
                        </div>
                        <div class="border-bottom p-2">
                            <p class="fw-bold fs-4 m-0">Calle</p>
                            <p class="fs-5 m-0"><?php echo $calle; ?></p>
                        </div>
                        <div class="border-bottom p-2">
                            <p class="fw-bold fs-4 m-0">No</p>
                            <p class="fs-5 m-0"><?php echo $Nointerior; ?></p>
                        </div>
                        <div class="border-bottom p-2">
                            <p class="fw-bold fs-4 m-0">Colonia</p>
                            <p class="fs-5 m-0"><?php echo $colonia; ?></p>
                        </div>
                        <div class="border-bottom p-2">
                            <p class="fw-bold fs-4 m-0">Codigo postal</p>
                            <p class="fs-5 m-0"><?php echo $postal; ?></p>
                        </div>
                        <div class="border-bottom p-2">
                            <p class="fw-bold fs-4 m-0">Fecha de Nacimiento</p>
                            <p class="fs-5 m-0"><?php echo $fecha; ?></p>
                        </div>
                        <div class="border-bottom p-2">
                            <p class="fw-bold fs-4 m-0">Correo Institucional</p>
                            <p class="fs-5 m-0"><?php echo $correo; ?></p>
                        </div>
                    </div>
                <?php  } ?>
                </div>
                <section class="mt-3">
                    <div class="bg-blue rounded-1 mb-3">
                        <h1 class="p-1 fw-bold text-white text-center">Historial de solicitudes</h1>
                    </div>
                <?php while ($row = mysqli_fetch_array($historial)) { 
                        $programa = $row['tipo_beca'];
                        $estado = $row['state_form'];
                    ?>    
                    <div class="row">
                       <div class="col border-top">
                            <h3 class="fw-bold">Programa</h3>
                            <p class="fs-3"><?php echo $programa; ?></p>
                        </div>
                        <div class="col border-top">
                            <h3 class="fw-bold">Estatus</h3>
                            <p class="fs-3"><?php  if($estado == 1){
                                echo "En proceso";
                            }elseif ($estado == 2) {
                               echo "Aceptada";
                            }elseif ($estado == 3) {
                                echo "Rechazada";
                            }
                            ?>
                            </p>
                        </div>
                    </div>    
               <?php  } ?>    
                </section>
            </div>
        </div>
    </main>

    <?php include("../components/footer.php"); ?>