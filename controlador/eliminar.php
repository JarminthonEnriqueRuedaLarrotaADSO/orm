<?php

// print_r($_POST);

require_once('../model/User.php');

require_once('../config/config.php');
//Incluimos la clase conexion a la base de datos
require_once('../libs/Database.php');

$database   = new Database();
//Llamamos el metodo conexion que es quien nos retorna la conexion a la base de datos
$connection = $database->getConnection();
//Creamos la instancia del modelo usuario y pasamos la conexion a la base de datos
$userModel = new User($connection);



if (isset($_POST['eliminar'])) {
    $dato = $_POST['identificador'];
    echo $_POST['identificador'];
    $userModel->setId($dato);
    $eliminar = $userModel->Eliminar();
    
}



