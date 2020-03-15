<?php
require_once 'models/Article.php';
class ArticleController
{

    public function index()
    {
        $comment = new Article();
        $comments = $comment->getArticle();
        require_once 'views/article/main.php';
    }
    public function entry()
    {
        // Util::isAdmin();
        require_once 'views/article/entry.php';
    }
    public function saveArticleController()
    {
        //usuario guardar article
        Util::isAdmin();
        if (isset($_POST)) {
            $usuario_id = $_SESSION['identity']->id;
            $categoria_id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $image = isset($_POST['image']) ? $_POST['image'] : false;
            // Guardar la categoria en bd
            if ($categoria_id && $titulo && $descripcion) {
                $article = new Article();
                $article->setTitulo($titulo);
                $article->setCategoria_id($categoria_id);
                $article->setUsuario_id($usuario_id);
                $article->setDescripcion($descripcion);
                // if(isset($_FILES['image'])){
                $file = $_FILES['image'];
                $filename = $file['name'];
                $mimetype = $file['type'];
                if ($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {
                    var_dump($file);
                    if (!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }
                    $article->setImage($filename);
                    move_uploaded_file($file['tmp_name'], 'uploads/images/' . $filename);
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $article->setId($id);

                    $save = $article->edit();
                } else {
                    $save = $article->saveArticle();
                }


                if ($save) {
                    $_SESSION['article'] = "complete";
                } else {
                    $_SESSION['article'] = "failed";
                }
            } else {
                $_SESSION['article'] = "failed";
            }
        } else {
            $_SESSION['article'] = "failed";
        }
        header("Location:" . URL);
    }
    public function deleteArticle()
    {
        Util::isAdmin();
        $id = $_GET['id'];
        if (isset($_GET['id'])) {
            $delete = new Article();
            $delete->setId($id);
            $deletes = $delete->deleteArticleModel();
            if ($deletes) {
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }
        } else {
            $_SESSION['delete'] = 'failed';
        }
        header('Location:' . URL . 'article/main');
    }
    public function updateArtcle()
    {
        Util::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $edit = true;
            $update = new Article();
            $update->setId($id);
            //validation
            $upd = $update->getOneArticle();
        }
        require_once 'views/article/entry.php';
    }
}
