<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Establece el conjunto de caracteres para la página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Asegura la visualización correcta en dispositivos móviles -->
    <link rel="stylesheet" href="styles/styles_reg.css"> <!-- Vincula la hoja de estilos CSS para el diseño de la página -->
    <title>Document</title> <!-- Título que se muestra en la pestaña del navegador -->
</head>
<body>
    
    <?php
        // Se incluye el encabezado común a todas las páginas (header_2.html).
        require_once 'content_princi/header_2.html'; 

        // Se establece la conexión con la base de datos utilizando 'conexion.php'.
        require_once 'conexion.php';

        // Realiza una consulta de inserción de los datos del formulario en la tabla 'promedio' de la base de datos.
        // Los datos son enviados mediante el método POST en el formulario y se insertan en las columnas correspondientes.
        mysqli_query($conex, "insert into promedio(pro_pro, act_pro, can_pro, tie_pro) values
        ('$_REQUEST[pro]', '$_REQUEST[proceso]', '$_REQUEST[cantidad]', '$_REQUEST[tiempo]')") or die ("error".mysqli_error($conex));

        // Muestra un mensaje de éxito indicando que los datos fueron agregados correctamente.
        echo '<center><h2 id="datos">Datos agregados correctamente</h2>';

        // Cierra la conexión a la base de datos.
        mysqli_close($conex);
    ?>

    <!-- Botones de navegación para ir a otras páginas -->
    <button id="volver"><a href="listar_estandar.php">Ver lista</a></button> <!-- Redirige a la página de lista de estándares -->
    <button id="volver-1"><a href="supervisor.php">Volver</a></button> <!-- Redirige a la página principal del supervisor -->

    <?php   
        // Se incluye el pie de página común a todas las páginas (footer.html).
        require_once 'content_princi/footer.html';   
    ?>

</body>
</html>
