
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover table-dark mt-5">
        <thead>
            <tr>
                <th>first Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>cc</th>
            </tr>
        </thead>
        <tbody>


        <?php foreach ($users as $key) { ?>
            <tr>
                <td><?= $key['firs_name']; ?></td>
                <td><?= $key['last_name']; ?></td>
                <td><?= $key['email']; ?></td>
                <td><?= $key['cc']; ?></td>
            </tr>
        <?php } ?>
    </tbody>    
    </table>
</body>
</html>