<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col col-md-7 col-lg-5">
                <form class="shadow p-3 mb-5 rounded-2 p-3" action="./config/login_admin.php" method="POST" id="form">
                    <div class="mb-3 mt-3">
                      <h2 class="text-center mb-3">Administrador</h2>
                    </div>
                    <div class="mb-3">
                      <label for="usuario" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="usuario" name="usuario"> 
                    </div>
                    <div class="mb-3">
                      <label for="pass" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary my-3 w-100" id="login_admin">Login</button>
                  </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>