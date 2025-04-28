<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración general -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_con.css"> <!-- Archivo de estilos -->
    <title>Document</title>
</head>
<body>

<?php
    // Incluir encabezado de la página
    require_once 'content_princi/header_2.html';

    // Conectar a la base de datos
    require_once 'conexion.php';

    // Consulta para buscar un usuario por número de documento (usando el valor enviado por GET o POST)
    $registro = mysqli_query($conex, "SELECT * FROM usuario WHERE ndo_usu = '$_REQUEST[cod]' ") 
    or die ("error".mysqli_error($conex));

    // Mostrar los datos del usuario encontrado
    while ($reg = mysqli_fetch_array($registro)) {
        echo '<div class="consulta">';
        echo '<p id="ficha">Ficha técnica</p>'; // Título
        echo '<p id="pa">Usuario #  '.$reg['id_usu'].'</p>'; // ID del usuario
        echo '<p id="pa">Nombre:   '.$reg['nom_usu'].'</p>'; // Nombre
        echo '<p id="pa">Apellido:  '.$reg['ape_usu'].'</p>'; // Apellido
        echo '<p id="pa">Tipo de documento:  '.$reg['tdo_usu'].'</p>'; // Tipo documento
        echo '<p id="pa">Número de documento:  '.$reg['ndo_usu'].'</p>'; // Número documento
        echo '<p id="pa">Teléfono:  '.$reg['tel_usu'].'</p>'; // Teléfono
        echo '<p id="pa">Usuario:  '.$reg['usu_usu'].'</p>'; // Usuario (nombre de usuario)
        echo '<p id="pa">Contraseña:  '.$reg['pass_usu'].'</p>'; // Contraseña (¡cuidado con mostrarla!)
        echo '<p id="pa">Rol:  '.$reg['rol_usu'].'</p>'; // Rol de usuario (operario, supervisor, etc.)

        // Foto del usuario
        $ff = $reg['fot_usu'];
        echo "<p id='pa'>Foto: <img src=\"$ff\" width=120 height=120></p>";
        echo '</div>';
    }

    // Cerrar conexión a la base de datos
    mysqli_close($conex);
?>


          <!-- Botón para regresar -->
    <button id="volver"><a href="supervisor.php">Volver</a></button>

<?php
    // Incluir el pie de página
    require_once 'content_princi/footer.html';
?>
</body>
</html>
