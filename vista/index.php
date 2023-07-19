<?php
require_once __DIR__ . '/../model/User.php';
$pdo = new PDO('mysql:host=localhost;dbname=admin_pdo', 'root', '');

// Aquí se cargarán las dependencias del controlador también

$usuario = new User($pdo);
$users = $usuario->getAll();
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
<div class="container">
        <div class="row">
            <h2 class="text-center mt-3" >Agregar Usuario</h2>
            <div class="col mt-5">                                
                <form  action="../controlador/controlador.php"  method="POST">
                <label for="" class="form-label" >first name</label>
                <input class="form-control" type="text" name="firstName">                
                <label for="" class="form-label">last name</label>
                <input class="form-control" type="text" name="lastName">
                <label for="" class="form-label">email</label>
                <input class="form-control" type="text" name="email" >
                <label for="" class="form-label">Document</label>
                <input class="form-control" type="text" name="documento" >
                <div class="mt-5" >
                    <input type="submit" name="enviar" class=" btn btn-danger w-100" >
                </div>
                </form>                        
            <table class="table table-hover table-dark mt-5">
                <thead>
                    <tr>
                        <th>first Name</th>
                        <th>Last Name</th>
                        <th>email</th>
                        <th>cc</th>
                        <td>pa Borrar</td>
                    
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $key) { ?>
                    <tr>
                        <td><?= $key['firs_name']; ?></td>
                        <td><?= $key['last_name']; ?></td>
                        <td><?= $key['email']; ?></td>
                        <td><?= $key['cc']; ?></td>
                        <td>
                            <form action="../controlador/eliminar       .php" method="POST">
                                <input type="hidden" name="identificador" value="<?php echo $key['id'] ?>">
                                <button type="submit" name="eliminar" >Eliminar</button> 
                                <button type="submit" name="editar" >Editar</button> 
                            </form>
                        </td>
                        <!-- <td>
                        <form action="../vista/vista1.php" method="POST">
                                <input type="hidden" name="identificador" value="<?php echo $key['id'] ?>">
                            </form>
                        </td> -->
                    </tr>
                <?php } ?>
            </tbody>
            
            </table>                
            </div>
        </div>
    </div>
</body>
</html>