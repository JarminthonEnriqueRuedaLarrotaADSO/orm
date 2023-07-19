<?php
require_once __DIR__ . '/../model/User.php';
$pdo = new PDO('mysql:host=localhost;dbname=admin_pdo', 'root', '');

require_once __DIR__ . '/../controlador/actualizar.php';

$usuario = $userModel->mostrarForm();

// Aquí se cargarán las dependencias del controlador también


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center mt-3">Agregar Usuario</h2>
            <div class="col mt-5">
                <form action="../controlador/controlador.php" method="POST">
                    <label for="" class="form-label">first name</label>
                    <input class="form-control" type="text" name="firstName" value="<?= $usuario->getFirstName(); ?>">
                    <label for="" class="form-label">last name</label>
                    <input class="form-control" type="text" name="lastName" value="<?= $usuario->getFirstName(); ?>">
                    <label for="" class="form-label">email</label>
                    <input class="form-control" type="text" name="email" value="<?= $usuario->getFirstName(); ?>">
                    <label for="" class="form-label">Document</label>
                    <input class="form-control" type="text" name="documento" value="<?= $usuario->getFirstName(); ?>">
                    <div class="mt-5">
                        <input type="submit" class=" btn btn-danger w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>