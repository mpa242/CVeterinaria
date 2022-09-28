<?php
//crear 4 variables para la conexion
$servidor="localhost";
$usuariobd="root";
$password="";
$based="cveterinaria";

$mysqli=new mysqli($servidor,$usuariobd,$password,$based);

if($mysqli->connect_errno){
    echo "<strong> Error al conectarse a la base de datos</strong>" .$mysqli->connect_errno;
}

return $mysqli;
?>