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
    // Se incluye el encabezado de la página
    require_once 'content_princi/header_2.html';  

    // Conexión a la base de datos
    require_once 'conexion.php';

    // Actualización de los registros en la tabla 'orden'
    // Se actualizan varios campos en la tabla 'orden' usando valores pasados por $_REQUEST
    $registro = mysqli_query($conex,"update orden set nro_ord = '$_REQUEST[numero_orden]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set nom_cli = '$_REQUEST[nombre_cliente]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set fec_ent = '$_REQUEST[fecha_entrega]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set nom_pro = '$_REQUEST[nombre_producto]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set can_tot = '$_REQUEST[cantidad_tot]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    
    //  actualiza el campo 'can_tot' de nuevo con el mismo valor
    $registro = mysqli_query($conex,"update orden set can_tot = '$_REQUEST[cantidad_tot]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    
    // Actualiza el campo 'pro_ord' en la tabla 'orden'
    $registro = mysqli_query($conex,"update orden set pro_ord = '$_REQUEST[proceso_ord]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));

    // Mensaje que confirma que los datos han sido actualizados correctamente
    echo '<center><p id=datos>datos actualizados</p><br>';
?>

<!-- Botón para actualizar otro registro -->
<button id="volver1"><a href="actualizar_orden.php">Actualizar otro registro</a></button><br><br>

<!-- Botón para volver a la página de supervisor -->
<button id="volver"><a href="supervisor.php">volver</a></button>

<?php
    // Se incluye el pie de página
    require_once 'content_princi/footer.html';
?>

</body>
</html>
