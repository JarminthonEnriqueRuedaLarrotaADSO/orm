<?php
//index.php (o el nombre de tu archivo de vista)
require_once('../model/User.php');
require_once('../config/config.php');
require_once('../libs/Database.php');
//require_once('../controlador/actualizar.php');

$database   = new Database();
$connection = $database->getConnection();
$userModel = new User($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <form action="../controlador/actualizar.php" method="POST">  
        <?php foreach($actualizar as $key) { ?>
            <label for="" class="form-label" >first name</label>
            <input class="form-control" type="hidden" name="identificador" value="<?= $key['id'] ?>"> 
            <input class="form-control" type="text" name="firstName" value="<?= $key['firs_name'] ?>"> 
            <label for="" class="form-label">last name</label>
            <input class="form-control" type="text" name="lastName" value="<?= $key['last_name'] ?>">
            <label for="" class="form-label">email</label>
            <input class="form-control" type="text" name="email" value="<?= $key['email'] ?>"> 
            <label for="" class="form-label">Document</label>
            <input class="form-control" type="text" name="documento" value="<?= $key['cc'] ?>">
            <div class="mt-5" >
                <input type="submit" name="envio_edit" class="btn btn-danger w-100" >
            </div>
        <?php } ?>
        </form> 
        <div class="text-center mt-2">
                    <a href="../vista/listar.php" class="btn btn-dark text-white w-100" >Volver</a>
                </div>
            </div>
            <!-- Aquí puedes mostrar los datos -->
        </div>
    </div>
</body>
</html>
