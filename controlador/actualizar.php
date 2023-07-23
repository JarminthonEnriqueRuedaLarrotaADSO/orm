<?php
require_once('../model/User.php');
require_once('../config/config.php');
require_once('../libs/Database.php');

$database   = new Database();
$connection = $database->getConnection();
$userModel = new User($connection);

$dato = $_POST['identificador'];



$userModel->setId($dato);    
$actualizar = $userModel->consulta(); 
include_once('../vista/editarFila.php');

if (isset($_POST['envio_edit'])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $documento = $_POST["documento"];
    $id = $_POST["identificador"];
    //pasar datos a los metodos de acceso
    $userModel->setId($id);
    $userModel->setFirstName($firstName);
    $userModel->setLastName($lastName);
    $userModel->setEmail($email);
    $userModel->setCc($documento);
    $most = $userModel->mostrarForm();
}

?>
