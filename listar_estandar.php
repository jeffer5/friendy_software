<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define la codificación de caracteres para asegurar que los caracteres especiales se muestren correctamente -->
    <meta charset="UTF-8">
    <!-- Asegura que la página sea responsiva y se adapte a diferentes tamaños de pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vincula el archivo CSS para los estilos de la página -->
    <link rel="stylesheet" href="styles/styles_lis.css">
    <!-- Título de la página que aparece en la pestaña del navegador -->
    <title>Document</title>
</head>
<body>

    <?php
        // Incluye el archivo de cabecera para mostrar contenido común, como el menú o encabezado
        require_once 'content_princi/header_2.html';  
    ?>
    
    <!-- Tabla para mostrar la lista de los estándares -->
    <center>
        <table id="table" border=1 width=80%>
            <!-- Encabezado de la tabla -->
            <tr height=30>
                <th colspan="5" bgcolor=aquamarine>Lista estandares</th>
            </tr>
            <!-- Encabezado de las columnas de la tabla -->
            <tr height=30>
                <th>ID</th>
                <th>PRODUCTO</th>
                <th>PROCESO</th>
                <th>CANTIDAD ESTANDAR</th>
                <th>ESTANDAR EN MINUTOS</th>
            </tr>

            <?php
                // Establece la conexión a la base de datos
                require_once 'conexion.php';

                // Ejecuta una consulta SQL para obtener todos los registros de la tabla 'promedio'
                $registro = mysqli_query($conex,'select*from promedio') or die ("error".mysqli_error($conex));

                // Itera a través de cada registro encontrado en la base de datos
                while($reg = mysqli_fetch_array($registro)) {
                    // Muestra cada registro en una fila de la tabla HTML
                    echo '<tr>';
                    echo '<th>'.$reg['id_pro'].'</th>';    // Muestra el ID del estándar
                    echo '<th>'.$reg['pro_pro'].'</th>';   // Muestra el producto
                    echo '<th>'.$reg['act_pro'].'</th>';   // Muestra el proceso
                    echo '<th>'.$reg['can_pro'].'</th>';   // Muestra la cantidad estándar
                    echo '<th>'.$reg['tie_pro'].'</th>';   // Muestra el estándar en minutos
                    echo '</tr>';
                }

                // Cierra la conexión con la base de datos
                mysqli_close($conex);
            ?>

        </table>
    </center>

    <!-- Botón para regresar a la página principal del supervisor -->
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        // Incluye el archivo de pie de página con contenido común, como los créditos o información adicional
        require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
