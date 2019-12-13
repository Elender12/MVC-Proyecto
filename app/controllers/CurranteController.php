<?php
namespace App\Controllers;
//primero le digo que va a necesitar este archivo y lo utiliza en el método ficharEntrada()
session_start();
require "../app/models/Currante.php";
use App\Models\Currante;

class CurranteController {
    public function __construct(){
        //este es el constructor de la clase
    }
    public function index(){
        //mostrará la introducción del nombre del trabajador
        // echo $_POST["worker"];
        //este lo manda a un -php de views login.php
        require "../app/views/administracion.php";
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

        $ent = $_POST["entrada"];
        $sal = $_POST["salida"];

        if($ent>$sal){
            require "../app/views/fichar.php";
        }else{
            $fich = new Currante;
            $fich->fichar($ent,$sal); 
            require "../app/models/Currante.php";
        }
        //echo "Estoy en la función ficharEntrada() y aquí debería recibir todos los datos";
    }

    public function consultarHoras(){
        //mostrará todas las horas trabajadas
        //require "../practica/views/fichar.php";
        echo "Usuario " . $_SESSION["worker"] . " con uid " . $_SESSION["uid"] . " Trabajo: ";
        echo "<br/>";

        //voy a modelo
        $hora = new Currante;

        //traigo resultados
        $r=$hora->horas(); 
        
        //voy a vista a imprimir resultados
        require "../app/views/horas/horas.php";

    }

    public function consultarSueldo(){
        //mostrará el sueldo acumulado hasta el día presente
        //require "../practica/views/fichar.php";
        echo "en la funcion consultar sueldo";
    }


}



