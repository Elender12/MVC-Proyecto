<?php
session_start();
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
        //comprobar caracteres raros y asignar
        $_SESSION["worker"] = $worker;

        echo "El trabajador introducido es: ";
        echo $_SESSION["worker"];


        //comprobamos si es correcto el login
        //si es correcto

        //creamos variable sesion con id usuario

        $_SESSION["uid"] = 1;
        
        require "../practica/views/fichar.php";

        //ob_end_flush();
        //va a la vista fichar y desde allí al metodo fichar entrada o salida de Usuario
        // si no es correcto
        // require "../practica/views/login.php";

    }

}
