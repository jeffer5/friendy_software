<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Definición del conjunto de caracteres para asegurar la correcta visualización de los caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Asegura que la página se vea correctamente en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vincula el archivo CSS para aplicar los estilos a la página -->
    <link rel="stylesheet" href="styles/styles_lis.css">
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Document</title>
</head>
<body>

    <?php
        // Incluye la cabecera de la página, que puede contener elementos comunes como el menú de navegación
        require_once 'content_princi/header_2.html';  
    ?>
    
    <!-- Tabla para mostrar la lista de órdenes de acondicionamiento -->
    <center>
        <table id="table" border=1 width=80%>
            <!-- Encabezado de la tabla que indica que contiene las órdenes de acondicionamiento -->
            <tr height=30>
                <th colspan="7" bgcolor=aquamarine>Lista de ordenes acondicionamiento</th>
            </tr>
            <!-- Títulos de las columnas de la tabla -->
            <tr height=30>
                <th>ID</th>
                <th>NUMERO ORDEN</th>
                <th>NOMBRE CLIENTE</th>
                <th>FECHA ENTREGA</th>
                <th>NOMBRE PRODUCTO</th>
                <th>CANTIDAD TOTAL</th>
                <th>PROCESO A REALIZAR</th>
            </tr>

            <?php
                // Establece la conexión con la base de datos
                require_once 'conexion.php';

                // Realiza una consulta para obtener todos los registros de la tabla 'orden'
                $registro = mysqli_query($conex,'select*from orden') or die ("error".mysqli_error($conex));

                // Itera a través de cada registro y lo imprime en una fila de la tabla HTML
                while($reg = mysqli_fetch_array($registro)){
                    // Muestra cada campo de la tabla 'orden' en su respectiva columna de la tabla HTML
                    echo '<tr>';
                    echo '<th>'.$reg['id_ord'].'</th>';  // Muestra el ID de la orden
                    echo '<th>'.$reg['nro_ord'].'</th>'; // Muestra el número de la orden
                    echo '<th>'.$reg['nom_cli'].'</th>'; // Muestra el nombre del cliente
                    echo '<th>'.$reg['fec_ent'].'</th>'; // Muestra la fecha de entrega
                    echo '<th>'.$reg['nom_pro'].'</th>'; // Muestra el nombre del producto
                    echo '<th>'.$reg['can_tot'].'</th>'; // Muestra la cantidad total
                    echo '<th>'.$reg['pro_ord'].'</th>'; // Muestra el proceso a realizar
                    echo '</tr>';
                }

                // Cierra la conexión con la base de datos
                mysqli_close($conex);
            ?>

        </table>
    </center>

    <!-- Botón para volver a la página principal del supervisor -->
    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        // Incluye el pie de página que puede contener información común, como créditos
        require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
