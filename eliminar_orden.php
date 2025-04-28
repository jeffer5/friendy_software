<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define el tipo de codificación de caracteres para la página -->
    <meta charset="UTF-8">
    <!-- Asegura que la página sea responsive en diferentes dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vincula el archivo CSS con los estilos para esta página -->
    <link rel="stylesheet" href="styles/styles_elim.css">
    <!-- Título que aparece en la pestaña del navegador -->
    <title>Document</title>
</head>
<body>

    <?php
        // Incluye el archivo de cabecera con el contenido común de la página
        require_once 'content_princi/header_2.html';      

        // Establece la conexión a la base de datos
        require_once 'conexion.php';

        // Ejecuta una consulta SQL para traer el registro de la tabla 'orden' donde el número de orden (nro_ord) es igual al valor recibido en la solicitud ($_REQUEST['cod2'])
        $registro = mysqli_query($conex,"select * from orden where nro_ord = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));

        // Si el registro es encontrado, se procede a eliminar el registro de la tabla 'orden'
        if(($reg = mysqli_fetch_array($registro))) {

            // Ejecuta la eliminación en la base de datos usando el mismo número de orden para identificar el registro
            mysqli_query($conex,"delete from orden where nro_ord = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));
            
            // Muestra un mensaje indicando que los datos han sido eliminados correctamente
            echo '<center><p id=datos>Datos borrados correctamente</p><br><br>';
        } else {
            // Si no se encuentran registros, muestra un mensaje indicando que no se encontraron registros para eliminar
            echo '<center><p id=datos>No se encuentran registros</p><br><br>';
        }

        // Cierra la conexión con la base de datos
        mysqli_close($conex);
    ?>

    <!-- Botón para redirigir al usuario a la página de la lista de órdenes -->
    <button id="volerl"><a href="listar_orden.php">ver lista</a></button><br><br>
    
    <!-- Botón para regresar a la página principal del supervisor -->
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        // Incluye el archivo de pie de página con el contenido común de la página
        require_once 'content_princi/footer.html';
    ?>

</body>
</html>
