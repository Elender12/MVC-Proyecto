<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/misestilos.css">
    <title>Prueba</title>
</head>

<body>

<h3>Prueba php</h3>
<table id="tabla-usuarios">
<tr id="cabecera-tabla">
<th>Id</th>
<th>Usuario</th>
<th>Contraseña</th>
</tr>

<?php foreach ($usuarios as $usuario): ?>
<tr>
	<td class="contenido-lista"><?php echo $usuario->Id ?></td>
	<td class="contenido-lista"><?php echo $usuario->Nombre ?></td>
	<td class="contenido-lista"><?php echo $usuario->Clave ?></td>
	<td class="acciones-lista"><a href="/Administracion/delete/<?php echo $usuario->Id ?>" class="enlace-borrar">&#10006;</a></td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>
<?php ob_end_flush(); ?>