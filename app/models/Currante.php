<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once '../core/Model.php';

class Currante extends Model{

    public function __construct(){ }

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

            // Ojo cuidao! Esta parte no la esta haciendo bien
            ob_get_clean();
            setcookie("IdentificadorCurrante", $idCurrante);
            setcookie("NombreCurrante", $nombreCurrante);

            echo "<p>Login correcto!.</p>";
            
        } catch (Exception $e) {
            echo "<p>Ha ocurrido un error al realizar el login.</p>";
        }

    }

    // Funcion privada para que no se pueda invocar desde fuera. Se encarga de crear las cookies.
    private function GenerarCookies($idCurrante, $nombreCurrante){
    }

    public function fichar($ent,$sal){

        $stmt = $this->conex->prepare("INSERT INTO Imputaciones (UsuarioId, HoraEntrada, HoraSalida) VALUES (?,?,?)");
        $stmt->bind_param("sss", $id,$he,$hs );
        $id=$_SESSION["uid"];
        $he=$ent;
        $hs=$sal;
        $stmt->execute();

        
        // mysqli_close($this->conex);

        


    }

    public function horas(){

        $stmt = $this->conex->prepare("SELECT Dia, HoraEntrada, HoraSalida FROM Imputaciones WHERE UsuarioId LIKE ?");
        $stmt->bind_param("s", $uid);
        $uid = $_SESSION["uid"];
        $stmt->execute();

        $result =array(array());
        $i=0;
        $stmt->bind_result($dia, $hentrada, $hsalida);
        while($stmt->fetch()){
            //echo "Dia " . $dia . " de " . $hentrada . " hasta " . $hsalida . "<br/>";
            
            $result[$i][0]=$dia;
            $result[$i][1]=$hentrada;
            $result[$i][2]=$hsalida;

            $i++;
        }
        //mysqli_close($this->conex);

        return $result;

        /*$result = $this->conex->query($query);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                echo $row["Dia"];
            }
        }*/

        
        

    }

}









?>