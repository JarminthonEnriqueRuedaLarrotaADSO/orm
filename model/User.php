<?php


class User
{
    private $FirstName;
    protected $db;

    public function __construct(PDO $connection) {
        $this->db = $connection;

    }
//-----------------------------------------------getters and setters------------------------------------
public function getFirstName (){

    }
    public function getLastName(){


    }
    public function getEmail(){


    }
    public function getCc(){


    }
    public function setFirstName(){

    }
    public function setLastName(){

    }
    public function setEmail(){

    }
    public function setCc(){

    }

    //----------Mostrar Datos-----------
    function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM users");
        $stm->execute();
        return $stm->fetchAll();
    }
    function agregar(){


    }
}
