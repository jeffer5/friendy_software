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
    $registro = mysqli_query($conex,"update promedio set pro_pro = '$_REQUEST[producto]' where id_pro='$_REQUEST[id_pro]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update promedio set act_pro = '$_REQUEST[proceso]' where id_pro='$_REQUEST[id_pro]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update promedio set can_pro = '$_REQUEST[estandar]' where id_pro='$_REQUEST[id_pro]' ") or die ("error".mysqli_error($conex));

    echo '<center><p id=datos>datos actualizados</p><br>';


    ?>

    <button id="volver1"><a href="actualizar_estandar.php">Actualizar otro registro</a></button><br><br>
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        require_once 'content_princi/footer.html';
   ?>

</body>
</html>