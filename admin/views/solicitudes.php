<?php
include("../config/conexion.php");
session_start();
$user = $_SESSION['usuario'];

if ($user == null || $user == "") {
    header("location: ../index.php");
}

$query = mysqli_query($link, "SELECT ID_form, nombre, tipo_beca, puntos, state_form FROM form_data");
$resultados = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php include("../components/header.php") ?>

    <div class="container mt-5">
        <div class="d-flex align-items-center mb-3">
            <h3 class="me-3 mb-0"># Solicitudes</h3>
            <h3 class="text-primary mb-0"><?php echo $resultados ?></h3>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Programa</th>
                    <th scope="col">Solicitante</th>
                    <th scope="col">Puntos</th>
                    <th scope="col">Estatus</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) {
                    $id_form = $row['ID_form'];
                    $programa = $row['tipo_beca'];
                    $puntos = $row['puntos'];
                    $estado = $row['state_form'];
                    $nombre_s = $row['nombre'];
                ?>
                    <tr>
                        <td><?php echo $programa; ?></td>
                        <td><?php echo $nombre_s; ?></td>
                        <td><?php echo $puntos; ?></td>
                        <td><?php if ($estado == 1) {
                                echo "En proceso";
                            } elseif ($estado == 2) {
                                echo "Aceptada";
                            } elseif ($estado == 3) {
                                echo "Rechazada";
                            } ?></td>
                        <td>
                            <button class="btn btn-success aprobar" id='del_<?php echo $id_form; ?>' data-id='<?php echo $id_form; ?>'>Aprobar</button>
                            <button class="btn btn-danger ms-2 rechazar" id='del_<?php echo $id_form; ?>' data-id='<?php echo $id_form; ?>'>Rechazar</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>