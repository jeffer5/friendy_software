<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ord_a.css"> <!-- Se enlaza el archivo CSS para estilizar la página -->
    <title>Document</title>
</head>
<body>
    

    <?php
        // Se incluye el encabezado común a todas las páginas
        require_once 'content_princi/header_2.html';  
        // Se incluye el archivo para realizar la conexión a la base de datos
        require_once 'conexion.php';

        // Se obtiene el ID del usuario desde la URL a través del parámetro 'cod'
        // Este valor es pasado a la página por medio de un enlace o formulario
        $respuesta = mysqli_query($conex," 
            SELECT d.id_det , u.nom_usu, o.nro_ord, o.nom_cli , o.fec_ent,o.nom_pro, o.can_tot, o.pro_ord
            FROM detalle_orden d
            JOIN usuario u ON d.id_usu_fk = u.id_usu
            JOIN orden o ON d.id_ord_fk = o.id_ord
            WHERE u.id_usu = '$_REQUEST[cod]'") or die("error".mysqli_error($conex));

        // Imprimir la tabla de resultados
        echo '<center><table id=table border=1>';
        
        // Crear encabezado de la tabla
        echo "<tr> <th colspan=8 bgcolor=aquamarine> ordenes </th> </tr>";
        
        // Crear fila de encabezado con los nombres de las columnas
        echo "<tr> 
                <th>ID Detalle</th>
                <th>Nombre Usuario</th>
                <th>Número Orden</th>
                <th>Nombre cliente</th>
                <th>Fecha entrega</th>
                <th>Nombre producto</th>
                <th>Cantidad total</th>
                <th>Proceso a realizar</th>
              </tr>";

        // Mientras haya filas de resultados (registros) en la consulta
        while ($reg = mysqli_fetch_array($respuesta)){
            // Imprimir una fila para cada registro en la consulta
            echo "<tr> 
                    <th>" . $reg["id_det"] ."</th>
                    <th>" . $reg["nom_usu"] . "</th>
                    <th>" . $reg["nro_ord"] . "</th>
                    <th>" . $reg["nom_cli"] ."</th>
                    <th>" . $reg["fec_ent"] . "</th>
                    <th>" . $reg["nom_pro"] . "</th>
                    <th>" . $reg["can_tot"] . "</th>
                    <th>" . $reg["pro_ord"] . "</th> 
                  </tr>";
        }

        // Cerrar la tabla HTML después de insertar todas las filas
        echo '</table>';
    ?>

    <!-- Botón para regresar a la página anterior, en este caso 'operario.php' -->
    <button id="volver"><a href="operario.php">volver</a></button>

    <?php
        // Se incluye el pie de página común a todas las páginas
        require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
