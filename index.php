<?php
session_start();
require_once 'autoload.php';
require_once 'config/config.php';
require_once 'config/DataBase.php';
// require_once 'helpers/Util.php';
require_once 'views/layout/header.php';
require_once 'views/layout/main.php';

function show_error(){
	$error = new errorController();
	$error->index();
}

if(isset($_GET['controller'])){
	$nameController = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nameController = controller_default;
	
}else{
	show_error();
	exit();
}

if(class_exists($nameController)){	
	$controller = new $nameController();
	
	if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
		$action = $_GET['action'];
		$controller->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controller->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}

require_once 'views/layout/footer.php';

?>