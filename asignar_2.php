<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php


        require_once 'princi.html';
        //conexion a la base de datos   
        require_once 'conexion.php';

        //insertar registro de la tabla
        mysqli_query ($conex, "insert into detalle_orden(id_usu_fk, id_ord_fk) values
        ('$_REQUEST[orden]','$_REQUEST[usuario]')")
        or die ("error".mysqli_error($conex));

        echo '<center><h2 id="datos">Datos agregados correctamente</h2>';
        
        mysqli_close($conex);
        
    ?>

    <button id="volver"><a href="supervisor.php">volver</a></button>
    
</body>
</html>