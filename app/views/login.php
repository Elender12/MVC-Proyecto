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
</head>
<body>
<form action="../Login/hacerLogin" method="POST">
    <label>Nombre:</label><input name ="worker" type="text"/>
    <label>Pass:</label><input name="pass" type="text"/>
    <input type="submit"/>
</form>
</body>
</html>
<?php
    ob_end_flush();
?>