<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/misestilos.css">
    <script type="text/javascript">
    	
	function verificarPassword() {
	    var letraMin = /[a-z]+/;
	    var letraMayus = /[A-Z]+/;
	    var numeros = /[0-9]+/;
	    var patronCaracEspeciales = /[\@\#\$\%\&\_\-]/;
	    //recogo los datos que ha introducido el usuario
	    var contrasenia = document.getElementById("pass").value;
	    console.log(contrasenia);
	    //verifico que tenga la longitud requerida
	    if (contrasenia.length < 8 || contrasenia.length > 16) {
	        alert("Tu contraseña es o demasiado corta/larga.");
	    } else {
	        //verifico que cumpla con los patrones
	        if (letraMin.test(contrasenia) && letraMayus.test(contrasenia)
	            && numeros.test(contrasenia) && patronCaracEspeciales.test(contrasenia)) {
	            alert("La contraseña es SEGURA.");
	        } else {
	            alert("La contraseña NO es segura.");
	        }
	    }
	}
    

    </script>

</head>
<body>

<h3>Inicio de sesion</h3>
<form action="../Administracion/hacerLogin" method="POST">
    <label>Nombre:</label><input name ="worker" type="text"/>
    <label>Contraseña:</label><input name="pass" type="text"/>
    <input type="submit"/>
</form>

<h3>Creacion de usuario</h3>
<form action="../Administracion/registro">
  <label>Nombre:</label><input type="text" name="nombre">
  <label>Clave:</label><input type="text" id="pass" name="clave">
  <button onclick="verificarPassword();return false;">Comprobar fortaleza clave</button>
  <input type="submit" value="Añadir trabajador">
</form> 

<h3>Mostrar usuarios</h3>
<form action="../Administracion/mostrarRegistros">
  <input type="submit" value="Mostrar">
</form>


</body>
</html>
<?php
    ob_end_flush();
?>