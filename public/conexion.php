<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "mvcGrupal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT TIMEDIFF(HoraSalida, HoraEntrada) FROM imputaciones where Dia like '2019-11-13' AND UsuarioId = 2;";


$resul = $conn->query($sql);

var_dump($resul);


mysqli_close($conn);




?>