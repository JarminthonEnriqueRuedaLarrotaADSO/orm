<?php
// include_once (__DIR__.'controlador/controlador.php');


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
        <?php 
        require_once(dirname(__FILE__).'controlador/controlador.php');
        $users = $userModel->getAll()
        ?>

        <!-- <?php foreach ($users as $key) { ?>
            <tr>
                <td><?= $key['firs_name']; ?></td>
                <td><?= $key['last_name']; ?></td>
                <td><?= $key['email']; ?></td>
                <td><?= $key['cc']; ?></td>
            </tr>
        <?php } ?> -->
    </tbody>
    
    </table>                
</body>
</html>