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

    require_once 'princi.html';

    //conexion a la base de datos
    require_once 'conexion.php';


    // actualizar registros tabla aprendiz
    $registro = mysqli_query($conex,"update usuario set nom_usu = '$_REQUEST[nombre]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update usuario set ape_usu = '$_REQUEST[apellido]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update usuario set tdo_usu = '$_REQUEST[tipo_doc]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update usuario set ndo_usu = '$_REQUEST[num_doc]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update usuario set tel_usu = '$_REQUEST[telefono]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update usuario set usu_usu = '$_REQUEST[usuario]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    $registro = mysqli_query($conex,"update usuario set rol_usu = '$_REQUEST[rol]' where id_usu='$_REQUEST[id_usu]' ") or die ("error".mysqli_error($conex));
    

    echo '<center><p id=datos>datos actualizados</p><br>';


    ?>

    <button id="volver1"><a href="actualizar.php">Actualizar otro registro</a></button><br><br>
    <button id="volver"><a href="supervisor.php">volver</a></button>


</body>
</html>