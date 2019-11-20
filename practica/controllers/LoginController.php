<?php

class LoginController {
    public function index(){
        //mostrará la introducción del nombre del trabajador
        // echo $_POST["worker"];
        //este lo manda a un -php de views login.php
        require "../practica/views/login.php";
        //echo "estoy en la función index";

    }
    public function mostrar(){
        //mostrará los datos del trabajador
        echo "El trabajador introducido es: ";
        echo $_POST["worker"];
        require "../practica/views/fichar.php";
        //va a la vista fichar y desde allí al metodo fichar entrada o salida de Usuario

    }

}
