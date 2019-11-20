<?php

//primero le digo que va a necesitar este archivo y lo utiliza en el método ficharEntrada()
//require "../practica/models/Currantes.php";

class UsuarioController {
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
    public function ficharEntrada(){
        //hará la función de introducir horas de entrada/salida
        //recoge los datos de fichar.php
        require "../practica/models/Currantes.php";
        echo $_POST["entrada"];

        //echo "Estoy en la función ficharEntrada() y aquí debería recibir todos los datos";
    }

    /*public function  ficharSalida(){
        require "../practica/views/fichar.php";
        //echo"me voy a ir yendo para salir";

    }*/
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



