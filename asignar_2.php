<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a la hoja de estilos -->
    <link rel="stylesheet" href="styles/styles_ord_a.css">
    <title>Document</title>
</head>
<body>

    

    <?php
    // Incluye el encabezado de la página
    require_once 'content_princi/header_2.html';

    // Incluye la conexión a la base de datos
    require_once 'conexion.php';

    // Inserta un nuevo registro en la tabla 'detalle_orden'
    mysqli_query($conex, "INSERT INTO detalle_orden(id_usu_fk, id_ord_fk) VALUES 
    ('$_REQUEST[usuario]', '$_REQUEST[orden]')")
    or die ("error".mysqli_error($conex));

    // Mensaje de éxito si se agregaron los datos
    echo '<center><h2 id="datos">Datos agregados correctamente</h2>';

    // Cierra la conexión a la base de datos
    mysqli_close($conex);
?>

<!-- Botón para regresar a la página de asignar órdenes -->
<button id="volver"><a href="asignar.php">volver</a></button>

    

   <?php
    // Incluye el pie de página
    require_once 'content_princi/footer.html';
?>

    
</body>
</html>
