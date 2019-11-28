<?php

//primero le digo que va a necesitar este archivo y lo utiliza en el método ficharEntrada()
//require "../practica/models/Currantes.php";
session_start();
require "../practica/models/Currantes2.php";

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
    public function fichar(){
        //hará la función de introducir horas de entrada/salida
        //recoge los datos de fichar.php

        $ent = $_POST["entrada"];
        $sal = $_POST["salida"];

        if($ent>$sal){
            require "../practica/views/fichar.php";
        }else{
                $fich = new Currantes2;
                $fich->fichar($ent,$sal); 
                require "../practica/models/Currantes.php";
            }
        



        //echo "Estoy en la función ficharEntrada() y aquí debería recibir todos los datos";
    }

    public function consultarHoras(){
        //mostrará todas las horas trabajadas
       //require "../practica/views/fichar.php";
        echo "Usuario " . $_SESSION["worker"] . " con uid " . $_SESSION["uid"] . " Trabajo: ";
        echo "<br/>";

        //voy a modelo
        $hora = new Currantes2;

        //traigo resultados
        $r=$hora->horas(); 
        
        //voy a vista a imprimir resultados
        require "../practica/views/horas/horas.php";

    }

    public function consultarSueldo(){
        //mostrará el sueldo acumulado hasta el día presente
        //require "../practica/views/fichar.php";
        echo "en la funcion consultar sueldo";
    }


}



