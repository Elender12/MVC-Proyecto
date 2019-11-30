<?php
namespace App\Controllers;

class HomeController{
    public function __construct() { }
    
    public function index()
    {
        require "../app/views/index.php";
    }
}

?>