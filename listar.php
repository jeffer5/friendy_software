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
    
    <!-- Tabla para mostrar la lista de usuarios -->
    <center>
        <table id="table" border=1 width=80%>
            <!-- Encabezado de la tabla -->
            <tr height=30>
                <th colspan="10" bgcolor=aquamarine>Lista de usuarios</th>
            </tr>
            <!-- Encabezado de las columnas de la tabla -->
            <tr height=30>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TIPO DOCUMENTO</th>
                <th>NUMERO DOCUMENTO</th>
                <th>TELEFONO</th>
                <th>USUARIO</th>
                <th>CONTRASENA</th>
                <th>ROL</th>
                <th>FOTO</th>
            </tr>

            <?php
                // Establece la conexión a la base de datos
                require_once 'conexion.php';

                // Ejecuta una consulta SQL para obtener todos los registros de la tabla 'usuario'
                $registro = mysqli_query($conex,'select*from usuario') or die ("error".mysqli_error($conex));

                // Itera a través de cada registro (usuario) encontrado en la base de datos
                while($reg = mysqli_fetch_array($registro)) {
                    // Muestra cada registro en una fila de la tabla HTML
                    echo '<tr>';
                    echo '<th>'.$reg['id_usu'].'</th>';    // Muestra el ID del usuario
                    echo '<th>'.$reg['nom_usu'].'</th>';   // Muestra el nombre del usuario
                    echo '<th>'.$reg['ape_usu'].'</th>';   // Muestra el apellido del usuario
                    echo '<th>'.$reg['tdo_usu'].'</th>';   // Muestra el tipo de documento
                    echo '<th>'.$reg['ndo_usu'].'</th>';   // Muestra el número de documento
                    echo '<th>'.$reg['tel_usu'].'</th>';   // Muestra el teléfono del usuario
                    echo '<th>'.$reg['usu_usu'].'</th>';   // Muestra el nombre de usuario
                    echo '<th>'.$reg['pass_usu'].'</th>';  // Muestra la contraseña (aunque no es recomendable mostrarla en texto plano)
                    echo '<th>'.$reg['rol_usu'].'</th>';   // Muestra el rol del usuario
                    $ff = $reg['fot_usu'];               // Obtiene la ruta de la foto del usuario
                    // Muestra la foto del usuario en una imagen de tamaño 120x120 píxeles
                    echo "<th><img src=\"$ff\" width=120 height=120></th>
                </tr>";
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
