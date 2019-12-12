<?php

namespace App\Controllers;

require "../app/models/Currante.php";
use App\Models\Currante;

class LoginController {

    public function index(){
        //este lo manda a un -php de views login.php
        require "../app/views/login.php";
    }

    public function hacerLogin(){    
        $worker=$_POST["worker"];
        $pass = $_POST["pass"];

        $conexion = new Currante();
        $resultado = $conexion->comprobar($worker,$pass);
        echo $resultado;
    }

    public function registro(){
        $nombre=$_GET["nombre"];
        $clave = $_GET["clave"];

        echo "hola";
        echo $nombre;

        $conexion = new Currante();
        $resultado = $conexion->darDeAlta($nombre,$clave);
    }

    public function mostrarRegistros(){
        $conexion = new Currante();
        $resultado = $conexion->extraerUsuarios();   
    }
    
}
