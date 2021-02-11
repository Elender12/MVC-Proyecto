<?php

require "../practicagrupal/models/Currantes.php";

class LoginController {

    

    public function index()
    {
        //mostrara la introduccion de el nombre para buscar
               
        require "../practicagrupal/views/login.php";  

    }

    public function mostrar()
    {

        //mostrara el array del usuario elegido
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        //posname y pospass son para evitar sql inyection en el siguiente if
        $posname = strpos($name, "'");
        $pospass = strpos($pass, "'");

        //ir al modelo comprobar si es correcto

        if($posname==false &&  $posspass==false /*&& existe el usuario*/){
            require ("../practicagrupal/views/show.php");
        }else{
            require "../practicagrupal/views/login.php"; 
        }
        
    }

    public function fichar()
    {
        //introducir horas trabajadas

    }

    public function consultarHoras()
    {
        //mostrara las horas trabajadas
        

    }

    public function consultarSueldo()
    {
        //mostrara el sueldo
    }

}