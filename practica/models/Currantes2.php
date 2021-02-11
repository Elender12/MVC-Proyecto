<?php

class Currantes2 {
    public function __construct(){
        //este es el constructor de la clase inicia conexion base datos
        $servername = "db";
        $username = "root";
        $password = "password";
        $dbname = "empresa_servidor";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conex = $conn;
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