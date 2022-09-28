<?php
    include("coneccion.php")
    session_start();

    $us=$_SESSION['login'];

    //hacer la consulta de la base de datos
    $id= $_GET['id'];
    $sql="SELECT * FROM registro WHERE id='$id'";
    $query=mysqli_query($mysqli,$sql);
    $datos=mysqli_fetch_array($query);
    echo $query;

    if($_SESSION['Logueado']==TRUE)

    {

    ?>

        <!DOCTYPE html>

        <html lang="en">

        <head>

            <meta charset="UTF-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Document</title>
            <link rel="stylesheet" href="css/bootsrap.min.css">
            <link rel="stylesheet" href="css/bootsrap.min.js">
            <link rel="stylesheet" href="css/estilos.css">
        </head>

        <body>

            <h1>Hola Veterinario</h1>

            <a href="cerrar_sesion.php" class="btn btn-danger">Salir</a>
            <!-- formulario de actualización-->
            
            <div class="container mt-5">
                <form action="update.php" method="post">
                    <input type="text">
                    <input type="text" class="form-control mb-3" name="usuario" value=" <?php $datos['usuario'] ?>">
                    <input type="text" class="form-control mb-3" name="password" value=" <?php $datos['pass'] ?>">
                </form>
            </div>

        </body>

        </html>

    <?php

    }

    else

    {

        ?>

        <script language="javascript">

            alert("Debes iniciar sesión");

            location.href="index.php";

        </script>

        <?php

    }

?>