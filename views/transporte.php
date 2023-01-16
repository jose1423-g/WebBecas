<?php
include("../config/conexion.php");
session_start();
$user =  $_SESSION["No_control"];
if (isset($user)) {
    $consulta = mysqli_query($link, " SELECT * FROM usuario WHERE No_control = $user");
    $row = mysqli_fetch_assoc($consulta);
    $id = $row['ID_user'];
} elseif ($user == null || $user == "") {
    header("location: ../index.php");
}
?>
<?php include("../components/header.php"); ?>
<main class="margin-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-9">
                <div class="d-block">
                    <h1 class="fw-bold mb-3">Beca de transporte</h1>

                    <form action="../config/transporte_process.php" method="POST" id="form">
                        <div class="bg-blue p-1 rounded-1 mb-3">
                            <h4 class="fw-bold text-center text-white">Datos personales</h4>
                        </div>
                        <div class="mb-3">
                            <div>
                                <label for="nombre" class="form-label">Apellido Paterno Apellido Materno Nombre(s)</label>
                                <input class="form-control" type="text" id="nombre" name="nombre" required />
                            </div>
                        </div>
                        <!----------------------------------------------------------------->
                        <div class="mb-3">
                            <div class="d-flex mb-2">
                                <p class="fw-bold me-3">Genero</p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="genero" value="hombre" name="genero" required />
                                    <label class="form-check-label" for="genero">Hombre</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="genero" value="mujer" name="genero" required />
                                    <label class="form-check-label" for="genero">Mujer</label>
                                </div>
                            </div>
                            <!-------------------------------------------------------------------->
                            <div class="mb-2">
                                <label for="F_nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="F_nacimiento" name="F_nacimiento" required />
                            </div>
                            <div class="mb-2">
                                <label for="curp" class="form-label">CURP</label>
                                <input type="text" class="form-control" id="curp" name="curp" required />
                            </div>
                            <div class="mb-2">
                                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required />
                            </div>
                        </div>
                        <!-------------------------------------------------------------------->
                        <div class="mb-3">
                            <p class="fw-bold mb-1">Lugar de nacimiento</p>
                            <div class="mb-2">
                                <label for="localidad" class="form-label">Localidad o Ciudad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad" required />
                            </div>
                            <div class="mb-2">
                                <label for="municipio" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" required />
                            </div>
                            <div class="mb-2">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" required />
                            </div>
                        </div>
                        <!-------------------------------------------------------------------->
                        <div class="mb-3">
                            <p class="fw-bold">Domicilio actual</p>
                            <div class="mb-2">
                                <label for="calle" class="form-label">Calle y número</label>
                                <input type="text" class="form-control" id="calle" name="calle" required />
                            </div>
                            <div class="mb-2">
                                <label for="colonia" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" required />
                            </div>
                            <div class="mb-2">
                                <label for="C_postal" class="form-label">Código postal</label>
                                <input type="text" class="form-control" id="C_postal" name="C_postal" maxlength="5" required />
                            </div>
                            <div class="mb-2">
                                <label for="M_actual" class="form-label">Múnicipio</label>
                                <input type="text" class="form-control" id="M_actual" name="M_actual" required />
                            </div>
                            <div class="mb-2">
                                <label for="L_actual" class="form-label">Localidad o Ciudad</label>
                                <input type="text" class="form-control" id="L_actual" name="L_actual" required />
                            </div>
                            <div class="mb-2">
                                <label for="E_actual" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="E_actual" name="E_actual" required />
                            </div>
                        </div>
                        <!-------------------------------------------------------------------->
                        <div class="mb-3">
                            <label for="E_civil" class="mb-2">Estado civil</label>
                            <select class="form-select" aria-label="Default select example" id="E_civil" name="E_civil" required>
                                <option value="">Seleccione una</option>
                                <option value="soltero">Soltero</option>
                                <option value="casado">Casado</option>
                                <option value="union libre">Union libre</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="viudo">Viudo</option>
                            </select>

                            <label for="Z_residencial" class="mt-2 mb-2">Zona residencial</p>
                                <select class="form-select" aria-label="Default select example" id="Z_residencial" name="Z_residencial" required>
                                    <option value="">Seleccione una</option>
                                    <option value="urbana">Urbana</option>
                                    <option value="rural">Rural</option>
                                    <option value="marginada">Marginada</option>
                                </select>
                        </div>
                        <!-------------------------------------------------------------------->
                        <div class="mb-3">
                            <div class="mb-2">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="tel" class="form-control" id="celular" name="celular" maxlength="10" pattern="[0-9]{10}" required>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="d-flex mb-2 align-items-center">
                                <p class="me-3">¿Tiene alguna discapacidad</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="discapacidad" value="si" name="discapacidad" required />
                                    <label class="form-check-label" for="discapacidad">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="discapacidad" value="no" name="discapacidad" required />
                                    <label class="form-check-label" for="discapacidad">No</label>
                                </div>
                            </div>
                            <!-------------------------------------------------------------------->
                            <label for="Dis_option" class="mt-2 mb-2">¿Cual?</p>
                                <select class="form-select" id="Dis_option" name="Dis_option">
                                    <option value="">Seleccione una</option>
                                    <option value="auditiva">Auditiva</option>
                                    <option value="Visual">Visual</option>
                                    <option value="motora">Motora</option>
                                </select>
                                <div class="mt-2">
                                    <label for="Dis_otra" class="form-label">Otra</label>
                                    <input type="text" class="form-control" id="Dis_otra" name="Dis_otra">
                                </div>
                        </div>
                        <!-------------------------------------------------------------------->
                        <div class="mb-3">
                            <div class="d-flex mb-2">
                                <p class="me-3">¿Origen indigena?</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="indigena" value="si" name="indigena" required />
                                    <label class="form-check-label" for="indigena">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="indigena" value="no" name="indigena" required />
                                    <label class="form-check-label" for="indigena">No</label>
                                </div>
                            </div>
                            <div class="d-flex mb-2 align-items-center">
                                <p class="me-3">¿Pertenece al programa oportunidades?</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="programa" value="si" name="programa" required />
                                    <label class="form-check-label" for="programa">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="programa" value="no" name="programa" required />
                                    <label class="form-check-label" for="programa">No</label>
                                </div>
                            </div>
                        </div>
                        <!--DATOS ACADEMICOS-->
                        <div class="mb-3">
                            <div class="bg-blue p-1 mb-3 rounded">
                                <h4 class="fw-bold text-center text-white">Datos académicos</h4>
                            </div>
                            <div class="mb-2">
                                <label for="generacion" class="form-label">Generación</label>
                                <input type="text" class="form-control" id="generacion" name="generacion" required>
                            </div>
                            <div class="mb-2">
                                <label for="carrera" class="mt-3 mb-2">Carrera</p>
                                    <select class="form-select" id="carrera" name="carrera" required>
                                        <option value="">Seleccione una</option>
                                        <option value="Contaduría publica">Contaduría publica</option>
                                        <option value="Ing. Gestión">Ing. Gestión</option>
                                        <option value="Ing.Civil">Ing.Civil</option>
                                        <option value="Lic.Administración">Lic.Administración</option>
                                        <option value="Ing.Sistemas">Ing.Sistemas</option>
                                        <option value="Ing.Mecatrónica">Ing.Mecatrónica</option>
                                        <option value="Ing.Administración">Ing.Administración</option>
                                        <option value="Ing.Informática">Ing.Informática</option>
                                        <option value="Ing.Electromecánica">Ing.Electromecánica</option>
                                    </select>
                            </div>
                            <label for="turno" class="mt-2 mb-2">Turno</p>
                                <select class="form-select" id="turno" name="turno" requiered>
                                    <option value="">Seleccione una</option>
                                    <option value="matutino">Matutino</option>
                                    <option value="vespertino">Vespertino</option>
                                    <option value="mixto">Mixto</option>
                                </select>

                                <div class="my-2">
                                    <p class="me-2">¿Programa académico?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="Pro_academico" value="licenciatura" name="Pro_academico" required />
                                        <label class="form-check-label" for="pacademico">Licenciatura</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="Pro_academico" value="ingenieria" name="Pro_academico" required />
                                        <label class="form-check-label" for="Pro_academico">Ingenieria</label>
                                    </div>
                                </div>
                                <label for="A_conocimiento" class="mt-3 mb-2">Área de conocimiento</p>
                                    <select class="form-select" id="A_conocimiento" name="A_conocimiento" required>
                                        <option value="">Seleccione una</option>
                                        <option value="Contaduría publica">Contaduría publica</option>
                                        <option value="Ing. Gestión">Ing. Gestión</option>
                                        <option value="Ing.Civil">Ing.Civil</option>
                                        <option value="Lic.Administración">Lic.Administración</option>
                                        <option value="Ing.Sistemas">Ing.Sistemas</option>
                                        <option value="Ing.Mecatrónica">Ing.Mecatrónica</option>
                                        <option value="Ing.Administración">Ing.Administración</option>
                                        <option value="Ing.Informática">Ing.Informática</option>
                                        <option value="Ing.Electromecánica">Ing.Electromecánica</option>
                                    </select>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2">
                                <label for="Promedio_Anterior" class="form-label">Promedio del semestre anterior</label>
                                <input type="text" class="form-control" id="Promedio_Anterior" name="Promedio_Anterior" required>
                            </div>
                            <div class="">
                                <label for="Semestre_acur" class="form-label">Semestre a cursar</label>
                                <input type="text" class="form-control" id="Semestre_acur" name="Semestre_acur" required>
                            </div>
                        </div>

                        <!------------------------------VIVIENDA----------------------------------------->
                        <div class="mb-3">
                            <div class="bg-blue p-1 mb-3 rounded">
                                <h4 class="fw-bold text-center text-white">Vivienda</h4>
                            </div>

                            <div class="mb-3 bg-light p-2 rounded">
                                <p class="me-2">Tenencia de la vivienda</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Propia" id="vivienda" name="vivienda" required>
                                    <label class="form-check-label" for="vivienda">Propia</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="rentada" id="vivienda" name="vivienda" required>
                                    <label class="form-check-label" for="vivienda">Rentada</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="prestada" id="vivienda" name="vivienda" required>
                                    <label class="form-check-label" for="vivienda">Prestada</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="invadida" id="vivienda" name="vivienda" required>
                                    <label class="form-check-label" for="vivienda">Invadida</label>
                                </div>
                            </div>
                            <!----------------------->
                            <div class="mb-3 bg-light p-2 rounded">
                                <p class="me-2">Tipo de vivienda</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="casa sola" id="T_vivienda" name="T_vivienda" required>
                                    <label class="form-check-label" for="T_vivienda">Casa sola</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="departamento" id="T_vivienda" name="T_vivienda" required>
                                    <label class="form-check-label" for="T_vivienda">Departamento</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="vecindad" id="T_vivienda" name="T_vivienda" required>
                                    <label class="form-check-label" for="T_vivienda">Vecindad</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="campamento" id="T_vivienda" name="T_vivienda" required>
                                    <label class="form-check-label" for="T_vivienda">Campamento</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="albergue" id="T_vivienda" name="T_vivienda" required>
                                    <label class="form-check-label" for="T_vivienda">Albergue</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="accesoria" id="T_vivienda" name="T_vivienda" required>
                                    <label class="form-check-label" for="T_vivienda">Accesoria</label>
                                </div>
                            </div>

                            <div class="mb-3 bg-light p-2 rounded">
                                <div class="mb-3">
                                    <label for="N_dormitorios" class="form-label">Numero de dormitorios</label>
                                    <input type="number" class="form-control" id="N_dormitorios" name="N_dormitorios" required>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="sala" id="dormitorios" name="dormitorios[]">
                                    <label class="form-check-label" for="dormitorios">Sala</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="comedor" id="dormitorios" name="dormitorios[]">
                                    <label class="form-check-label" for="dormitorios">Comedor</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="cocina" id="dormitorios" name="dormitorios[]">
                                    <label class="form-check-label" for="dormitorios">Cocina</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="bano privado" id="dormitorios" name="dormitorios[]">
                                    <label class="form-check-label" for="dormitorios">Baño privado</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="bano colectivo" id="dormitorios" name="dormitorios[]">
                                    <label class="form-check-label" for="dormitorios">Baño colectivo</label>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------------------------------------------->
                            <div class="mb-3 bg-light p-2 rounded">
                                <p class="fw-bold">Materia predominante en la construcción de la vivienda</p>
                                <p class="fw-bold">Paredes</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="tabique" id="paredes" name="paredes" required>
                                    <label class="form-check-label" for="paredes">Tabique</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="madera" id="paredes" name="paredes" required>
                                    <label class="form-check-label" for="paredes">Madera</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="carton" id="paredes" name="paredes" required>
                                    <label class="form-check-label" for="paredes">Cartón</label>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------------------------------------------->
                            <div class="mb-3 bg-light p-2 rounded">
                                <div class="mb-3">
                                    <p class="fw-bold">Techos</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="concreto" id="techos" name="techos" required>
                                        <label class="form-check-label" for="techos">Concreto</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="lamina de asbesto" id="techos" name="techos" required>
                                        <label class="form-check-label" for="techos">Lamina de asbesto</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="lamina de Cartón" id="techos" name="techos" required>
                                        <label class="form-check-label" for="techos">Lamina de Cartón</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="lamina metálica" id="techos" name="techos" required>
                                        <label class="form-check-label" for="techos">Lamina metálica</label>
                                    </div>
                                </div>
                                <!---------------------------------------------------------------------------------------------------------->
                                <div class="mb-3">
                                    <p class="fw-bold">Pisos</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="mosaicos" id="pisos" name="pisos" required>
                                        <label class="form-check-label" for="pisos">Mosaicos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="loseta" id="pisos" name="pisos" required>
                                        <label class="form-check-label" for="pisos">Loseta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="cemento" id="pisos" name="pisos" required>
                                        <label class="form-check-label" for="pisos">Cemento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="tierra apisonada" id="pisos" name="pisos" required>
                                        <label class="form-check-label" for="pisos">Tierra apisonada</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="madera" id="pisos" name="pisos" required>
                                        <label class="form-check-label" for="pisos">Madera</label>
                                    </div>
                                </div>
                                <!---------------------------------------------------------------------------------------------------------->
                                <div class="mb-3">
                                    <p class="fw-bold">Mobiliario</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Televisión" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobilario">Televisión</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Estéreo" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Estéreo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Video" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Video</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="DVD" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">DVD</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Estufa" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Estufa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Horno de microondas" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Horno de microondas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Lavadora" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Lavadora</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Refrigerador" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Refrigerador</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Computadora" id="mobiliario" name="mobiliario[]">
                                        <label class="form-check-label" for="mobiliario">Computadora</label>
                                    </div>
                                </div>
                                <!---------------------------------------------------------------------------------------------------------->
                                <div>
                                    <p class="fw-bold">Servicios</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Agua potable" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Agua potable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Luz eléctrica" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Luz eléctrica</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Drenaje" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Drenaje</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Pavimento" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Pavimento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Transporte" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Transporte</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Linea telefonica" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Linea telefonica</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Internet" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Internet</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Televisión por cable" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Televisión por cable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Computadora" id="servicio" name="servicio[]">
                                        <label class="form-check-label" for="servicio">Computadora</label>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------------------------------------------->
                            <!--SALUD Y FAMILIA-->
                            <div class="mb-3">
                                <div class="bg-blue p-1 rounded mb-3">
                                    <h4 class="text-center fw-bold text-white">Salud y Familia</h4>
                                </div>

                                <div class="bg-light p-2 rounded">
                                    <div class="mb-3">
                                        <p class="fw-bold">Servicios médicos con los que cuenta la familia</p>
                                        <div class="form-check">
                                            <input class="form-check-input" value="IMSS" type="radio" name="S_medico" id="S_medico" required>
                                            <label class="form-check-label" for="S_medico">
                                                IMSS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="ISSTE" type="radio" name="S_medico" id="S_medico" required>
                                            <label class="form-check-label" for="S_medico">
                                                ISSTE
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="Centro de salud" type="radio" name="S_medico" id="S_medico" required>
                                            <label class="form-check-label" for="S_medico">
                                                Centro de salud
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="Dispensario" type="radio" name="S_medico" id="S_medico" required>
                                            <label class="form-check-label" for="S_medico">
                                                Dispensario
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" value="Medico privado" type="radio" name="S_medico" id="S_medico" required>
                                            <label class="form-check-label" for="S_medico">
                                                Medico privado
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <p class="fw-bold">Frecuencia con la que asiste el alumno (solicitante de beca) al medico</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Una vez por semana" id="F_medico" name="F_medico" required>
                                            <label class="form-check-label" for="F_medico">Una vez por semana</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Mensualmente" id="F_medico" name="F_medico" required>
                                            <label class="form-check-label" for="F_medico">Mensualmente</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Anualmente" id="F_medico" name="F_medico" required>
                                            <label class="form-check-label" for="F_medico">Anualmente</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Cuando se enferma" id="F_medico" name="F_medico" required>
                                            <label class="form-check-label" for="F_medico">Cuando se enferma</label>
                                        </div>
                                        <div class="mt-3">
                                            <label for="enfermedades_f" class="form-label">¿Padece algunas enfermedades frecuentes?</label>
                                            <input type="text" class="form-control" id="enfermedades_f" name="enfermedades_f">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3" id="btn_form">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>



<?php include("../components/footer.php"); ?>