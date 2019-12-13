<?php
namespace App\Controllers;
ob_start();

require "../app/models/Currante.php";
use App\Models\Currante;

class AdministracionController {

    public function index(){
        require "../app/views/administracion.php";
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
        $conexion = new Currante();
        $resultado = $conexion->darDeAlta($nombre,$clave);
    }

    public function mostrarRegistros(){
        $usuarios = Currante::extraerUsuarios();
        require "../app/views/listadousuarios.php";
    }
  
    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $usuario = Currante::find($id);
        $usuario->eliminarRegistro();
    }
}

ob_end_flush();
?>