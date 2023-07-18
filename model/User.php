<?php


class User
{
    private $documento;
    private $lastName;
    private $email;
    private $FirstName;
    protected $db;

    public function __construct(PDO $connection) {
        $this->db = $connection;

    }
//-----------------------------------------------getters and setters------------------------------------
public function getFirstName (){
    return $this->lastName;
    }
    public function getLastName(){
    return $this->lastName;
    }
    public function getEmail(){
    return $this->email;
    }
    public function getCc(){
        return $this->documento;
    }
    public function setFirstName($FirstName){
        $this->FirstName = $FirstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
        
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCc($documento){
        $this->documento = $documento;
    }

    //----------Mostrar Datos-----------
    function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM users");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function insertar() {
        // Verificar si el email ya existe en la base de datos
        $consultaCc = $this->db->prepare("SELECT COUNT(*) FROM users WHERE cc = :cedula");
        $consultaCc->bindValue(':cedula', $this->documento);
        $consultaCc->execute();
        $cantidad = $consultaCc->fetchColumn();
    
        if ($cantidad > 0) {
            // Si el email ya existe, retornar false o lanzar un error
            return false;
        } else {
            // Si el email no existe, realizar la inserción en la base de datos
            $stm = $this->db->prepare("INSERT INTO users (firs_name, last_name, email, cc) VALUES (:nom, :apellido, :email, :cedula)");
            $marcadores = [
                ":nom" => $this->FirstName,
                ":apellido" => $this->lastName,
                ":email" => $this->email,
                ":cedula" => $this->documento
            ];
            $stm->execute($marcadores);
            return true;
        }
    }
    
    // public function insertar() {
    //     $stm = $this->db->prepare("INSERT INTO users (firs_name, last_name, email) VALUES (:nom, :apellido, :email)");
    //     $marcadores = [
    //         ":nom" => $this->FirstName,
    //         ":apellido" => $this->lastName,
    //         ":email" => $this->email
    //     ];
    //     $stm->execute($marcadores);
    // }
    
}
