<?php
require_once 'models/Article.php';
class ArticleController{
    
    public function index(){
        $comment = new Article();
        $comments = $comment->getArticle();
        require_once 'views/article/main.php';
    }
    // public function entry(){
    //     // Util::isAdmin();
    //     require_once 'views/comments/entry.php';
    // }
    // public function saveComments(){
    //     //usuario guardar Comments
    //     // Util::isAdmin();
    //     if (isset($_SESSION['identity'])){
    //         $usuario_id = $_SESSION['identity']->id;
    //         $categoria_id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
    //         $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
    //         $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;   
    //         // Guardar la categoria en bd
    //         if ($categoria_id && $titulo && $descripcion && $usuario_id ) {
    //             $comments = new Comments();
    //             $comments->setUsuario_id($usuario_id);
    //             $comments->setCategoria_id($categoria_id);
    //             $comments->setTitulo($titulo);
    //             $comments->setDescripcion($descripcion);
    //             $save = $comments->saveComment();
    //             if ($save) {
    //                 $_SESSION['comment'] ="complete";
    //             }else{
    //                 $_SESSION['comment']="failed";
    //             }
    //         }else{
    //             $_SESSION['comment']="failed";
    //         }
    //     }else{
    //         $_SESSION['comment'] = "failed";
    //     }
    //     header("Location:".URL);
    // }
    // public function deleteComments(){
    //     Util::isAdmin();
    //     $id = $_GET['id'];
    //     if (isset($_GET['id'])) {
    //         $delete = new Comments();
    //         $delete->setId($id);
    //         $deletes = $delete->deleteComment();
    //         if ($deletes) {
    //             $_SESSION['delete'] = 'complete';
    //         }else{
    //             $_SESSION['delete'] ='failed';
    //         }
    //     }else{
    //         $_SESSION['delete'] ='failed';
    //     }
    //     header('Location:'.URL.'comments/index');
    // }
    // public function updateComments(){
    //     Util::isAdmin();
    //     $edit = true;
    //     //validation
    //     if (isset($_GET['id'])) {
            
    //     }
    //     require_once 'views/comments/entry.php';
    // }
}
?>