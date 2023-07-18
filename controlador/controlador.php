<?php
// Indicamos que trabajaremos en directorio que estamos situados (__DIR__)
//Incluimos el fichero de configuración 
require_once('../config/config.php');
//Incluimos la clase conexion a la base de datos
require_once('../libs/Database.php');
// Incluimos la clase usuario
require_once('../model/User.php');
// Incluimos la clase libro
require_once('../model/Book.php');

// require_once('./controlador/controlador.php');
//Creamos la instancia de la clase conexion a la base de datos
$database   = new Database();
//Llamamos el metodo conexion que es quien nos retorna la conexion a la base de datos
$connection = $database->getConnection();
//Creamos la instancia del modelo usuario y pasamos la conexion a la base de datos
$userModel = new User($connection);
//Creamos la instancia del modelo libro y le pasamos la conexion a la base de datos
$bookModel = new Book($connection);
/**
 * Listamos todos los usuarios
 */

print_r($_POST);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Procesa los datos enviados desde el formulario
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $documento = $_POST["documento"];


    $userModel->setCc($documento);
    $userModel->setFirstName($firstName);
    $userModel->setLastName($lastName);
    $userModel->setEmail($email);

}

$users = $userModel->getAll();

$userModel->insertar();
/**
 * Listamos los libros
 */
$books = $bookModel->getAll();
/**
 * Listamos los libros relacionados con un autor
 */
$booksUser = $bookModel->getRel(1);
/**
 * Listamos un libro filtrado por su identificador primario
 */
$book = $bookModel->getById(1);


header('Location:../index.php');

 json_encode($users);