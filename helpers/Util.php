<?php
class Util{
public static function deleteSession($name){
		if(isset($_SESSION[$name])){
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		return $name;
	}
//function to admin 
	public static function isAdmin(){
		if(!isset($_SESSION['admin'])){
			header("Location:".URL);
		}else{
			return true;
		}
	}
	public static function showCategory(){
		require_once 'models/Category.php'; 
		$category = new Category();
		$categorys = $category->getCategory();
		return $categorys;
        
	}
	public static function showArticle(){
		require_once 'models/Article.php'; 
		$article = new Article();
		$article = $article->getArticle();
		return $article;
        
	}
	public static function getUser(){
		require_once 'models/User.php'; 
		$user = new User();
		$users = $user->getOneUser();
		return $users;
        
	}
}
?>