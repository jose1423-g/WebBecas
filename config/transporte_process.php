<?php 
include("./conexion.php");
session_start();
$user =  $_SESSION["No_control"];
if (isset($user)) {
    $consulta = mysqli_query($link ," SELECT * FROM usuario WHERE No_control = $user");
    $row = mysqli_fetch_assoc($consulta);
    $id = $row['ID_user'];   
} 
//1 = proceso, 2 = aceptado, 3 = rechazado
//date_default_timezone_set('America/Mexico_city');
error_reporting(0);

$puntos = 0;
$state_form = 1;
$fecha_envio = date('Y,m,d');
$tipo_beca = "Beca de transporte";

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$F_nacimiento = $_POST['F_nacimiento'];
$curp = $_POST['curp'];
$nacionalidad = $_POST['nacionalidad'];
$localidad = $_POST['localidad'];
$municipio =  $_POST['municipio'];
$estado = $_POST['estado'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$C_postal = $_POST['C_postal'];
$M_actual = $_POST['M_actual'];
$L_actual = $_POST['L_actual'];
$E_actual = $_POST['E_actual'];
$E_civil = $_POST['E_civil'];
$Z_residencial = $_POST['Z_residencial'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$discapacidad = $_POST['discapacidad'];
$Dis_option = $_POST['Dis_option'];
$Dis_otra = $_POST['Dis_otra'];
$indigena = $_POST['indigena'];
$programa = $_POST['programa'];
$generacion = $_POST['generacion'];
$carrera = $_POST['carrera'];
$turno = $_POST['turno'];
$pro_academico = $_POST['Pro_academico'];
$A_conocimiento = $_POST['A_conocimiento'];
$Promedio_Anterior = $_POST['Promedio_Anterior'];
$Semestre_acur = $_POST['Semestre_acur'];
$vivienda = $_POST['vivienda'];
$T_vivienda = $_POST['T_vivienda'];
$N_dormitorios = $_POST['N_dormitorios'];
$dormitorios = $_POST['dormitorios'];
$paredes = $_POST['paredes'];
$techos = $_POST['techos'];
$pisos = $_POST['pisos'];
$mobiliario = $_POST['mobiliario'];
$servicio = $_POST['servicio'];
$S_medico = $_POST['S_medico'];
$F_medico = $_POST['F_medico'];
$enfermedades_f = $_POST['enfermedades_f'];

//dormitorios <=3
$dormitoriosA = implode(" ", $dormitorios);
$tama_dormitorios = count($dormitorios);
//mobiliario <= 5
$mobiliarioA = implode(" ", $mobiliario);
$tama_mobiliario = count($mobiliario);
//servicios <= 5
$servicioA = implode(" ", $servicio);
$tama_servicio = count($servicio);

if ($genero == "hombre") {
    $puntos += 20;
}elseif ($genero == "mujer") {
    $puntos += 20;
}

if ($E_civil == "soltero") {
    $puntos += 10;
}elseif ($E_civil == "casado") {
    $puntos += 20;
}elseif ($E_civil == "union libre") {
    $puntos += 20;
}elseif ($E_civil == "divorciado") {
    $puntos += 10;
}elseif ($E_civil == "viudo") {
    $puntos += 10;
}

if($Z_residencial == "urbana"){
    $puntos += 10;
}elseif ($Z_residencial == "rural") {
    $puntos += 10;
}elseif ($Z_residencial == "marginada") {
    $puntos += 20;
}

if ($discapacidad == "si") {
    $puntos += 20;
}

if ($Dis_option == "auditiva") {
    $puntos += 10;
}elseif ($Dis_option == "visual") {
    $puntos += 10;
}elseif($Dis_option == "motora"){
    $puntos += 10;
}

if ($indigena == "si") {
    $puntos += 10;
}

if ($programa == "si") {
    $puntos -= 10;
}

if ($turno == "matutino") {
    $puntos += 10;
}elseif ($turno == "vespertino") {
    $puntos += 10;
}elseif ($puntos == "mixto") {
    $puntos += 20;
}

if ($vivienda == "propia") {
    $puntos += 10;
}elseif ($vivienda == "rentada") {
    $puntos += 20;
}elseif ($vivienda == "prestada") {
    $puntos += 20;
}

if ($T_vivienda == "casa sola") {
    $puntos += 10;
}elseif ($T_vivienda == "departamento") {
    $puntos += 10;
}elseif ($T_vivienda == "vecindad") {
    $puntos += 20;
}elseif($T_vivienda == "campamento"){
    $puntos += 20;
}elseif ($T_vivienda == "albergue") {
    $puntos += 20;
}elseif($T_vivienda == "accesoria"){
    $puntos += 20;
}

if ($tama_dormitorios <= 3) {
    $puntos += 20;
}

if ($paredes == "tabique") {
    $puntos += 10;
} elseif($paredes == "madera") {
    $puntos += 20;
}elseif($paredes == "carton"){
    $puntos += 20;
}

if ($techos == "concreto") {
    $puntos += 10;
}elseif ($techos == "lamina de asbesto") {
    $puntos += 10;
}elseif ($techos == "lamina de carton") {
    $puntos += 20;
}elseif ($techos == "lamina metalica") {
    $puntos += 10;
}

if ($pisos == "mosaicos") {
    $puntos += 10;
}elseif ($pisos == "loseta") {
    $puntos += 10;
}elseif ($pisos == "cemento") {
    $puntos += 10;
}elseif ($pisos == "tierra apisonada") {
    $puntos += 20;
}elseif ($pisos == "madera") {
    $puntos += 10;
}

if ($tama_mobiliario  <= 5) {
    $puntos += 10;
}

if ($tama_servicio <= 5) {
    $puntos += 10;
}


echo "Toltal  ". $puntos;
$query = mysqli_query($link,"INSERT INTO `form_data`(`tipo_beca`,`nombre`, `genero`, `F_nacimiento`, `CURP`, `Nacionalidad`, `localidad`, `municipio`, `estado`, `calle`, `colonia`, `C_postal`, `M_actual`, `L_actual`, `E_actual`, `E_civil`, `Z_residencial`, `celular`, `email`, `discapacidad`, `Dis_option`, `Dis_otra`, `programa`, `indigena`, `generacion`, `carrera`, `turno`, `Pro_academic`, `A_conocimiento`, `Promedio_Anterior`, `Semestre_acur`, `vivienda`, `T_vivienda`, `N_dormitorios`, `dormitorios`, `paredes`, `techos`, `pisos`, `mobiliario`, `servicio`, `S_medico`, `F_medico`, `enfermedades_f`, `ID_user`, `fecha_envio`, `puntos`, `state_form`) VALUES 
('$tipo_beca','$nombre','$genero','$F_nacimiento','$curp','$nacionalidad','$localidad','$municipio','$estado','$calle','$colonia','$C_postal','$M_actual','$L_actual','$E_actual','$E_civil','$Z_residencial','$celular','$email','$discapacidad','$Dis_option','$Dis_otra','$programa','$indigena','$generacion','$carrera','$turno','$pro_academico','$A_conocimiento','$Promedio_Anterior','$Semestre_acur','$vivienda','$T_vivienda','$N_dormitorios','$dormitoriosA','$paredes','$techos','$pisos','$mobiliarioA','$servicioA','$S_medico','$F_medico','$enfermedades_f','$id','$fecha_envio','$puntos','$state_form')");

if ($query) {
    echo "success";
    header("location: ../views/respuesta.php");
}else{
    echo "Error al subir la informacion". mysqli_error($link);
}


?>