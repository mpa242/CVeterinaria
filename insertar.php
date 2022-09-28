<?php

    include("coneccion.php");

    $usuario=$_POST['usuario'];

    $password = $_POST['password'];

    $rol = $_POST['rol'];

    $insertar = "INSERT INTO registro (usuario, pass, rol) VALUES ('$usuario', '$password', '$rol')";



    if(mysqli_query($mysqli, $insertar))
    {
?>
        <script language="javascript">

            alert('Datos ingresados correctamente.');

            location.href="veterinario.php";

        </script>
<?php

    }
    else
    {
?>
        <script language="javascript">

            alert('No es posible ingresar los datos.');

            location.href="veterinario.php";

        </script>

<?php

    }

?>