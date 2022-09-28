<?php
$rola="Veterinario";
$rolb="usuario";

if(isset($_POST["enviar"])){
    require("coneccion.php")
    session_start();
    $nombre=$_POST["usuario"];
    $password=$_POST["password"];
    $consulta=("SELECT * FROM registro WHERE usuario='$nombre' AND pass='$password'");
    
    if(($resultado=$mysqli->query($consulta))){
            while($row=$resultado-> fetch_array()){
            $usuarioOk=$row["usuario"];
            $passwordOk=$row["pass"];
            $rolOk=$row["rol"];
            $_SESSION['login']=$row["usuario"];
        }
        $resultado->close();  
            
    }
    $mysqli->close();
}
//validar que redirecciones a los usuarios se acuerso a su rol
if($nombre==$usuarioOk && $password==$passwordOk && $rolOk==$rola){
    $_SESSION["Logueado"]=TRUE;
    header("location: veterinario.php");
}elseif($nombre==$usuarioOk && $password==$passwordOk && $rolOk==$rolb)
{
    $_SESSION["Logueado"]=TRUE;
    header("location: usuario.php");
}else{
    ?>
    <script languaje="javascript">
        alert("Datos incorrectos,vuelva a intentarlo.")
        location.href="index.php"
    </script>
    <?php
}127.0 0.1/cveterinaria/index.php

?>