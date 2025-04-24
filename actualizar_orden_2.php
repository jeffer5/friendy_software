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

    require_once 'content_princi/header_2.html';  

    //conexion a la base de datos
    require_once 'conexion.php';


    // actualizar registros tabla aprendiz
    $registro = mysqli_query($conex,"update orden set nro_ord = '$_REQUEST[numero_orden]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set nom_cli = '$_REQUEST[nombre_cliente]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set fec_ent = '$_REQUEST[fecha_entrega]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set nom_pro = '$_REQUEST[nombre_producto]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update orden set can_tot = '$_REQUEST[cantidad_tot]' where id_ord='$_REQUEST[id_ord]' ") or die ("error".mysqli_error($conex));
    
    

    echo '<center><p id=datos>datos actualizados</p><br>';


    ?>

    <button id="volver1"><a href="actualizar_orden.php">Actualizar otro registro</a></button><br><br>
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        require_once 'content_princi/footer.html';
   ?>

</body>
</html>