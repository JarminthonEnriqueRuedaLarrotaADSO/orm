<?php


class User
{
    private $id;
    private $documento;
    private $lastName;
    private $email;
    private $FirstName;
    protected $db;

    public function User(){
        
    }
    public function __construct(PDO $connection) {
        $this->db = $connection;

    }
//-----------------------------------------------getters and setters------------------------------------

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id = $id;
}
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
        // Verificar si la cedula se repite en el codigo con una consulta 
        $consultaCc = $this->db->prepare("SELECT COUNT(*) FROM users WHERE cc = :cedula");//cuenta el número de filas que cumplen con la condición cc = :cedula (la cédula).
        $consultaCc->bindValue(':cedula', $this->documento);//se le asigna el valor $this->documento a la variable ':cedula' en el bindValue, el cual recibe dos parametros, el primero seria la variable y el segundo el valor
        $consultaCc->execute();// se ejecuta la consulta 
        $cantidad = $consultaCc->fetchColumn();// se cuenta el numero de 
    
        if ($cantidad > 0) {
            // Si las columnas son mayores a 1 significa que esta repetido por lo tanto entra en la condicion y retorna falso, por ende no se ejecuta la linea de codigo guardar
            echo "Error";
            return false;
        } else {            
            //si lo anterior no se cumple significa que no hay ninguna cedula por lo tanot se ejecuta la consulta 
            $stm = $this->db->prepare("INSERT INTO users (firs_name, last_name, email, cc) VALUES (:nom, :apellido, :email, :cedula)");
            //se crea la variable marcadores para ser utilizada, en la consulta por ende se le envia los marcadores 
            $stm->bindValue(':nom', $this->FirstName);
            $stm->bindValue(':apellido', $this->lastName);
            $stm->bindValue(':email', $this->email);
            $stm->bindValue(':cedula', $this->documento);            
            //se ejecuta la consulta y se le envia la variable marcadores 
            $stm->execute();
            return true; //retorna true
        }
    }
    public function Eliminar() {
        $stm = $this->db->prepare("DELETE FROM users WHERE id=:id");
        $stm->bindValue(':id', $this->id);        
        $stm->execute();
        header('Location: ../vista/listar.php');
    }
    public function consulta (){
        $stm = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stm->bindValue(':id',$this->id);
        $stm->execute();
        return $stm->fetchAll();
        
    }
    public function mostrarForm() {
        $stm=$this->db->prepare('UPDATE users SET firs_name = :nom , last_name = :apellido, email= :email, cc = :cedula WHERE id = :id ');
        $stm->bindValue(':nom', $this->FirstName);
        $stm->bindValue(':apellido', $this->lastName);
        $stm->bindValue(':email', $this->email);
        $stm->bindValue(':cedula', $this->documento);
        $stm->bindValue(':id',$this->id);  
        $stm->execute();
        header('Location:../vista/listar.php');
    }   
    

}
