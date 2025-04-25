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

            require_once 'content_princi/header_2.html'; 
            //conexion a la base de datos   
            require_once 'conexion.php';


            //insertar registro de la tabla
            mysqli_query ($conex, "insert into promedio(pro_pro,act_pro,can_pro,tie_pro) values
            ('$_REQUEST[pro]','$_REQUEST[proceso]','$_REQUEST[cantidad]','$_REQUEST[tiempo]')") or die ("error".mysqli_error($conex));

            echo '<center><h2 id="datos">Datos agregados correctamente</h2>';
            
            mysqli_close($conex);
            
    ?>

        <button id="volver"><a href="listar_estandar.php">Ver lista</a></button>
        <button id="volver-1"><a href="supervisor.php">volver</a></button>

    <?php   
    require_once 'content_princi/footer.html';   
    ?>


</body>
</html>