<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "empresa_servidor";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       // $query = "SELECT TIMEDIFF(HoraSalida, HoraEntrada) FROM Imputaciones where Dia like '2019-11-13' AND UsuarioId = 2;";
        // ver todos los datos de la tabla LoginUsuarios
       // $query ="SELECT * FROM LoginUsuarios WHERE Id='".$num."'";
       // $resul = $conn->query($query);
        //$resul= mysqli_query($conn, $query); //asigno el resultado de la consulta

  /*  if ($resul->num_rows > 0) {
    // output data of each row
    while($row = $resul->fetch_assoc()) {
        //echo "Nombre: " . $row["Nombre"]. " - Clave: ". $row["Clave"]."<br>";
        echo "TIEMPO:".$row["TIMEDIFF"];
    }
    } else {
    echo "0 results"; */
    //}
//el método registrar hora entrada debería tener lo siguiente
    /*INSERT INTO `Imputaciones` (`Id`, `UsuarioId`, `Dia`, `HoraEntrada`, `HoraSalida`) VALUES (NULL, '2', 'CURDATE()', '$_POST["entrada"]', NULL);*/
    $query= "INSERT INTO Imputaciones (UsuarioId,Dia, HoraEntrada) VALUES (3, '2019-11-20', '".$_GET["entrada"]."')";

    $result = $conn->query($query);

    //$resultado = $mysql->$query;

  /*  if (mysqli_query($conn, $query)){
         echo "New record created successfully";
    }else {
        echo "No se realizó la inserción"."<br>";
    }*/


if ($result === TRUE){

    echo "Hora insertada";
} else {
    echo "No se realizó la inserción"."<br>";
        var_dump($result);
}



/*
//$row= mysqli_fetch_assoc($resul);
        //echo "el resultado es: ".$resul;
        //$row->$resul->fetch_array(MYSQLI_BOTH);
    $row = mysqli_fetch_array($resul);
    printf ("%s (%s)\n", $row[0], $row["CountryCode"]);
        //¿por qué imprime solo una línea pero si lo meto en un bucle se vuelve infinito?
        printf ("%s (%s)\n", $row["Nombre"], $row["Clave"]);



       // $resul.free();

      //  mysqli_free_result($resul);

*/
//$result.free();
  //  $result.close();
 mysqli_close($conn);




?>