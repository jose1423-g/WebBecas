<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becas-tec</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/webbecas/css/style.css">
</head>
<body>
  
<header class="py-3 bg-blue position-fixed top-0 w-100">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/webbecas/main.php" class="ps-2 nav-link">
                    <h1 class="text-white mb-0">BecasTec</h1>
                </a>
                <button class="btn d-lg-none" id="btn_toggle"><img src="/webbecas/img/menu.png" alt="iconmenu" width="40rem"></button>
            </div>
                <div class="d-lg-flex position-absolute end-0" id="slidedown">
                <ul class="nav d-block d-lg-flex" style="margin-top: .6rem;">
                    <li class="nav-item ms-1"><a class="nav-link text-white" href="/webbecas/main.php">Becas</a></li>
                    <li class="nav-item ms-1"><a class="nav-link text-white" href="/webbecas/views/perfil.php?p=<?php echo "$id"; ?>">Perfil</a></li>
                    <li class="nav-item ms-1"><a class="nav-link text-white" href="" id="close">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>    
    </header>