<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Establece la codificación de caracteres UTF-8 para la correcta visualización de caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Hace la página responsive, adaptándose a diferentes dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vincula un archivo CSS externo para los estilos -->
    <link rel="stylesheet" href="styles/styles_elim.css">
    <!-- Título que se muestra en la pestaña del navegador -->
    <title>Document</title>
</head>
<body>

    <?php
        // Se incluye el encabezado común de la página
        require_once 'content_princi/header_2.html';     

        // Conexión a la base de datos
        require_once 'conexion.php';

        // Realiza una consulta para obtener el registro con el id_pro que coincide con el valor recibido en la solicitud (usando $_REQUEST['cod2'])
        $registro = mysqli_query($conex,"select * from promedio where id_pro = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));

        // Si se encuentran registros, se procede a eliminar el registro correspondiente de la tabla 'promedio'
        if(($reg = mysqli_fetch_array($registro))) {
            // Ejecuta la eliminación del registro en la base de datos
            mysqli_query($conex,"delete from promedio where id_pro = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));
            // Mensaje de confirmación
            echo '<center><p id=datos>Datos borrados correctamente</p><br><br>';
        } else {
            // Si no se encuentran registros, se muestra un mensaje de error
            echo '<center><p id=datos>No se encuentran registros</p><br><br>';
        }

        // Cierra la conexión a la base de datos
        mysqli_close($conex);
    ?>

    <!-- Botón que permite volver a la lista de estándares -->
    <button id="volverl"><a href="listar_estandar.php">ver lista</a></button><br><br>
    
    <!-- Botón para volver a la página principal o supervisor -->
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        // Se incluye el pie de página común de la página
        require_once 'content_princi/footer.html';
    ?>

</body>
</html>
