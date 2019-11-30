<?php


class Currante {
    public function __construct(){ }

    public function comprobar($worker,$pass){
        $bool=FALSE;
        $c=0;
        $stmt = $this->conex->prepare("SELECT * FROM LoginUsuarios WHERE Id=? AND Nombre LIKE ?");
        $stmt->bind_param("ss", $p1,$w1 );
        $p1=$pass;
        $w1=$worker;
        $stmt->execute();
        $stmt->bind_result($dia, $hentrada, $hsalida);

        while($stmt->fetch()){
            $c++;
        }
        if($c==1){
            $bool=TRUE;
        }
        mysqli_close($this->conex);

        return $bool;


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