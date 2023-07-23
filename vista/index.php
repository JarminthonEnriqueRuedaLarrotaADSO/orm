<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Document</title>
        <script src="../script/main.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="row">            
            <h2 class="text-center mt-3" >Agregar Usuario</h2>
            <div class="col mt-5">                                
                <form id="form" action="../controlador/controlador.php"  method="POST">                    
                    <label for="" class="form-label" >first name</label>
                    <input class="form-control" type="text" name="firstName" id="firstName" value="">                
                    <label for="" class="form-label">last name</label>
                    <input class="form-control" type="text" name="lastName" id="lastName">
                    <label for="" class="form-label">email</label>
                    <input class="form-control" type="text" name="email" id="email" >
                    <label for="" class="form-label">Document</label>
                    <input class="form-control" type="text" name="documento" id="documento"  >
                    <div class="mt-5 d-flex" >
                        <input type="submit" id="enviar" name="enviar" class=" btn btn-danger w-75" >
                        <a href="listar.php" class="btn btn-primary ms-2 w-25" >Ver Lista</a>
                    </div>
                </form>                                        
            </div>
        </div>
    </div>
</body>
</html>