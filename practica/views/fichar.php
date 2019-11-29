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
<form method="post" action="../Usuario/fichar">
Hora de entrada:
    <input type="time" name="entrada" min="06:00" required>
Hora de salida:
    <input type="time" name="salida" max="23:59" required>
    <input type="submit" value="Registrar">
</form>


    <form method="post" action="../Usuario/consultarHoras">
    <button type="submit" name="consultarH">consultar horas</button>
    </form>
    <pre></pre>
    <form method="post" action="../Usuario/consultarSueldo">
        <button type="submit" name="consultarS">consultar sueldo</button>
    </form>

</body>
</html>