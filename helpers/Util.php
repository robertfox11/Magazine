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
	// public static function showComments(){
	// 	require_once 'models/Comments.php'; 
	// 	$comment = new Comments();
	// 	$comments = $comment->getComments();
	// 	return $comments;
        
	// }
}
?>