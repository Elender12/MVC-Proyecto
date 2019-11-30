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

        $con = new Currante();
        $bol = $con->comprobar($worker,$pass);
        echo $bol;

    }

    public function mostrar(){
        echo "buenas tardes";
        //mostrará los datos del trabajador
        $worker=$_POST["worker"];
        $pass = $_POST["pass"];

        $con = new Currante;

        


        //$bol = $con->comprobar($worker,$pass);

        //if($bol==TRUE){

        //comprobar caracteres raros y asignar
        //$_SESSION["worker"] = $worker;

        //echo "El trabajador introducido es: ";
        //echo $_SESSION["worker"];

        //comprobamos si es correcto el login
        //creamos variable sesion con id usuario

        //$_SESSION["uid"] = $_POST["pass"];
        
        //require "../practica/views/fichar.php";

        //}else{
        //ob_end_flush();
        //va a la vista fichar y desde allí al metodo fichar entrada o salida de Usuario
        // si no es correcto
        //require "../practica/views/login.php";
        //}
    }

}
