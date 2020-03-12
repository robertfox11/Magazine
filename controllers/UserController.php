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
                // $usuario->setPassword($password);
                var_dump(($usuario));
                $save = $usuario->save();
                var_dump(($save));
                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
            // var_dump(($usuario));
        } else {
            $_SESSION['register'] = "failed";
            //si llega fallo
        }
        // header("Location: /index.php",TRUE,301);
        // header("Location:" . URL . "user/register");
    }
}
?>