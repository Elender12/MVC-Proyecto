<?php
//";
class UserController{
    public function __construct(){
        echo "esto es el constructor de HomeController";
    }
    public function index(){
        require "../practica/models/Users.php";
    }
}
