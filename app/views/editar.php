<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion</title>
	<link rel="stylesheet" type="text/css" href="css/misestilos.css">
</head>
<body>

<h1>Edición de usuario</h1>

<form method="post" action="/administracion/update">
    <input type="hidden" name="Id" value="<?php echo $usuario->Id ?>">

	<div>
	    <label>Nombre</label>
	    <input type="text" name="Nombre" value="<?php echo $usuario->Nombre ?>">
	</div>
		<div>
	    <label>Clave</label>
	    <input type="text" name="Clave" value="<?php echo $usuario->Clave ?>">
	</div>

	<button type="submit">Enviar</button>
</form>

</body>
</html>
<?php
    ob_end_flush();
?>