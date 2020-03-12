<?php
class Category {
    private $id;
    private $name;
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
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);

        return $this;
    }
    public function getCategory(){
        $sql= "SELECT * FROM category ORDER BY id DESC;";
        $categorias = $this->db->query($sql);
		return $categorias;
    }
    public function getOneCategory(){
        $sql= "SELECT * FROM category WHERE id  = {$this->getId()};";
        $categoria = $this->db->query($sql);
		return $categoria->fetch_object();
    }
    public function saveCategory()
    {
        $sql ="INSERT INTO category VALUES(NULL, '{$this->getName()}');";
        var_dump($sql);
        $save = $this->db->query($sql);
        var_dump($save);
        $result = false;
		if($save){
			$result = true;
		}
		return $result;
    }
    public function deleteCategory(){
        $sql = "DELETE FROM category WHERE id={$this->id}";
        $delete = $this->db->query($sql);
        $result = false;
		if($delete){
			$result = true;
		}
		return $result;
    }
}
?>