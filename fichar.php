<!doctype html>
<html xmlns:sueldo="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="../Currantes/ficharEntrada">
Hora de entrada:
    <input type="text" placeholder="Hora de entrada" name="entrada">
    <input type="submit" value="Registrar">
</form>
Hora de salida:
<form method="post" action="../Currantes/ficharSalida">
    <input type="text" placeholder="Hora de salida" name="salida">
    <input type="submit" value="Registrar">
</form>
    <br>
    <form method="post" action="../Currantes/consultarHoras">
    <button type="submit" name="consultarH">consultar horas</button>
    </form>
    <pre></pre>
    <form method="post" action="../Currantes/consultarSueldo">
        <button type="submit" name="consultarS">consultar sueldo</button>
    </form>

</body>
</html>