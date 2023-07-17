<?php
// Indicamos que trabajaremos en directorio que estamos situados (__DIR__)
//Incluimos el fichero de configuración 
require_once('./config/config.php');
//Incluimos la clase conexion a la base de datos
require_once('./libs/Database.php');
// Incluimos la clase usuario
require_once('./model/User.php');
// Incluimos la clase libro
require_once('./model/Book.php');

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
$user = new User;

$user->setEmail($_POST['setFirstName']);
$user->setEmail(['setLastName']);
$user->setEmail(['setEmail']);
$user->setEmail(['setCc']);

$users = $userModel->getAll();

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




 json_encode($users);