<?php 
require_once 'models/Category.php';
class CategoryController{
    public function index(){
        Util::isAdmin();
        $category = new Category();
        $categorys = $category->getCategory();
        // var_dump($categorys);
        require_once 'views/category/index.php';
    }
    public function entry(){
        Util::isAdmin();
        require_once 'views/category/entry.php';
    }
    public function saveCategory(){
        //usuario guardar category
        Util::isAdmin();
        if(isset($_POST) && isset($_POST['name'])){
			// Guardar la categoria en bd
			$categoria = new Category();
            $categoria->setName($_POST['name']);
            var_dump($categoria);
			$save = $categoria->saveCategory();	
		}
        header("Location:".URL."category/index");
    }
    public function updateCategory(){
        Util::isAdmin();
        //validation
        if (isset($_GET['id'])) {
            $id= $_GET['id'];
            $edit = true;
            $update = new Category();
            $update->setId($id);
            $upd =$update->getOneCategory();
        }
        require_once  'views/category/entry.php';
    }
    public function deleteCategory(){
        Util::isAdmin();
        $id = $_GET['id'];
        if (isset($_GET['id'])) {
            $delete = new Category();
            $delete->setId($id);
            $deletes = $delete->deleteCategory();
            if ($deletes) {
                $_SESSION['delete'] = 'complete';
            }else{
                $_SESSION['delete'] ='failed';
            }
        }else{
            $_SESSION['delete'] ='failed';
        }
        header('Location:'.URL.'category/index');
    }
}
?>