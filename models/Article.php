<?php
class Article
{

    private $id;
    private $usuario_id;
    private $categoria_id;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $image;
    private $db;
    public function __construct()
    {
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
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $this->db->real_escape_string($usuario_id);
        // return $this;
    }
    public function getCategoria_id()
    {
        return $this->categoria_id;
    }
    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $this->db->real_escape_string($categoria_id);
        // return $this;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $this->db->real_escape_string($titulo);
        // return $this;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function getDb()
    {
        return $this->db;
    }
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }
    public function getArticle()
    {
        //Conseguiremos las entradas como category
        $sql = "SELECT e.*, c.name AS 'categoriaName' FROM article e INNER JOIN category c ON e.categoria_id = c.id ORDER BY e.id DESC LIMIT 8";
        // var_dump($sql);
        $article = $this->db->query($sql);
        return $article;
    }
    public function getOneArticle()
    {
        $sql = "SELECT * FROM article WHERE id  = {$this->getId()}";
        $article = $this->db->query($sql);
        return $article->fetch_object();
    }
    //guardar articulos
    public function saveArticle()
    {
        $sql = "INSERT INTO article VALUES(NULL,{$this->getUsuario_id()} ,{$this->getCategoria_id()} ,'{$this->getTitulo()}','{$this->getDescripcion()}', CURDATE(), '{$this->getImage()}');";
        var_dump($sql);
        $save = $this->db->query($sql);
        var_dump($save);
        echo $this->db->error;
        die();
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function edit()
    {
        $sql = "UPDATE article SET titulo='{$this->getTitulo()}', descripcion='{$this->getDescripcion()}', categoria_id={$this->getCategoria_id()}  ";

        if ($this->getImage() != null) {
            $sql .= ", image='{$this->getImage()}'";
        }

        $sql .= " WHERE id={$this->id};";

        var_dump($sql);
        $save = $this->db->query($sql);
        var_dump($save);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function deleteArticleModel()
    {
        $sql = "DELETE FROM article WHERE id={$this->id}";
        $delete = $this->db->query($sql);
        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }
}
