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

    require_once 'content_princi/header_2.html';  // Se incluye el encabezado de la página

    // Conexión a la base de datos
    require_once 'conexion.php';

    // Actualizar el campo 'pro_pro' (producto) de la tabla 'promedio' donde el id coincide
    $registro = mysqli_query($conex,"update promedio set pro_pro = '$_REQUEST[producto]' where id_pro='$_REQUEST[id_pro]' ") or die ("error".mysqli_error($conex));

    // Actualizar el campo 'act_pro' (proceso) de la tabla 'promedio' donde el id coincide
    $registro = mysqli_query($conex,"update promedio set act_pro = '$_REQUEST[proceso]' where id_pro='$_REQUEST[id_pro]' ") or die ("error".mysqli_error($conex));

    // Actualizar el campo 'can_pro' (estándar por minuto) de la tabla 'promedio' donde el id coincide
    $registro = mysqli_query($conex,"update promedio set can_pro = '$_REQUEST[estandar]' where id_pro='$_REQUEST[id_pro]' ") or die ("error".mysqli_error($conex));

    // Mensaje de confirmación
    echo '<center><p id=datos>datos actualizados</p><br>';

?>

<!-- Botón para actualizar otro registro -->
<button id="volver1"><a href="actualizar_estandar.php">Actualizar otro registro</a></button><br><br>

<!-- Botón para volver a la página principal -->
<button id="volver"><a href="supervisor.php">volver</a></button>

<?php
    require_once 'content_princi/footer.html';  // Se incluye el pie de página
?>

</body>
</html>
