<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_reg.css">
    <title>Document</title>
</head>
<body>
    
    <?php

            require_once 'princi.html';
            //conexion a la base de datos   
            require_once 'conexion.php';


            //insertar registro de la tabla
            mysqli_query ($conex, "insert into orden(nro_ord,nom_cli,fec_ent,nom_pro,can_tot) values
            ('$_REQUEST[numord]','$_REQUEST[nomcli]','$_REQUEST[fecent]','$_REQUEST[nompro]','$_REQUEST[cantot]')")
            or die ("error".mysqli_error($conex));

            echo '<center><h2 id="datos">Datos agregados correctamente</h2>';
            
            mysqli_close($conex);
            
    ?>

        <button id="volver"><a href="listar_orden.php">Ver lista</a></button>
        <button id="volver"><a href="supervisor.php">volver</a></button>

</body>
</html>