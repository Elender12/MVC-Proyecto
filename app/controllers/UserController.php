<?php
class UserController{
    public function __construct(){
        echo "esto es el constructor de HomeController";
    }
    public function index(){
        require "../app/models/Currante.php";
    }
}
