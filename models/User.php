<?php
class User {
    
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $rol;
    private $db; 
    public function __construct() {
		$this->db = Database::connect();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    } 
    public function getName()
    {
        return  $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
        return $this;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $this->db->real_escape_string($lastname);
    } 
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        $this->rol = $rol;
        return $this;
    }
    public function getOneUser()
    {
        $sql = "SELECT * FROM usuarios WHERE id  = {$this->getId()}";
        $user = $this->db->query($sql);
        return $user->fetch_object();
    }
    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getName()}', '{$this->getLastname()}', '{$this->getEmail()}', '{$this->getRol()}');";
        $save = $this->db->query($sql);
        $result = false;
		if($save){
			$result = true;
		}
		return $result;
    }    
    public function login($usuario){
		$result = false;
		$email = $usuario;
	    // Comprobar si existe el usuario
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);
		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();	
			// Verificar la contraseña
			$verify = $usuario->email;			
			if($verify){
				$result = $usuario;
			}
		}
		return $result;
    }
}
?>