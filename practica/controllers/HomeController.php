<?php
class HomeController{
    public function __construct()
    {
        echo "en el HomeController<br>";
    }
    public function index()
    {
        echo "en el index de HomeController en la carpeta practica <br>";
        require "../practica/views/index.php";
    }
}

?>