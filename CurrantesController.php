<?php

//primero le digo que va a necesitar un archivo
require "../practica/models/Personajes.php";

class CurrantesController {
    public function __construct(){
        //este es el constructor de la clase
    }
    public function index(){
        //mostrará la introducción del nombre del trabajador
       // echo $_POST["worker"];
        //este lo manda a un -php de views login.php
        require "../practica/views/login.php";
        echo "estoy en la función index";

    }
    public function mostrar(){
        //mostrará los datos del trabajador
       // echo "wiiiii soy la mejoooo <br/>";
        echo $_POST["worker"];

    }
    public function fichar(){
        //hará la función de introducir horas de entrada/salida
        //recoge los datos de fichar.php
        require "../practica/views/fichar.php";
        echo "en proceso de procesar los datos de fichar";

    }
    public function consultarHoras(){
        //mostrará todas las horas trabajadas
       //require "../practica/views/fichar.php";
        echo"en la funcion consultar horas";
    }

    public function consultarSueldo(){
        //mostrará el sueldo acumulado hasta el día presente
        //require "../practica/views/fichar.php";
        echo "en la funcion consultar sueldo";
    }


}



