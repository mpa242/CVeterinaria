<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar Animal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
<link rel="stylesheet" href="css/estilos.css">
</head>
<style>
    h1{
    text-align: center;
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 2px solid #1f51c5;
    font-size: 30px;
    color: white;
    }
    h3{
        text-align: top;
    }
    .formulario-registro {
       
    }
</style>
<body>
    <h1 class="ppal">HOGAR ANIMAL</h1>

    
        <h3>Registrate y obtenga la primera consulta gratis</h3>
      <br>
      <br>
      <br>
   <section class="formulario-registro">   
    <h2>Ingreso de Clientes</h2>
    <form action="validar.php" method="post">
        <input type="text" class="controles" name="usuario"id="usuario" placeholder="Usuario" required>
        <input type="password" class="controles"  name="password",id="password" placeholder="Contraseña" required>
        <input type="submit" name="enviar" id="enviar" value="iniciar sesion" calss="btn btn-primary">
    </form>
   </section>
</body>
</html>