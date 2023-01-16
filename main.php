<?php 
include("./config/conexion.php");
session_start();
$user =  $_SESSION["No_control"];
if (isset($user)) {
    $consulta = mysqli_query($link ," SELECT * FROM usuario WHERE No_control = $user");
    $row = mysqli_fetch_assoc($consulta);
    $id = $row['ID_user'];   
} elseif ($user == null || $user == "") {
    header("location: ./index.php");
} 
?>
<?php include("./components/header.php");?> 


<main class="margin-top">
<div class="container">
        <div class="row d-block d-lg-flex justify-content-center">
            
            <div class="col col-lg-8 mt-3 shadow py-2 mb-5">
                <h1 class="mb-0 text-center fw-bold">Beca de transporte</h1> 
                <div class="d-block d-md-flex p-2 align-items-center">
                    <img class="my-3 img-fluid" src="./img/beca-transporte.jpeg" alt="img_beca" width="320px">
                    <p class="ms-3">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sit ullam nobis totam ut minus eos molestias porro enim molestiae. Ipsum reiciendis iste ipsa ipsam temporibus assumenda quo reprehenderit quas. adipisicing elit. Magni sunt pariatur dolor rerum voluptate laborum tempora, soluta beatae id minima, vero voluptates, aspernatur quibusdam nisi esse magnam quo et natus?</p>
                </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary w-100" id="btn_alimentos">Registrate</buttom>
                    </div>
            </div>

            <div class="col col-lg-8 mt-3 shadow py-2 mb-5">
                <h1 class="mb-0 text-center fw-bold">Beca de alimentos</h1> 
                <div class="d-block d-md-flex p-2 align-items-center">
                    <img class="my-3 img-fluid" src="./img/beca-alimentos.jpeg" alt="img_beca" width="320px">
                    <p class="ms-3">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sit ullam nobis totam ut minus eos molestias porro enim molestiae. Ipsum reiciendis iste ipsa ipsam temporibus assumenda quo reprehenderit quas. adipisicing elit. Magni sunt pariatur dolor rerum voluptate laborum tempora, soluta beatae id minima, vero voluptates, aspernatur quibusdam nisi esse magnam quo et natus?</p>
                </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary w-100 text-decoration-none" id="btn_transporte">Registrate</button>
                    </div>
            </div>
        </div>
    </div>
</main>


    <?php include("./components/footer.php"); ?>
