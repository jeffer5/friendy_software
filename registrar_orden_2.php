<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Establece el conjunto de caracteres de la página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que la página sea responsive -->
    <link rel="stylesheet" href="styles/styles_reg.css"> <!-- Vincula el archivo de estilos CSS -->
    <title>Document</title> <!-- Define el título de la página que se verá en la pestaña del navegador -->
</head>
<body>
    
    <?php
        // Incluye el encabezado común de la página
        require_once 'content_princi/header_2.html'; 

        // Establece la conexión con la base de datos
        require_once 'conexion.php';

        // Inserta un nuevo registro en la tabla 'orden'
        mysqli_query($conex, "INSERT INTO orden(nro_ord, nom_cli, fec_ent, nom_pro, can_tot, pro_ord) 
            VALUES ('$_REQUEST[numord]', '$_REQUEST[nomcli]', '$_REQUEST[fecent]', '$_REQUEST[nompro]', '$_REQUEST[cantot]', '$_REQUEST[proord]')")
            or die("Error en la inserción: " . mysqli_error($conex)); // Si hay un error en la inserción, lo muestra

        // Muestra un mensaje indicando que los datos fueron agregados correctamente
        echo '<center><h2 id="datos">Datos agregados correctamente</h2>';

        // Cierra la conexión a la base de datos
        mysqli_close($conex);
    ?>

    <!-- Botones para ir a la lista de órdenes o regresar a la página anterior -->
    <button id="volver"><a href="listar_orden.php">Ver lista</a></button>
    <button id="volver-1"><a href="supervisor.php">Volver</a></button>

    <?php   
        // Incluye el pie de página común de la página
        require_once 'content_princi/footer.html';   
    ?>

</body>
</html>
