<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_reg.css"> <!-- Enlace a la hoja de estilos CSS -->
    <title>Document</title>
</head>
<body>
    
    <?php

        // Se incluye el encabezado común a todas las páginas (header_2.html).
        require_once 'content_princi/header_2.html'; 

        // Conexión a la base de datos.
        require_once 'conexion.php';

        // Se inserta un nuevo registro en la tabla 'indicador' usando los datos enviados por el formulario.
        // $_REQUEST recoge los datos enviados por GET o POST (en este caso, POST).
        mysqli_query ($conex, "insert into indicador(can_rea,tie_gas,fec_ind,id_det_fk,id_pro_fk) values
        ('$_REQUEST[cantidad]','$_REQUEST[tiempo]','$_REQUEST[fecha]','$_REQUEST[orden]','$_REQUEST[estandar]')")
        or die ("error".mysqli_error($conex)); // Si hay un error en la inserción, se muestra un mensaje de error.

        // Mensaje de éxito que indica que los datos fueron insertados correctamente.
        echo '<center><h2 id="datos">Datos agregados correctamente</h2>';
        
        // Se cierra la conexión a la base de datos.
        mysqli_close($conex);
    ?>

    <!-- Botones para la navegación después de insertar los datos -->
    <button id="volver"><a href="listar_indicador.php">Ver lista</a></button> <!-- Enlace para ver la lista de registros -->
    <button id="volver-1"><a href="operario.php">volver</a></button> <!-- Enlace para regresar a la página principal del operario -->

    <?php   
        // Se incluye el pie de página común a todas las páginas (footer.html).
        require_once 'content_princi/footer.html';   
    ?>


</body>
</html>
