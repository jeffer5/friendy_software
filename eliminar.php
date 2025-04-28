<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define la codificación de caracteres UTF-8, asegurando que los caracteres especiales se muestren correctamente -->
    <meta charset="UTF-8">
    <!-- Define el comportamiento de la página en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vincula un archivo CSS para aplicar los estilos -->
    <link rel="stylesheet" href="styles/styles_elim.css">
    <!-- Título que se muestra en la pestaña del navegador -->
    <title>Document</title>
</head>
<body>

    <?php
        // Incluye el encabezado común para esta página
        require_once 'content_princi/header_2.html';     
        
        // Se establece la conexión a la base de datos
        require_once 'conexion.php';

        // Consulta a la base de datos para buscar el registro con el número de documento proporcionado en la solicitud
        $registro = mysqli_query($conex,"select*from usuario where ndo_usu = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));

        // Verifica si existen registros para el número de documento recibido
        if(($reg = mysqli_fetch_array($registro))) {
            // Si existen registros, se elimina el registro correspondiente de la tabla 'usuario'
            mysqli_query($conex,"delete from usuario where ndo_usu = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));
            echo '<center><p id=datos>Datos borrados correctamente</p><br><br>'; // Mensaje de confirmación
        } else {
            // Si no se encuentran registros para ese número de documento, muestra un mensaje de error
            echo '<center><p id=datos>No se encuentran registros</p><br><br>';
        }

        // Cierra la conexión a la base de datos
        mysqli_close($conex);
    ?>

    <!-- Botón para volver a la página que muestra la lista de usuarios -->
    <button id="volverl"><a href="listar.php">ver lista</a></button><br><br>

    <!-- Botón para volver a la página principal o supervisor -->
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        // Incluye el pie de página común para esta página
        require_once 'content_princi/footer.html';
    ?>

</body>
</html>
