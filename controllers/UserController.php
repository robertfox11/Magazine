<?php
class UserController{
    public function index(){
        require 'views/main.php';
    }
    public function register(){
        require 'views/user/register.php';
    }
}