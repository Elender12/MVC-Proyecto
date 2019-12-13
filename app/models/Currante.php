<?php
namespace App\Models;
ob_start();

use PDO;
use DateTime;
use Core\Model;


require_once '../core/Model.php';

class Currante extends Model{

    public function __construct(){ }


    // Función que extrae los usuarios de la bd y los devuelve para ser mostrados por pantalla
    public function extraerUsuarios(){
        $db = Currante::db();
        $query = "SELECT * FROM LoginUsuarios";
        $statement = $db->query($query);        
        $usuarios = $statement->fetchAll(PDO::FETCH_CLASS, Currante::class);
        return $usuarios;
    }

    // Realizamos una consulta a la BD para comprobar que las credenciales son correctas
    // En caso de que lo sean generar una cookie con el id usuario y otra con el nombre
    public function comprobar($worker,$pass){
        
        try {
          
            $db = Currante::db();
            $query = "SELECT Id, Nombre FROM LoginUsuarios Where Nombre like'".$worker."' and Clave like'".$pass."'";

            $statement = $db->query($query);

            $datos = $statement->fetchAll(PDO::FETCH_CLASS, Currante::class);
            
            // Si no devuelve datos la consulta paramos el flujo mostrando un error
            if($datos == null)
            {
                echo "<p>Credenciales incorrectas.</p>";
                return;
            }

            $identificadorCurrante = $datos[0]->Id;
            $nombreCurrante = $datos[0]->Nombre;

            echo "<p>Login correcto!.</p>";
            
        } catch (Exception $e) {
            echo "<p>Ha ocurrido un error al realizar el login.</p>";
        }
    }

    public static function find($id)
    {
        $db = Currante::db();
        $stmt = $db->prepare('SELECT Id FROM LoginUsuarios WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Currante::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    public function eliminarRegistro(){
        $db = Currante::db();
        $stmt = $db->prepare("DELETE FROM LoginUsuarios WHERE Id = :Id");       
        $stmt->bindValue(':Id', $this->Id); 
        $stmt->execute();  
    }

    public function darDeAlta($nombre, $clave){
        $db = Currante::db();
        $stmt = $db->prepare("INSERT INTO LoginUsuarios (Nombre, Clave) VALUES ('".$nombre."', '".$clave."')");   
        $stmt->execute($sql); 
    }
}

ob_end_flush();
?>