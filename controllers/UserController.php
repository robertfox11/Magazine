<?php
require_once 'models/User.php';
class UserController
{
    public function index()
    {
        require 'views/main.php';
    }
    public function register()
    {
        require 'views/user/register.php';
    }
    
    public function saveUser()
    {
        //recoger datos
        if (isset($_POST)) {
            //condicion si en caso el nombre o variable existe validando
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            if ($name && $lastname && $email) {
                $usuario = new User();
                $usuario->setName($name);
                $usuario->setLastname($lastname);
                $usuario->setEmail($email);
                $save = $usuario->save();
                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
            //si llega fallo
        }
        // header("Location: /index.php",TRUE,301);
        // header("Location:" . URL . "user/register");
    }
    public function login(){
        #comprobar si existe el usuario
        if (isset($_POST)) {
            # Identificar el usuario
            $user = new User();
            $identity =$user->login($_POST['email']);
            //mantener usuario identificado
            if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
				//identificacion de administrador
				if($identity->rol == 'admin'){
					$_SESSION['admin'] = true;
				}
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
            }
            var_dump(header("Location:".URL."index"));
            // die()                                                                          
        }
        // header("Location:".URL);
    }
    public function logout(){
        //comprobaremos si existe
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        //administrardor
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        header("Location:".URL);
    }
}
