<?php
session_start();
$us=$_SESSION['login'];
if($_SESSION['logueado']==TRUE)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al modulo usuario</h1>
<a href="Cerrar_sesion.php">Salir</a>
</body>
</html>
>?php
}
else
{
    ?>
    <script lenguage="javascript">
        alert("Debe iniciar sesion");
        location.href="index.php";
    </script>
    <?php
}
?>