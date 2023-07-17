<?php

include_once(__DIR__."/controlador/controlador.php");

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
                <form action="model/Book.php">
                <label for="" class="form-label" >first name</label>
                <input class="form-control" type="text" name="firstName">
                <label for="" class="form-label">last name</label>
                <input class="form-control" type="text" name="lastName">
                <label for="" class="form-label">email</label>
                <input class="form-control" type="text" name="email" >
                <div class="mt-5" >
                    <input type="submit" class=" btn btn-danger w-100" >
                </div>
                </form>
            
            
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
            </div>
        </div>
    </div>



</body>
</html>