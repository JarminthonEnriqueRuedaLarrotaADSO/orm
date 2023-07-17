<?php

class Book
{
    protected $db;

    public function __construct(
        PDO $connection
    ) {
        $this->db = $connection;
    }

    function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM books");
        $stm->execute();
        return $stm->fetchAll();
    }

    function getById($id) {
        $stm = $this->db->prepare("SELECT * FROM books WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();        

    }

    function getRel($id)
    {
        $stm = $this->db->prepare("SELECT * FROM books INNER JOIN users ON books.user_id = users.id WHERE users.id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetchAll();
    }    

//     <?php
// class Modelo{
//     private $Modelo;
//     private $db;
//     public function __construct(){
//         $this->Modelo = array();
//         $this->db=new PDO('mysql:host=localhost;dbname=mvc',"root","");
//     }

    // public function insertar($tabla, $data){
    //     $consulta="insert into ".$tabla." values(null,". $data .")";
    //     $resultado=$this->db->query($consulta);
    //     if ($resultado) {
    //         return true;
    //     }else {
    //         return false;
    //     }
    //  }
//     public function mostrar($tabla,$condicion){
//         $consul="select * from ".$tabla." where ".$condicion.";";
//             $resu=$this->db->query($consul);
//             while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
//                 $this->personas[]=$filas;
//             }
//             return $this->personas;
//         } 
//     public function actualizar($tabla, $data, $condicion){       
//         $consulta="update ".$tabla." set ". $data ." where ".$condicion;
//         $resultado=$this->db->query($consulta);
//         if ($resultado) {
//             return true;
//         }else {
//             return false;
//         }
//      }
//     public function eliminar($tabla, $condicion){
//         $eli="delete from ".$tabla." where ".$condicion;
//         $res=$this->db->query($eli);
//         if ($res) {
//             return true; 
//         }else {
//             return false;
//         }
//     }
// }
}
