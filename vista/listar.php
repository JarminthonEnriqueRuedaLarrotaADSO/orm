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
            <div class="col">

                <table class="table table-hover  mt-5">
                    <thead>
                        <tr class="text-center" >
                            <th>first Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>cc</th>
                            <td>Borrar</td>
                            <td>Editar</td>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $key) { ?>
                        <tr class="text-center" >
                            <td><?= $key['firs_name']; ?></td>
                            <td><?= $key['last_name']; ?></td>
                            <td><?= $key['email']; ?></td>
                            <td><?= $key['cc']; ?></td>
                            <td>
                                <form action="../controlador/eliminar.php" method="POST">
                                    <input type="hidden" name="identificador" value="<?php echo $key['id'] ?>">
                                    <button class="btn btn-danger" type="submit" name="eliminar" >Eliminar</button> 
                                </form>
                            </td>
                            <td>
                                <form action="../controlador/actualizar.php" method="POST">
                                    <input  type="hidden" name="identificador" value="<?php echo $key['id'] ?>">                                
                                    <button class="btn btn-primary" type="submit" name="editar" >Editar</button> 
                                </form>
                            </td> 
                        </tr>
                    <?php } ?>
                </tbody>            
                </table>                                
                </div>        
                <div class="text-center mt-2">
                    <a href="index.php" class="btn btn-dark text-white w-50" >Volver</a>
                </div>                      
            </div>
        </div>

</body>
</html>