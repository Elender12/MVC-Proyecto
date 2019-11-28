<?php
session_start();
require "../practica/models/Currantes2.php";

class LoginController {
    public function index(){
        //mostrará la introducción del nombre del trabajador
        // echo $_POST["worker"];
        //este lo manda a un -php de views login.php
        require "../practica/views/login.php";
        //echo "estoy en la función index";

    }
    public function mostrar(){
        
        //ob_start();
        //mostrará los datos del trabajador
        $worker=$_POST["worker"];
        $pass = $_POST["pass"];

        $con = new Currantes2;
        $bol = $con->comprobar($worker,$pass);

        if($bol==TRUE){

        //comprobar caracteres raros y asignar
        $_SESSION["worker"] = $worker;

        echo "El trabajador introducido es: ";
        echo $_SESSION["worker"];

        //comprobamos si es correcto el login
        //si es correcto

        //creamos variable sesion con id usuario

        $_SESSION["uid"] = $_POST["pass"];
        
        require "../practica/views/fichar.php";
        }else{
        //ob_end_flush();
        //va a la vista fichar y desde allí al metodo fichar entrada o salida de Usuario
        // si no es correcto
        require "../practica/views/login.php";
        }
    }

}
