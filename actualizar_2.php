<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_act_2.css">
    <title>Document</title>
</head>
<body>
    
    <?php

    require_once 'content_princi/header_2.html';  // Se incluye el encabezado común de la página

    // Conexión a la base de datos
    require_once 'conexion.php';

    // Actualización de cada campo de la tabla 'usuario' por separado usando el id del usuario recibido en $_REQUEST

    $registro = mysqli_query($conex,"update usuario set nom_usu = '$_REQUEST[nombre]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el nombre del usuario

    $registro = mysqli_query($conex,"update usuario set ape_usu = '$_REQUEST[apellido]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el apellido del usuario

    $registro = mysqli_query($conex,"update usuario set tdo_usu = '$_REQUEST[tipo_doc]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el tipo de documento

    $registro = mysqli_query($conex,"update usuario set ndo_usu = '$_REQUEST[num_doc]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el número de documento

    $registro = mysqli_query($conex,"update usuario set tel_usu = '$_REQUEST[telefono]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el teléfono

    $registro = mysqli_query($conex,"update usuario set usu_usu = '$_REQUEST[usuario]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el nombre de usuario

    $registro = mysqli_query($conex,"update usuario set rol_usu = '$_REQUEST[rol]' where id_usu='$_REQUEST[id_usu]' ") 
    or die ("error".mysqli_error($conex)); // Actualiza el rol del usuario

    // Muestra un mensaje confirmando que los datos fueron actualizados
    echo '<center><p id=datos>datos actualizados</p><br>';

?>

<!-- Botón para actualizar otro registro -->
<button id="volver1"><a href="actualizar.php">Actualizar otro registro</a></button><br><br>

<!-- Botón para volver a la página principal de supervisor -->
<button id="volver"><a href="supervisor.php">volver</a></button>

<?php
    require_once 'content_princi/footer.html'; // Se incluye el pie de página común
?>


</body>
</html>
